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



Route::get('/todos' ,[
 
    'uses' => 'TodosController@index'

]);

Route::get('/todo/delete/{id}' , [
'uses' => 'TodosController@delete',
'as' => 'todo.delete'

]);

Route::post('/create/todo',[

   'uses' => 'TodosController@store'

]);