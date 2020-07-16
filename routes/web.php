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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'prefix' => 'dashboard', 'namespace' => 'Dashboard', 'as' => 'dashboard.', 'middleware' => 'auth' ], function() {
	Route::get('/', 'DashboardController@index' )->name('index');
    Route::get('/account', 'AccountController@index')->name('account');
    Route::get('/members','UserController@index')->name('members.index');
    Route::get('/events','EventController@index')->name('events.index');
});

Route::get('/account', 'Dashboard\AccountController@index')->name('account');
Route::resource('events', 'EventController')->only([
   'index',
   'show'
]);
Route::resource('realisations', 'RealisationController')->only([
    'index',
    'show'
]);
Route::get('about-us', 'WelcomeController@about')->name('about-us');
Route::get('contact', 'WelcomeController@contact')->name('contact');
Route::get('donation', 'WelcomeController@donation')->name('donation');
