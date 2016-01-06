<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apparatus extends Model
{
    protected $table = "apparatuss";

    // create the relationship to students
    public function students()
    {
    	return $this->belongsToMany('App\Student')->withTimestamps();
    }
}
