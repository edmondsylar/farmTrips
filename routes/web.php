<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Auth::routes();
Route::get('/', function () {
    return redirect('/home');
});

//most routes will be placed in this controller.
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/roles', 'HomeController@roles')->name('roles');
Route::get('/m_groups', 'HomeController@m_groups')->name('m_groups');
Route::post('/complete_reg', 'HomeController@complete_reg');
Route::resource('/groups', 'GroupsController');

Route::get('/create_group', function () {

    $create = '';
    return view('m_groups')
    ->with('create', $create);
});