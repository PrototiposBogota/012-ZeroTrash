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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

########### Rotas Novedades #########################

Route::resource('novelty', 'NoveltyController');
Route::get('/novelty/edit/{id}', 'NoveltyController@edit')->name('novelty.edit');
Route::get('/novelty/destroy/{id}', 'NoveltyController@destroy')->name('novelty.destroy');
Route::post('/novelty/update/{id}', 'NoveltyController@update')->name('novelty.update');


########### Rotas Carros #########################

Route::resource('cars', 'CarsController');
Route::get('/cars/edit/{id}', 'CarsController@edit')->name('cars.edit');
Route::get('/cars/destroy/{id}', 'CarsController@destroy')->name('cars.destroy');
Route::post('/cars/update/{id}', 'CarsController@update')->name('cars.update');

########### Rotas Users #########################

Route::resource('users', 'UsersController');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
Route::get('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');
Route::post('/users/update/{id}', 'UsersController@update')->name('users.update');

Route::resource('inventory', 'recyclingInventoryController');
Route::get('/inventory/edit/{id}', 'recyclingInventoryController@edit')->name('inventory.edit');
Route::get('/inventory/destroy/{id}', 'recyclingInventoryController@destroy')->name('inventory.destroy');
Route::post('/inventory/update/{id}', 'recyclingInventoryController@update')->name('inventory.update');