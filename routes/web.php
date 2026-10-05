<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/works/articles', function () {
    return view('articles');
});
Route::get('/works/book', function () {
    return view('book');
});
Route::get('/contact', function () {
    return view('contact');
});