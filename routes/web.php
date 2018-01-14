<?php

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('courses', 'CourseController');

Route::resource('contents', 'ContentController');

Route::get('/contents/{id}/create', 'ContentController@create')->name('contents.create');

Route::resource('subContentOnes', 'subContentOneController');

Route::get('/subContentOne/{id}/create', 'subContentOneController@create')->name('subContentOne.createID');

Route::resource('subContentTwoRepositories', 'subContentTwoRepositoryController');

Route::get('subContentTwo/{id}/create', 'subContentTwoRepositoryController@create')->name('subContentTwo.createID');

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

Route::get('/sub_content_one/{id}/view', 'subContentOneController@view_full')->name('subContentOnes.view');