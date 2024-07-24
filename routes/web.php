<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShippedController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//send email
Route::get('/sendemail',[ShippedController::class,'send_mail']);
Route::get('/contactMail',[ContactController::class,'send_mail']);
//admin routes
Route::get('/admin.users',[Usercontroller::class,('all_data')]);
//Admin Routes'
Route::get('admin/users', [UserController::class, 'all_data'])->name('allusers');
Route::get('admin/users/add', [UserController::class, 'create'])->name('adduser');
Route::post('admin/users/add', [UserController::class, 'store'])->name('storeUser');
Route::get('admin/users/edit/{id}', [UserController::class, 'edit']);
Route::put('admin/users/update/{id}', [UserController::class, 'update'])->name('updateUser');
Route::get('admin/users/delete/{id}', [UserController::class, 'destroy']);
Route::get('/user/phone', [UserController::class, 'user_phone']);
// admin post route

Route::get('/post/all',[PostController::class,('index')])->name('allposts');
Route::get('/admin/posts/show/{id}',[PostController::class,('show')]);
Route::get('/user/posts/{id}', [PostController::class, 'user_posts']);
//upload

Route::get('/upload/photo', [PhotoController::class, 'photo']);


Route::post('/upload/photo', [PhotoController::class, 'upload'])->name('upload.photo');
//Route::view('photo', 'upload');