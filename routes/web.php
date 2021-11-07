<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('auth.login');
});
Route::get('/registration', function () {
    return view('auth.registration');
});
Route::post('/registration', [RegisterController::class,'registration']);
Route::post('/login', [LoginController::class,'authentication']);
Route::get('/dashboard', function () {
    return view('admin.admin',[
        'title' => 'Admin'
    ]);
});
