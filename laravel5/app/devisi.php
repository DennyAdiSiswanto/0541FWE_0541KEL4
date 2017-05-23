<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class devisi extends Model
{
 protected $table = 'devisi';
    protected $fillable = ['id','Title'];



   public function manager(){
	return $this->hasmany(manajer::class);
}
}
