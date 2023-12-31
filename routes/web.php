<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\DiariesController;
use App\Http\Controllers\Admin\DocumentsController;
use App\Http\Controllers\Admin\ApprovalRequestsController;


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
    return view('layouts.welcome');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Route::resource('/users', UsersController::class);
Route::resource('/documents', DocumentsController::class);
Route::resource('/diaries', DiariesController::class);
Route::resource('/approval-requests', ApprovalRequestsController::class);
