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
    Route::get('/burguer/inactive', 'BurguerController@inactive')->name('burguer.inactive');
    
});
Route::resource('burguer', 'BurguerController');
Route::resource('extra', 'ExtraController');

Auth::routes();
