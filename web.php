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
Route::get('/funzone', function () {
    return view('user');
});
Route::get('/about', function (){
    return view('about');

});
Route::get('POST', function (){
    return view('login');

});
Route::get('/user', function (){
    return view('user');

});
Route::get('/art', function (){
    return view('art');

});
Route::get('/edit', function (){
    return view('edit');

});
Route::get('/view', function (){
    return view('view');

});
Route::get('view','view@index');
Route::get('/editsubmit','edit@editsubmit');

Route::get('/logout', 'post@logout');


Route::get('/forgot', function (){
    return view('layout');

});

Route::get('/forgotsubmit','forgot@forgotsubmit');
Route::get('/create', function (){
    return view('create');

});
Route::get('/posts', function (){
    return view('post');

});
Route::get('/loginsubmit', 'post@loginsubmit');
Route::get('/submit', 'create@submit');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
