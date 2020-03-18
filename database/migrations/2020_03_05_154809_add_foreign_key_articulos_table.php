<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articulos', function (Blueprint $table) {
            //
            $table->foreign('artportada_id', 'FK_ArtPortadaArticulo')->references('id')->on('art_portadas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('categoria_id', 'FK_CategoriaArticulo')->references('id')->on('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('usuario_id', 'FK_UsuarioArticulo')->references('id')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articulos', function (Blueprint $table) {
            //
            $table->dropForeign('FK_ArtPortadaArticulo');
            $table->dropForeign('FK_CategoriaArticulo');
            $table->dropForeign('FK_UsuarioArticulo');
        });
    }
}
