<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Exercise;

class ExerciseController extends Controller
{
    function index($category = NULL){

    	$exercises = Exercise::all();
    	return view('exercises.index', ['exercises' => $exercises]);
    }

     function store(Request $Request){

    	$exercise = new Exercise;
    	
    	if ($exercise->update($request->all())) {
    		return 'yeah';
    	}

    	return 'no yeah';

    }
}