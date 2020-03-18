<?php

namespace App\Http\Controllers;
use DB;
use Exception;
use Illuminate\Http\Request;

use App\Articulo;
use App\Categoria;
use App\Multimedia;
use App\ArtPortada;


class AdminArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articulos = Articulo::all();
        return view('admin.articulos.index', ['articulos' => $articulos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        return view('admin.articulos.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $usuario_id = 1;
        DB::beginTransaction();
        try {
            //subir portada a multimedia
            //Asignamos las reglas de extensiones de archivos para subir
            $rules = array('jpg','png','bmp');
            //El path desde donde se envia el archivo
            $path = storage_path().DIRECTORY_SEPARATOR.$request->portada->getClientOriginalName();
            //Nombre del archivo
            $nombre =  pathinfo($path, PATHINFO_FILENAME);
            //Extensión del archivo
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            //Comprobamos que la extensión del archivo esté en las reglas
            if (in_array($ext, $rules)) {
                //Agregamos un registro en la tabla multimedia con su nombre y extensión original
                    $multimedia = new Multimedia;
                    $multimedia->nombre = $nombre;
                    $multimedia->extension = $ext;
                    $multimedia->save();
                //path de destino
                    $destinationPath = public_path('img/portadas/');
                //Subimos el archivo al path de destino y le asignamos un nombre nuevo mediante el id que nos provee el registro de multimedia
                    $request->portada->move($destinationPath, $multimedia->id.'.'.$ext);
                //asignamos el archivo a la tabla de documentación para finalizar la operación
                $art_portada = new ArtPortada;
                $art_portada->descripcion = $request->descripcionPortada;
                $art_portada->multimedia_id = $multimedia->id;
                $art_portada->save();
            }
            $articulo = new Articulo;
            $articulo->titulo = $request->titulo;
            $articulo->subtitulo = $request->subtitulo;
            $articulo->copete = $request->copete;
            $articulo->cuerpo = $request->cuerpo;
            $articulo->artportada_id = $art_portada->id;
            $articulo->categoria_id = $request->categoria;
            $articulo->usuario_id = $usuario_id;
            $articulo->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            dd($e);
            $exit();
            return redirect()->back()->with(['success' => 'Hubo un problema al crear el registro.']);
        }
        return redirect()->back()->with(['success' => 'Registro creado correctamente!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $articulo = Articulo::findOrFail($id);
        return view('admin.articulos.edit', ['articulo' => $articulo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::beginTransaction();
        try {
            $articulo = Articulo::findOrFail($id);
            $articulo->nombre = $request->nombre;
            $articulo->descripcion = $request->descripcion;
            $articulo->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['success' => 'Hubo un problema al crear el registro.']);
        }
        return redirect()->back()->with(['success' => 'Registro actualizado correctamente!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Articulo::destroy($request->idEliminar);
        return redirect()->back()->with(['success' => 'Registro eliminado correctamente!']);
    }
}
