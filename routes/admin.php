<?php
use App\Http\Controllers\Admin\AcceptController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin/users');
});

 Route::middleware("guest:admin")->group(function() {
    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login');
    Route::post('login_process', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login_process');
 });

 Route::middleware("auth:admin")->group(function() {
    Route::get('logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    Route::resource('admin_users', \App\Http\Controllers\Admin\AdminUserController::class);
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('message', \App\Http\Controllers\Admin\MessagesController::class);
    Route::resource('profile', \App\Http\Controllers\Admin\ProfileController::class);
    Route::resource('states', \App\Http\Controllers\Admin\SendStateController::class);
    Route::get('/admin/states/accept', [AcceptController::class, 'accept'])->name('states.accept');
    Route::get('/admin/states/reject', [AcceptController::class, 'reject'])->name('states.reject');
});





