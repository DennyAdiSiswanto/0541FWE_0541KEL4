<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
 protected $table  ='gaji';
    protected $fillable =['gaji']; 

    public function pegawai(){
    return $this->hasMany(pegawai::class,'');
	}

	public function golongan(){
    return $this->belongsto(golongan::class);
	}
}
