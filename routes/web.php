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
});

Route::get('/hola-mundo',function(){
    return 'HOla MUNDO PHP LARAVEl rutas funcionando';
});

Route::get('/routecontrolador','ControladorTest@getControladorTest');

Route::get('/token','ControladorTest@getToken');

Route::get('/getdatafromdatabase','ControladorTest@getDataFromDb');

Route::post('/insertdataintodatabase','ControladorTest@inDataInToDataBase');

Route::post('/deletedataintodatabase','ControladorTest@delDataInToDataBase');

Route::post('/updatedata','ControladorTest@updateDataBase');

//entidad y relacion
Route::get('/entidadrelacion','ControladorTest@entidadYrelacion');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
