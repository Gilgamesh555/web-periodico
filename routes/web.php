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
    return view('welcome');
})->name('home.real');

Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/noti/{id}', 'HomeController@noti');//Detalle de noticia por el id de la misma
Route::get('/sect/{id}', 'HomeController@sect');//
Route::get('category/{id}', 'HomeController@cat');//Seccion categorias de la noticia, mas solo las cards
Route::get('anuncio/{id}', 'HomeController@announce');

Route::get('/info', 'HomeController@info');//Seccion informacion universitaria
Route::get('/info/{id}', 'HomeController@infodet');//Detalles de la informacion universitaria

Route::get('/contacts', 'HomeController@contacts');//Contactos de la Universidad

Route::get('/transmition', 'HomeController@transmition');//Transmisiones de la Universidad

Route::get('/tvu', 'HomeController@tvu');
Route::get('/admin', 'HomeController@admin');
Route::get('/verify', 'AuthController@verifyUser')->name('verify.user');

Route::view('/{route?}', 'adminpub.home');
// Route::get('info/{id}', 'HomeController@info');//Detalle de la informacion




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
