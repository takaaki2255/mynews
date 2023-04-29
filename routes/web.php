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

Route::group(['prefix' => 'admin'],function() {
    Route::get('news/create', 'Admin\NewsContreoller@add')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add')->middleware('auth');
});

// 課題内容追加 
use App\Http\Controllers\Admin\ProfileController;
Route::controller(ProfileController::class)->prefix('admin')->group(function(){
    Route::get('profile/create','add')->middleware('auth');
    Route::get('profile/edit','edit')->middleware('auth');
});
