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
    return view('welcome');
});

Route::resource('students', 'App\Http\Controllers\StudentController');
Route::resource('subjects', 'App\Http\Controllers\SubjectController');
Route::post('students/point/{id}', 'App\Http\Controllers\StudentController@createPoint')->name('point.create');
Route::delete('students/{student_id}/point/{subject_id}','App\Http\Controllers\StudentController@destroyPoint')->name('point.destroy');
Route::get('language/{locale}', 'App\Http\Controllers\LanguageController@index')->name('language.index');
