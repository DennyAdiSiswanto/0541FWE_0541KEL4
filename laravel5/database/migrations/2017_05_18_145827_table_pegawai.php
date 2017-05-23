<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('ktp');
            $table->text('alamat');
            $table->integer('manager_id',false,true);
            $table->foreign('manager_id')->references('id')->on('manager')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('gaji_id',false,true);
            $table->foreign('gaji_id')->references('id')->on('gaji')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('ruang_id',false,true);
            $table->foreign('ruang_id')->references('id')->on('ruang')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('pegawai');
    }
}
