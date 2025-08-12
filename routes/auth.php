<?php

use App\Http\Controllers\Auth\AuthContoller;
use Illuminate\Support\Facades\Route;

Route::controller(AuthContoller::class)->group(function(){
    Route::get('/signin', 'showLogin')->name('auth.show.login');
    Route::post('/login', 'login')->name('auth.login');

    Route::get('/signup', 'showRegister')->name('auth.show.logout');
    Route::post('/create/akun', [AuthContoller::class, 'createAcount'])->name('auth.register.create');
    Route::post('/logout', 'logout')->name('auth.logout');
});
