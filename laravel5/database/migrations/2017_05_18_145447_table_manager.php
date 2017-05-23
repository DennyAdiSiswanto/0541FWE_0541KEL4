<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableManager extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('ktp');
            $table->text('alamat');
            $table->integer('pengguna_id',false,true);
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('devisi_id',false,true);
            $table->foreign('devisi_id')->references('id')->on('devisi')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('manager');
    }
}
