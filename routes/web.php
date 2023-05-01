<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;
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

Route::group(['prefix' => 'admin'],function () {
    Route::get('news/create', 'Admin\NewsContreoller@add')->middleware('auth');
});

Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::controller(NewsController::class)
    ->prefix('admin')
    ->name('admin.')->middleware('auth')->group(function () {
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');
});

// 課題内容追加 
Route::controller(ProfileController::class)
    ->prefix('admin')
    ->name('admin.')->middleware('auth')->group(function () {
    Route::get('profile/create','add')->name('profile.add');
    Route::post('profile/create', 'create')->name('profile.create');
    
    Route::get('profile/edit','edit')->name('profile.edit');
    Route::post('profile/edit', 'update')->name('profile.update');
    
});
