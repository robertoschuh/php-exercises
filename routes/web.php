<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'LessonController@index');

//Route::get('/{category}/{title?}', 'ExerciseController@index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/exercise/edit/{id}', 'ExerciseController@edit');
	Route::put('/exercise/edit/{id}', 'ExerciseController@update');
	Route::get('/exercise/new', function () {
	    return view('exercises.new');
	});
	Route::post('/exercise/store', 'ExerciseController@store');

	Route::get('/lesson/new', function () {
	    return view('lessons.new');
	});

	Route::post('/lesson/store', 'LessonController@store');

    Route::get('/categories', 'CategoryController@index');
    Route::get('/category/new', function () {
	    return view('categories.new');
	});

	Route::post('/category/store', 'CategoryController@store');


});

