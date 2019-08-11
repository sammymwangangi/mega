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
    return view('index');
});

Route::get('about', function() {
    return view('about');
});
Route::get('blog', function() {
    return view('blog');
});
Route::get('contact', function() {
    return view('contact');
});
Route::get('projects', function() {
    return view('projects');
});
Route::get('services', function() {
    return view('services');
});
Route::get('civil', function() {
    return view('civil');
});
Route::get('electrical', function() {
    return view('electrical');
});
Route::get('ict', function() {
    return view('ict');
});
Route::get('plumbing', function() {
    return view('plumbing');
});
Route::get('solar', function() {
    return view('solar');
});
Route::get('404', function() {
    return view('404');
});
