<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPublicidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publicidads', function (Blueprint $table) {
            //
            $table->foreign('multimedia_id', 'FK_MultimediaPublicidad')->references('id')->on('multimedia')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publicidads', function (Blueprint $table) {
            //
            $table->dropForeign('FK_MultimediaPublicidad');
        });
    }
}
