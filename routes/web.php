<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::middleware('auth')
   ->namespace('Ura')
   ->name('ura.')
   ->prefix('ura')
   ->group(function () {
        // Route::get('/', 'AdminController@dashboard')->name('dashboard');
        // Route::get('users', 'UserController@index')->name('users.index');
        Route::resource('apartments', 'ApartmentController');
        Route::resource('messages', 'MessageController');
        Route::resource('sponsorships', 'SponsorshipController');
        Route::get('/home', 'HomeController@index')->name('home');
   });


   Route::get("{any?}", function() {
    return view("welcome");
})->where("any", ".*");
