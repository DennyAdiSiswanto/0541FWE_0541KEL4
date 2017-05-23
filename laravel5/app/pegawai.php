<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
  protected $table = 'pegawai';
    protected $fillable =['nama','ktp','alamat','manager_id','gaji_id','ruang_id'];
    protected $guarded =['id'];

     public function manager(){
    return $this->belongsTo(manager::class);
	}

	public function gaji(){
    return $this->belongsTo(gaji::class);
	}

	public function kerja(){
    return $this->hasMany(kerja::class,'id');
	}

	public function ruang(){
    return $this->belongsTo(ruang::class);
	}
}
