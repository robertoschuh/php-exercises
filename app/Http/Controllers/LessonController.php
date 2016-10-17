<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Exercise;
use App\Lesson;


class LessonController extends Controller
{
    public function index(){
    	$lessons = Lesson::all();
    	return view('lessons.index', ['lessons' => $lessons]);
    }

}
