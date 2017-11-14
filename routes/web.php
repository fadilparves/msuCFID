<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('courses', 'CourseController');

Route::resource('contents', 'ContentController');

Route::resource('subContentOnes', 'subContentOneController');

Route::resource('subContentTwoRepositories', 'subContentTwoRepositoryController');

Route::get('video-upload', 'VideoUploaderController@create')->name('video.upload');

Route::post('video-upload', 'VideoUploaderController@store')->name('video.store');

Route::get('video/{id}', 'VideoUploaderController@show')->name('video.show');

Route::delete('video/{id}', 'VideoUploaderController@destroy')->name('video.destroy');