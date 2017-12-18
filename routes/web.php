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

Route::get('/api/all_course', 'ApiController@getAllCourse')->name('api.allcourse');

Route::get('/api/{id}/get_content', 'ApiController@getContent')->name('api.getcontent');

Route::get('/api/{id}/get_sub_one', 'ApiController@listOfSubOne')->name('api.listofsubone');

Route::get('/api/{id}/get_sub_one_content', 'ApiController@getSubOneContent')->name('api.getsubonecontent');

Route::get('/api/{id}/get_sub_two', 'ApiController@listOfSubTwo')->name('api.listofsubtwo');

Route::get('/api/{id}/get_sub_two_content', 'ApiController@getSubTwoContent')->name('api.getsubtwocontent');

Route::get('/api/{id}/videos', 'ApiController@listOfVideo')->name('api.getvideos');

Route::get('/api/{id}/video', 'ApiController@getVideo')->name('api.getvideo');

Route::get('/api/{id}/stream_content', 'subContentOneController@get_content_stream');