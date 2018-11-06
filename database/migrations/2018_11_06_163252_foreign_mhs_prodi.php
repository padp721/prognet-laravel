<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignMhsProdi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('mahasiswas', function (Blueprint $table)
        {
            $table->renameColumn('prodi', 'prodi_id');
        });

        Schema::table('mahasiswas', function (Blueprint $table)
        {
            $table->unsignedInteger('prodi_id')->change();
        });

        Schema::table('mahasiswas', function (Blueprint $table)
        {
            $table->foreign('prodi_id')
              ->references('id')
              ->on('prodis')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
