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

Route::get('welcome','HomeController@welcome');
Route::get('about-post','HomeController@post');
Route::get('/berita/page','HomeController@page');


Route::get('/berita/index','HomeController@index_berita');

Route::get('/berita/create','HomeController@create');
Route::post('/berita/create','HomeController@save');
Route::get('/berita/edit/{id}','HomeController@edit');
Route::post('/berita/edit','HomeController@update');

Route::get('berita/delete/{id}','HomeController@delete')->name('deleteberita');

Route::get('berita/show/{id}', 'HomeController@show');
Route::get('readmore/{id}', 'HomeController@readmore');

Route::get('berita/downlodpdf_allberita', 'HomeController@downloadpdf_allberita')->name('downloadpdf_allberita');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', function() {
    Auth::logout();
    return redirect(url('welcome'));

});