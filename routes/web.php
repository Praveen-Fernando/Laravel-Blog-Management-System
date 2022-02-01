<?php

use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\AllPostview;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostContoller;
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

Route::get('/', [AllPostview::class, 'Viewallposts'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Posting
Route::post("/post/insert", [PostContoller::class , 'insert'])->name('post.insert');
Route::get("/Post/{postID}/postview",[PostContoller::class ,'postView'])->name('Post.postview');
Route::get("/post/viewAll",[HomeController::class, "viewAll"])->name('post.viewall');
Route::get("/post/{postID}/edit",[PostContoller::class, "edit"])->name('post.edit');
Route::Post("/post/{postID}/update",[PostContoller::class, "update"])->name('post.update');
Route::get("/post/{postID}/delete",[PostContoller::class, "delete"])->name('post.delete');

//Admin
Route::get("/admin/dashboard", [Admincontroller::class, 'isAdmin'])->middleware('admin')->name('admin.dashboard');
