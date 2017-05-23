<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruang extends Model
{
   protected $table  ='ruang';
    protected $fillable =['title']; 

     public function pegawai(){
    return $this->hasMany(pegawai::class);
	}
}
