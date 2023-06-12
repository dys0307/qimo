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

// Route::get('/', function () {
//     return view('welcome');
// });

//设置登录路由
Route::get('/','\App\Http\Controllers\LoaginController@login');

//设置登录提交的路由
Route::post('/logout','\App\Http\Controllers\LoaginController@logout');