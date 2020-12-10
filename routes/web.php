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
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', function(){
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});

Route::get('/try', function(){
    return view('try');
});




Route::get('/penalties', function(){
    return view('website.penalties');
});
Route::get('/laws', function(){
    return view('website.laws');
});
Route::get('/cruelty', function(){
    return view('website.cruelty');
});
Route::get('/importance', function(){
    return view('website.importance');
});


Route::get('/aboutUs', function(){
    return view('website.aboutUs');
});


