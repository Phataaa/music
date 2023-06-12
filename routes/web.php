<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerCategory;
use App\Http\Controllers\ControllerSinger;
use App\Http\Controllers\ControllerSong;
use App\Http\Controllers\ControllerUser;
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
// Route::get('layout', function(){
//     return view('singer.layout');
// });

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/homeuser', function() {
//     return view('homeuser');
// });



Route::get('category', [ControllerCategory::class, 'category'])->name('category');
Route::get('category/create', [ControllerCategory::class , 'create'])->name('category.create');
Route::post('category/store', [ControllerCategory::class, 'store'])->name('category.store');
Route::get('category/index', [ControllerCategory::class , 'index'])->name('category.index');
Route::get('category/{category}', [ControllerCategory::class, 'category'])->name('song.category');
Route::get('category/edit/{id}', [ControllerCategory::class, 'edit'])->name('category.edit');
Route::get('category/show/{id}', [ControllerCategory::class, 'show'])->name('category.show');
Route::get('category/delete/{id}', [ControllerCategory::class, 'show'])->name('category.delete');
Route::post('category/update/{id}', [ControllerCategory::class, 'update'])->name('category.update');




Route::get('singer/create', [ControllerSinger::class, 'create'])->name('singer.create');
Route::post('singer/store', [ControllerSinger::class, 'store'])->name('singer.store');
Route::get('singer/index', [ControllerSinger::class , 'index'])->name('singer.index');
Route::get('homesinger', [ControllerSinger::class, 'homesinger'])->name('singer.homesinger');
Route::get('singer/edit/{id}', [ControllerSinger::class, 'edit'])->name('singer.edit');
Route::get('singer/delete/{id}', [ControllerSinger::class, 'delete'])->name('singer.delete');
Route::get('singer/show/{id}', [ControllerSinger::class, 'show'])->name('singer.show');
Route::post('singer/update/{id}', [ControllerSinger::class, 'update'])->name('singer.update');


Route::get('song/create', [ControllerSong::class, 'create'])->name('song.create');
Route::post('song/store', [ControllerSong::class, 'store'])->name('song.store');
Route::get('song/index', [ControllerSong::class , 'index'])->name('song.index');
Route::get('song/show/{id}', [ControllerSong::class, 'show'])->name('song.show');
Route::get('song/edit/{id}', [ControllerSong::class, 'edit'])->name('song.edit');
Route::get('song/delete/{id}', [ControllerSong::class, 'delete'])->name('song.delete');
Route::post('song/update/{id}', [ControllerSong::class, 'update'])->name('song.update');


Route::get('homeuser', [ControllerSong::class, 'homeuser'])->name('homeuser');
Route::get('user',[ControllerUser::class, 'indexuser'])->name('user');

Route::get('/user/{id}', [ControllerUser::class, 'destroy'])->name('user.delete');


Route::get('homeadmin', function(){
    return view('home/homeadmin');
});
Route::get('showsong/{id}', [ControllerSong::class, 'showsong'])->name('showsong');
// Route::get('showsong', function(){
//     return view('show');
// });




Route::get('/login', [ControllerUser::class, 'showLoginForm'])->name('login');
Route::post('/login', [ControllerUser::class, 'login']);
Route::post('/logout', [ControllerUser::class, 'logout'])->name('logout');

Route::get('/register', [ControllerUser::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [ControllerUser::class, 'register']);