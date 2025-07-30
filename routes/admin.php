<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AkunController;
use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\admin\PageClientController;
use App\Http\Controllers\admin\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard-admin');

    Route::get('/admin-dashboard/client/hero', [PageClientController::class, 'berandaClient'])->name('admin.page-client');
    Route::get('/admin-dashboard/client/about', [PageClientController::class, 'tentangClient'])->name('admin.page.about-client');

    Route::get('/admin-dashboard/paket/wedding', [PackageController::class, 'weddingAdmin'])->name('admin.package-wedding');
    Route::get('/admin-dashboard/paket/prewed', [PackageController::class, 'prewedAdmin'])->name('admin.package-prewed');
    Route::get('/admin-dashboard/paket/dekorasi', [PackageController::class, 'dekorasiAdmin'])->name('admin.package-dekorasi');
    Route::get('/admin-dashboard/paket/mua',[PackageController::class, 'muaAdmin'])->name('admin.package-mua');
    Route::get('/admin-dashboard/paket/dokumentasi', [PackageController::class, 'dokumentasiAdmin'])->name('admin.package-dokumentasi');

    Route::get('/admin-dashboard/booking', [BookingController::class, 'showBooking'])->name('admin.show.booking');
    Route::post('/booking/{id}/status', [BookingController::class, 'updateStatus'])->name('booking.update.status');
    Route::delete('/booking/{id}', [BookingController::class, 'deleteBooked'])->name('booking.destroy');

    Route::get('/admin-dashboard/data-pengguna', [AkunController::class, 'dataClient'])->name('admin.data-pengguna');
    Route::get('/data-pengguna/create', [AkunController::class, 'showCreateAdmin'])->name('add.acount.admin');
    Route::get('/data-pengguna/edit/{id}', [AkunController::class, 'showEditAdmin'])->name('edit.acount.admin');
    Route::post('/data-pengguna/edit/{id}', [AkunController::class, 'EditAdmin'])->name('edit.acount');
    Route::post('/data-pengguna/delete/{id}', [AkunController::class, 'deleteAcount'])->name('delete.acount');
    Route::post('/admin-dashboard/create/verifikasi', [AkunController::class, 'storeAdmin'])->name('create.acount.admin');

    // Post

    Route::post('/update/hero/{id}', [PageClientController::class, 'updateHero'])->name('hero.update');
    Route::post('/update/about/{id}', [PageClientController::class, 'updateAbout'])->name('about.update');

});
