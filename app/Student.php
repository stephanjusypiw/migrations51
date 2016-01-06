<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";

    // create the relationship to apparatuss
    public function apparatuss()
    {
    	return $this->belongsToMany('App\Apparatus')->withTimestamps();
    }
    
}
