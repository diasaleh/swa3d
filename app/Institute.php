<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    public function InstDirector(){
    	return $this->hasMany('InstDirector');
    }
}