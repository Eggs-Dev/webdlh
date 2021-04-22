<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
//pjlp
use App\Http\Controllers\DaftarhitamController;

//web
use App\Http\Controllers\ArtikelController;


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
    return view('auth.login');
});


Route::get('/test', function () {
    return view('test');
});


Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checklogin', [AdminController::class, 'CheckLogin']);
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'] );

    //pjlp
    Route::get('/admin/daftarhitam', [DaftarhitamController::class, 'index']);
    Route::get('users', ['uses'=>'App\Http\Controllers\DaftarhitamController@index', 'as'=>'users.index']);

    //web
    //artikel
    Route::get('/admin/artikel/data', [ArtikelController::class, 'IndexAdmin']);
    Route::get('/admin/artikel/add', [ArtikelController::class, 'Add']);
});
