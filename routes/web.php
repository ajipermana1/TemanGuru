<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageTeacherController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Ujian;
use App\Models\Jurusan;

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
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/dashboard', function () {
    return view('admin.admin',[
        'title' => 'Dashboard',
        'menu' => 'Profile',
        'menu1' => 'Dashboard'
    ]);
});
Route::resource('manageuser', ManageUserController::class)->middleware('admin');
Route::get('/manageteacher', [ManageTeacherController::class,'index'])->middleware('admin');
Route::get('/manageteacher/create', [ManageTeacherController::class,'create'])->middleware('admin');

Route::get('/profile', function () {
    return view('admin.manageprofile.index',[
        'title' => 'Profile',
        'menu' => 'Account',
        'menu1' => 'Profile'
    ]);
})->middleware('admin');
Route::get('/edit-profile', [ProfileController::class,'index'])->middleware('admin');

Route::get('/user/profile', function () {
    return view('user.profile',[
        'title' => 'User Profile',
        'menu' => 'User',
        'menu1' => 'Profile'

    ]);
});

Route::get('/user/nilai', function () {
    return view('user.nilai',[
        'title' => 'Nilai',
        'menu' => 'User',
        'menu1' => 'Nilai',
        'ujian' => Ujian::where('user_id',auth()->user()->id)->get()

    ]);
});
Route::get('/user/matpel', function () {
    $id = auth()->user()->kelas->id_jurusan;

    return view('user.matpel',[
        'title' => 'Mata Pelajaran',
        'menu' => 'User',
        'menu1' => 'Mata Pelajaran',
        'jurusan' => Jurusan::where('id', $id)->get()
    ]);
});
