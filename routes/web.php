<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MusicController;


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
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/delete{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/edit{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/show{id}', [CategoryController::class, 'show'])->name('category.show');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');


Route::get('/music/index', [MusicController::class, 'index'])->name('music.index');
Route::get('/music/create', [MusicController::class, 'create'])->name('music.create');
Route::get('/music/delete{id}', [MusicController::class, 'destroy'])->name('music.destroy');
Route::get('/music/edit{id}', [MusicController::class, 'edit'])->name('music.edit');
Route::post('/music/update{id}', [MusicController::class, 'update'])->name('music.update');
Route::get('/music/show{id}', [MusicController::class, 'show'])->name('music.show');
Route::post('/music/store', [MusicController::class, 'store'])->name('music.store');

Route::get('demo', [MusicController::class, 'demo'])->name('demo');

Route::group(['prefix' => 'user'], function () {
    Route::get('login', [LoginController::class, 'login']);
    Route::get('register', [LoginController::class, 'register']);
    
});

Route::group(['prefix' => 'user'], function(){

    Route::get('/login', [LoginController::class, 'getLogin']); 
    Route::post('/login', [LoginController::class, 'postLogin']);
     Route::get('/register', [LoginController::class, 'getRegister']); Route::post('/register', [LoginController::class, 'postRegister']);
    
    });

    Route::group(['prefix'=>'user'], function(){ 
    Route::get('/listUser', [UserController::class, 'getAllUser'])->name('listUser');});

    Route::get('/list-user', 'App\Http\Controllers\UserController@getAllUser')->name('listUser');

  
  
    Route::get('/music/{id}', [MusicController::class, 'detail'])->name('pages.detail');
    
    Route::get('/cart', function () {
        return view('pages.cart');
    })->name('pages.cart');

    Route::get('/users/edit{id}', [LoginController::class, 'edit'])->name('users.edit');
    Route::get('/users/delete{id}', [LoginController::class, 'destroy'])->name('users.destroy');

    Route::get('/users/edit{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/delete{id}', [UserController::class, 'destroy'])->name('users.destroy');