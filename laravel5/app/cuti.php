<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
  protected $table  ='cuti';
    protected $fillable =['total_hari']; 

    	public function kerja(){
    return $this->hasMany(cuti::class);
	}
}
