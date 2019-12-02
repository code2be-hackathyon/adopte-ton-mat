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


Route::get('/ficheAssociation', function () {
    return view('ficheAssociation');
});

Auth::routes();

Route::get('/', 'CategorieController@index')->name('home');

Route::get('/home', 'CategorieController@index')->name('home');

Route::get('/association','AssociationController@index')->name('association.index');

Route::get('/materiel/{categorie}','MaterielController@details')->name('materiel.details');

Route::get('/maladie','MaladieController@index')->name('maladie.index');

Route::get('/materiel','MaterielController@index')->name('materiel.index');

Route::get('/sous_categoire','SousCategorieController@index')->name('sousCategoire.index');


