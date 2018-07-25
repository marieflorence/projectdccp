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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('clients', 'ClientsController');

Route::resource('prospects', 'ProspectsController');

Route::resource('produits', 'ProduitController');

Route::resource('profils', 'ProfilController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UsersController');

Route::resource('traitements', 'TraitementController');

Route::resource('gestionnaires', 'GestionnaireController');

Route::resource('agences', 'AgenceController');

Route::resource('descriptions', 'DescriptionController');