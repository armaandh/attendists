<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{instructor}', function($instructor){
  $teacher = App\Instructor::where('first_name', $instructor)->first();


  return View::make('instructor')->with('instruc', $teacher);
});

// Route::get('/profile/{student}', function($student){
//
//     $stud = App\Student::where('first_name', $student)->first();
//     dd($stud);
// });
