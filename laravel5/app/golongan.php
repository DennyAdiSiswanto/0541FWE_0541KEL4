<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class golongan extends Model
{
     protected $table  ='golongan';
    protected $fillable =['title'];

    public function gaji(){
    return $this->hasMany(gaji::class);
	} 
}
