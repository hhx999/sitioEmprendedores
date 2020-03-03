@extends('adminlte::page')

@section('title', 'Artículos')

@section('content_header')
    <h1>Artículos</h1>
@stop

@section('content')
<div class="row">
          <div class="col-md-12">
             <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresar título del artículo...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Copete</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresar copete...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Imagen de portada</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Elegir imagen</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                        <label>Categoría</label>
                        <select class="custom-select">
                          <option selected disabled>Elegir categoría...</option>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                  </div>
            </div>
          <!-- EDITOR -->
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Ingresar artículo
                <small>Categoría</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              <p class="text-sm mb-0">
                Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                information.</a>
              </p>
            </div>
          </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-primary">Agregar artículo</button>
          </div>
        </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop