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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add');
});

//課題３.「http://XXXXXX.jp/XXX というアクセスが来たときに、 
//AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください

Route::controller(NewsController::class)->group(function(){
    Route::get('AAAController','bbb');
});

/*
課題４.【応用】 前章でAdmin/ProfileControllerを作成し、
add Action, edit Actionを追加しました。web.phpを編集して、
admin/profile/create にアクセスしたら ProfileController の add Action に、
admin/profile/edit にアクセスしたら 
ProfileController の edit Action に割り当てるように設定してください
*/
use app\Http\Contrllers\Admin\ProfileController;
Route::controller(ProfileController::class)->prefix('admin')->group(function(){
    Route::get('admin/profile/create','add');
    Route::get('admin/profile/edit','edit');
});
