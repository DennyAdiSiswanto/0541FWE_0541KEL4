<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manager extends Model
{
   protected $table='manager';
    protected $guarded = ['id'];

    public function pengguna(){
    	return $this->belongsTo(pengguna::class,'id');
    }
    public function pegawai()
    {
    	return $this->hasmany(pegawai::class);
    }
    public function devisi(){
    	return $this->belongsTo(devisi::class);
    }
//    public function listDosenDanNIP()
//   {
//      $out = [];
//      foreach ($this->all() as $dsn) {
//         $out[$dsn->id] = "{$dsn->Nama} ({$dsn->NIP})";
//      }
//      return $out;
//   }
}