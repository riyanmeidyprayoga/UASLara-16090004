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

Auth::routes();

Route::get('/about',function() {
    return view('frontend.about');
});

Route::get('/home', 'HomeController@index')->name('home');

//FRONT-END
Route::resource('/','FrontendController');
Route::resource('kategori-wisata','KategoriWisataController');
Route::resource('all-wisata','AllWisataController');

//BACK-END
Route::resource('log','LogController');
Route::resource('beranda','BerandaController');
Route::resource('wisata','WisatasController');
Route::resource('user','UsersController');
Route::resource('kategori','KategorisController');
