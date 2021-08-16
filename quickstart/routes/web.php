<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('student', 'App\Http\Controllers\StudentController');
Route::post('student/update/{id}','App\Http\Controllers\StudentController@update')->name('student_update');
Route::resource('subject', 'App\Http\Controllers\SubjectController');
Route::post('student/point/{id}', 'App\Http\Controllers\StudentController@createPoint')->name('point.creat');
Route::delete('student/{student_id}/point/{subject_id}','App\Http\Controllers\StudentController@destroyPoint')->name('point.destroy');
Route::get('language/{locale}', 'App\Http\Controllers\LanguageController@index')->name('language.index');

