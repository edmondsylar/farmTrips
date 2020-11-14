<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Group;


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
Route::resource('/cars', 'CarsController');
Route::post('/join', 'HomeController@join');
Route::get('/divers/available', 'DriversController@available')->name('available');
// Route::post('/divers/hire/{$driver}', 'DriversController@hire')->name('hire');
Route::get('/divers_request', 'DriversController@request')->name('request');

Route::resource('/hire', 'Hire');

Route::resource('/trips', 'TripsController');

//Joining a group View
Route::get('/join_group/{id}', function($id){

    if(!Auth::user()){
        return view('auth.login');
    }

    $group = Group::find($id);

    // return $group;
    return view('group_join')
        ->with('group', $group);
});

Route::get('/create_group', function () {

    $create = '';
    return view('m_groups')
    ->with('create', $create);
});
Route::resource('/response', 'ResponseController');


use App\driverReequests;

Route::get('/trip_start/{$id}', function($id){
        
    driverReequests::where('id', $id)
        ->update(['status'=>'started']);


    return back();
});

Route::resource('/proc', 'Proc');


