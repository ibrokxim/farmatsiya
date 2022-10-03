<?php

use App\Http\Controllers\IndexController;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Middleware;



Route::get('/setlocale/{locale}', [IndexController::class, 'setLocale'])->name('setlocale'); 

Route::get('/welcome', [\App\Http\Controllers\IndexController::class, 'welcome'])->name('welcome');
Route::get('/emails/email', [\App\Http\Controllers\IndexController::class, 'getEmail']);

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.index');
    Route::post('/profile_store', [\App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');

    Route::get('/states/index', function(){ return view('/states/index'); });
    Route::get('/publication/index', [App\Http\Controllers\SendStateControllerStep1::class, 'publication'])->name('pubclication');
    Route::get('/publication/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('publication.show');
    Route::get('/publication/pages/', [\App\Http\Controllers\SendStateControllerStep1::class, 'pages']);
    Route::get('/publication/index/{id}', [\App\Http\Controllers\SendStateControllerStep1::class, 'show'])->name('publication.show');

    Route::get('/submited/index', [App\Http\Controllers\SendStateControllerStep1::class, 'getState']); 
    Route::get('/states/step1', [App\Http\Controllers\SendStateControllerStep1::class, 'createStep1']); 
    Route::post('/states/step1', [App\Http\Controllers\SendStateControllerStep1::class, 'postCreateStep1']); 
    Route::get('/states/step2', [App\Http\Controllers\SendStateControllerStep1::class, 'createStep2']); 
    Route::post('/states/step2', [\App\Http\Controllers\SendStateControllerStep1::class, 'postCreateStep2']);
    Route::get('/states/step3', [\App\Http\Controllers\SendStateControllerStep1::class, 'createStep3']); 
    Route::post('/states/step3', [\App\Http\Controllers\SendStateControllerStep1::class, 'postCreateStep3']); 
    Route::get('/states/step4', [\App\Http\Controllers\SendStateControllerStep1::class, 'createStep4']); 
    Route::post('/states/step4', [\App\Http\Controllers\SendStateControllerStep1::class, 'postCreateStep4']); 
    Route::get('/states/step5', [\App\Http\Controllers\SendStateControllerStep1::class,'createStep5']); 
    Route::post('/states/step5', [\App\Http\Controllers\SendStateControllerStep1::class,'postCreateStep5']); 
    Route::get('/states/step6', [\App\Http\Controllers\SendStateControllerStep1::class,'createStep6']); 
    Route::post('/states/step6', [\App\Http\Controllers\SendStateControllerStep1::class, 'postCreateStep6']); 
    Route::get('/states/step9', [\App\Http\Controllers\SendStateControllerStep1::class, 'createStep9']); 
    Route::post('/states/store', [\App\Http\Controllers\SendStateControllerStep1::class, 'store']); 
});

    Route::get('/posts/index', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
    Route::get('/publication/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('publication.show');
    Route::get('/posts/first', [\App\Http\Controllers\PostController::class, 'first'])->name('posts.first');

Route::middleware("auth:web")->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::post('/posts/comment/{id}', [\App\Http\Controllers\PostController::class, 'comment'])->name('comment');
    Route::get('/message/index', [\App\Http\Controllers\MessageController::class, 'show'])->name('message.index');
    Route::get('/message/send', [\App\Http\Controllers\MessageController::class, 'send'])->name('message.send');
    Route::get('/message/sended', [\App\Http\Controllers\MessageController::class, 'sended'])->name('message.sended');
    Route::post('/message/index', [App\Http\Controllers\MessageController::class, 'sendMsg'])->name('sendMsg');
});

Route::middleware("guest:web")->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

    Route::get('/forgot', [\App\Http\Controllers\AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot_process', [\App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot_process');
});

// Route::post('/admin/states', \App\Http\Controllers\Admin\AcceptController::class, 'approve')->name('admin.approve');
// Route::post('/admin/states', \App\Http\Controllers\Admin\AcceptController::class, 'decline')->name('admin.decline');
