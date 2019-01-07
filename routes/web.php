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

Route::resource('/users', 'UserController');
Route::resource('/clients', 'ClientController');
Route::any('/clients/dispatch', 'ClientController@setUpdateBy')->name("setUpdateBy");
Route::any('/clients/step', 'ClientController@setStep')->name("setStep");
Route::get('/search', 'SearchController@search')->name('search');
Route::get('/newForm', 'SearchController@newForm')->name('newForm');
Route::any('/import', 'ImportController@import')->name('import');
Route::any('/export', 'ImportController@export')->name('export');
Route::any('/appels/{id?}', 'AppelController@appel')->name('appels');
Route::any('/rappels/{id?}','RappelController@rappel')->name('rappels');
Route::any('/enattente/{id?}','EnattenteController@enattente')->Name('enattente');
Route::any('/decisions/{id?}','DecisionsController@decisions')->Name('decisions');
Route::any('/promesses/{id?}','PromessesController@promesses')->Name('promesses');
Route::any('/injoignables/{id?}','InjoignablesController@injoignables')->Name('injoignables');
Route::any('/injoignablespermanents/{id?}','InjoignablespermanentsController@injoignablespermanents')->Name('injoignablespermanents');
Route::any('/fauxnumeros/{id?}','FauxnumerosController@fauxnumeros')->Name('fauxnumeros');
Route::any('/intraitables/{id?}','IntraitablesController@intraitables')->Name('intraitables');
Route::any('/doublons/{id?}','DoublonsController@doublons')->Name('doublons');
Route::any('/refus/{id?}','RefusController@refus')->Name('refus');
Route::any('/signes/{id?}','SignesController@signes')->Name('signes');
Route::any('/instances/{id?}','InstancesController@instances')->Name('instances');
Route::any('/sanseffet/{id?}','SanseffetController@sanseffet')->Name('sanseffet');
Route::any('/sanseffetresignes/{id?}','SanseffetresignesController@sanseffetresignes')->Name('sanseffetresignes');
Route::any('/souscrits/{id?}','SouscritsController@souscrits')->Name('souscrits');
Route::any('/instancescie/{id?}','InstancescieController@instancescie')->Name('instancescie');
Route::any('/sanseffetcie/{id?}','SanseffetcieController@sanseffetcie')->Name('sanseffetcie');
Route::any('/secieresignes/{id?}','SecieresignesController@secieresignes')->Name('secieresignes');
Route::any('/encours/{id?}','EncoursController@encours')->Name('encours');
Route::any('/resilies/{id?}','ResiliesController@resilies')->Name('resilies');
Route::any('/resiliesr/{id?}','ResiliesrController@resiliesr')->Name('resiliesr');
