<?php

use App\Http\Controllers\Auth\AuthContoller;
use Illuminate\Support\Facades\Route;

Route::controller(AuthContoller::class)->group(function(){
    Route::get('/authentikasi/login', 'showLogin')->name('auth.show.login');
    Route::post('/login', 'login')->name('auth.login');

    Route::get('/authentikasi/register', 'showRegister')->name('auth.show.logout');
    Route::post('/create/akun', [AuthContoller::class, 'createAcount'])->name('auth.register.create');
    Route::post('/logout', 'logout')->name('auth.logout');
});
