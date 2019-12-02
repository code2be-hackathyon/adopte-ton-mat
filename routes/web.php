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

Route::get('/', 'CategorieController@index')->name('home');

Route::get('/Categorie/{categorie}','CategorieController@details')->name('categorie.details');

//Route::get('/accueil/association','AssociationController@index')->name('Association.index');
Route::get('/accueil/association','AssociationController@index')->name('Association.index');
