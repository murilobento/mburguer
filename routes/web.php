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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    //PAINEL
    Route::get('/', function () {
        return redirect('login');
    });
    Route::get('/home', 'HomeController@index')->name('home');

    /*BURGUER
    Route::get('burguer/add', 'BurguerController@create');
    Route::post('burguer/salvar', 'BurguerController@save');
    Route::get('burguer/', 'BurguerController@index');
    Route::get('burguer/{id}/editar', 'BurguerController@edit');
    Route::patch('burguer/{id}', 'BurguerController@update');
    Route::delete('burguer/{id}', 'BurguerController@delete');*/
});
Route::resource('burguer', 'BurguerController');

Auth::routes();
