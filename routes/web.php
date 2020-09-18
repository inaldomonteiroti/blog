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

//O vsalor de interrogação é não obrigatório
Route::get('/contato/{id?}',function($id = null){
    return "Contato id = $id";
});

Route::post('/contato',function(){
    dd($_POST);
    return "Contato POSTS";
});

Route::put('/contato',function(){

    return "Contato PUT";
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
