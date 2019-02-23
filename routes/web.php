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
    if(Auth::check()){
        return Redirect::to('/trips');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'TripsController@index')->name('home');
Route::get('/trips', 'TripsController@index')->name('trips');
Route::get('/addTrip', 'TripsController@addTrip')->name('addTrip');
Route::get('/futureTrips', 'FutureTripsController@index')->name('futureTrips');
Route::post('/trips', 'TripsController@create');
Route::get('/trips-edit', 'TripsController@edit')->name('editTrip');
Route::post('/trips-update',  'TripsController@update');
Route::get('/trips-delete', 'TripsController@delete');
Route::get('/users', 'UsersController@index')->name('users');
Route::post('/users-update', 'UsersController@update');
Route::get('/users-edit', 'UsersController@edit');
Route::get('/users-delete', 'UsersController@delete');


