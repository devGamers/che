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

Route::get('actualités', 'SiteController@actualite')->name('actualite');

Route::get('partenaires', 'SiteController@partenaire')->name('partenaire');

Route::get('spécialités', 'SiteController@specialite')->name('specialite');

Route::get('conactez-nous', 'SiteController@contact')->name('contact');

Route::get('/', 'SiteController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
