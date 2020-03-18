<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyArtPortadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('art_portadas', function (Blueprint $table) {
            //
            $table->foreign('multimedia_id', 'FK_MultimediaPortada')->references('id')->on('multimedia')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('art_portadas', function (Blueprint $table) {
            //
            $table->dropForeign('FK_MultimediaPortada');
        });
    }
}
