<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kerja extends Model
{
 protected $table  ='kerja';
    protected $fillable =['jam_kerja','pegawai_id','cuti_id']; 
    protected $guarded =['id'];

    public function pegawai(){
    return $this->belongsTo(pegawai::class);
	}

	public function cuti(){
    return $this->belongsTo(cuti::class);
	}
}
