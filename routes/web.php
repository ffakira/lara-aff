<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/skills', function() {
   return view('skills');
});

Route::get('/blog', function() {
    return view('blog.index');
});

Route::get('/blog/post/{name}', function() {
   return view('blog.post.index');
});

Route::get('blog/post/create', function() {
    return view('blog.post.create');
});


Route::post('/contact/store', 'FormController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
