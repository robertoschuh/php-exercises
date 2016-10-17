<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
	protected $fillable = ['title', 'body', 'category', 'solution', 'created_at', 'updated_at'];

	public function categories()
    {
        return $this->belongsToMany('App\Category')
        ->withTimestamps(); //->withPivot('id','amount');
    }

}
