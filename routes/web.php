<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\LoginController;

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

//firstpage route
Route::get('/', function () {
    return view('firstpage');
});

//login controller route整理路由成群，/home/...
// Route::get('/login', [LoginController::class, 'login']);
// Route::any('/home', [LoginController::class, 'receive']);

//
Route::get('/register', function () {
    return view('users.register');
});

//
Route::group(['prefix' => 'home'], function () {
    Route::get('/index', function() {
        return view('index/index');
    });

    Route::get('/tables', function() {
        return view('index/tables');
    });

    //login controller route
    Route::get('/login', [LoginController::class, 'login']);

    //login controller route
    Route::any('/index', [LoginController::class, 'receive']);
});


//model insert test
// Route::get('/login', [LoginController::class, 'postCreate']);
Route::get('/test',[LoginController::class,'insert']);

// Route::get('/home/test/test1','Admin\IndexController@index');
//分目录尝试
// Route::get('test/test1 ', [IndexController::class, 'index']);
