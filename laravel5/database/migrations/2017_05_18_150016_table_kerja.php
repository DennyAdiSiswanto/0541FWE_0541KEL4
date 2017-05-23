<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerja', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jam_kerja');
            $table->integer('pegawai_id',false,true);
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cuti_id',false,true);
            $table->foreign('cuti_id')->references('id')->on('cuti')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kerja');
    }
}
