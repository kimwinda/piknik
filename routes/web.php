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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();{


Route::get('/', function () {
	return view('isi');
});

Route::get('about-us','AboutUsController@index');
Route::get('event-front','EventController@index')->name('event-front');
Route::get('gallery-front','GalleryController@index')->name('gallery-front');
Route::get('kuliner','KulinerController@index');
Route::get('alam','AlamController@index');
Route::get('pantai','PantaiController@index');
Route::get('edukasi','EdukasiController@index');
Route::get('museum','MuseumController@index');
Route::get('desa','DesaController@index');


Route::get('/admin', function () {
	return view('back.isi');
});



Route::group(['middleware' => [ 'auth', 'role:editor']],function(){

Route::get('/kategori','Admin\KategoriController@index');
Route::get('kategori-add','Admin\KategoriController@create')->name('kategori-add');
Route::post('kategori-store','Admin\KategoriController@store')->name('kategori-store');
Route::get('kategori-edit/{id}', 'Admin\KategoriController@edit');
Route::post('kategori-update','Admin\KategoriController@update')->name('kategori-update');
Route::get('kategori-delete/{id}', 'Admin\KategoriController@destroy');
Route::post('kategori-search/','Admin\KategoriController@search')->name('kategori-search');

Route::get('/artikel','Admin\ArtikelController@index');
Route::get('artikel-add', 'Admin\ArtikelController@create')->name('artikel-add');
Route::post('artikel-store','Admin\ArtikelController@store')->name('artikel-store');
Route::get('artikel-edit/{id}', 'Admin\ArtikelController@edit');
Route::post('artikel-update','Admin\ArtikelController@update')->name('artikel-update');
Route::get('artikel-delete/{id}', 'Admin\ArtikelController@destroy');
Route::post('artikel-search/','Admin\ArtikelController@search')->name('artikel-search');

});

Route::group(['middleware' => [ 'auth', 'role:admin']],function(){

Route::get('/gallery','Admin\GalleryController@index');
Route::get('gallery-add', 'Admin\GalleryController@create')->name('gallery-add');
Route::post('gallery-store','Admin\GalleryController@store')->name('gallery-store');
Route::get('gallery-edit/{id}', 'Admin\GalleryController@edit');
Route::post('gallery-update','Admin\GalleryController@update')->name('gallery-update');
Route::get('gallery-delete/{id}', 'Admin\GalleryController@destroy');
Route::post('gallery-search/','Admin\GalleryController@search')->name('gallery-search');

Route::get('/user','Admin\UserController@index');
Route::get('user-add', 'Admin\UserController@create')->name('user-add');
Route::post('user-store','Admin\UserController@store')->name('user-store');
Route::get('user-edit/{id}', 'Admin\UserController@edit');
Route::post('user-update','Admin\UserController@update')->name('user-update');
Route::get('user-delete/{id}', 'Admin\UserController@destroy');
Route::post('user-search/','Admin\UserController@search')->name('user-search'); 

});

Route::group(['middleware' => [ 'auth', 'role:users']],function(){

Route::get('/event','Admin\EventController@index');
Route::get('event-add', 'Admin\EventController@create')->name('event-add');
Route::post('event-store','Admin\EventController@store')->name('event-store');
Route::get('event-edit/{id}', 'Admin\EventController@edit');
Route::post('event-update','Admin\EventController@update')->name('event-update');
Route::get('event-delete/{id}', 'Admin\EventController@destroy');
Route::post('event-search/','Admin\EventController@search')->name('event-search');

});

}

Route::get ('/redirect/{provider}', 'SocialAuthController@redirect' );
Route::get ('/callback/{provider}', 'SocialAuthController@callback' );