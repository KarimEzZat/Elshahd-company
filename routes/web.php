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

Route::get('/', 'WelcomeController@index')->name('welcome');
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...

]);

Route::middleware(['auth'])->group(function (){
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('all-videos', 'VideoController@index')->name('videos');
    Route::get('videos/create', 'VideoController@create')->name('videos.create');
    Route::post('videos/store', 'VideoController@store')->name('videos.store');
    Route::get('videos/edit/{id}', 'VideoController@edit')->name('videos.edit');
    Route::put('videos/update/{video}', 'VideoController@update')->name('videos.update');
    Route::delete('videos/trash/{video}', 'VideoController@destroy')->name('videos.destroy');
    Route::get('trashed-videos', 'VideoController@trashed')->name('trashed-videos.index');
    Route::put('restore.video/{video}', 'VideoController@restore')->name('restore-video');

    Route::get('users', 'UsersController@index')->name('users.index');
    Route::get('users/profile', 'UsersController@edit')->name('users.edit-profile');
    Route::put('users/profile/{user}', 'UsersController@update')->name('users.update-profile');
    Route::get('company-detail', 'CompanyController@index')->name('company');
    Route::put('company-detail/update/{company}', 'CompanyController@update')->name('company.update');

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


});


