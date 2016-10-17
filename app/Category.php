<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function lessons()
    {
        return $this->hasMany('App\Lessons');
        
    }

    public function exercises()
    {
        return $this->belongsToMany('App\Exercise')
        ->withTimestamps(); //->withPivot('id','amount');
    }





}
