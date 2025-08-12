<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AkunController;
use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\crud\DetailProductController;
use App\Http\Controllers\admin\crud\ProductContentController;
use App\Http\Controllers\admin\crud\ProductPackageController;
use App\Http\Controllers\admin\PageClientController;
use App\Http\Controllers\admin\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard-admin');

    // Kontent Dashboard
    Route::get('/admin-dashboard/client/hero', [PageClientController::class, 'berandaClient'])->name('admin.page-client');
    Route::get('/admin-dashboard/client/about', [PageClientController::class, 'tentangClient'])->name('admin.page.about-client');
    Route::post('/update/hero/{id}', [PageClientController::class, 'updateHero'])->name('hero.update');
    Route::post('/update/about/{id}', [PageClientController::class, 'updateAbout'])->name('about.update');

    // produk
    Route::get('/admin/produk', [ProductContentController::class, 'dashboard'])->name(name: 'admin.produk.dashboard');

    // Konten Produk
    //Route::get('/admin/content/create', [ProductContentController::class, 'create'])->name('admin.content.create');
    //Route::post('/admin/content/store', [ProductContentController::class, 'store'])->name('admin.content.store');
    Route::get('/admin/content/edit/{id}', [ProductContentController::class, 'edit'])->name('admin.content.edit');
    Route::post('/admin/content/update/{id}', [ProductContentController::class, 'update'])->name('admin.content.update');
    //Route::delete('/admin/content/{id}', [ProductContentController::class, 'destroy'])->name('admin.content.destroy');

    // Paket Produk
    Route::get('/admin/package/create', [ProductPackageController::class, 'create'])->name('admin.package.create');
    Route::post('/admin/package/store', [ProductPackageController::class, 'store'])->name('admin.package.store');
    Route::get('/admin/package/edit/{id}', [ProductPackageController::class, 'edit'])->name('admin.package.edit');
    Route::post('/admin/package/{id}', [ProductPackageController::class, 'updatepackage'])->name('admin.package.update');
    Route::delete('/admin/package/{id}', [ProductPackageController::class, 'destroy'])->name('admin.package.destroy');


    //Trasaksi
    Route::get('/admin/transaksi/', [TransaksiController::class, 'showTransaksi'])->name('admin.transaksi');
    Route::post('admin/transaction/konfirmasi/{id}', [TransaksiController::class, 'confirmTrasanction'])->name('admin.transaksi.confirm');
    Route::get('admin/transaction/kwetansi/{id}', [TransaksiController::class, 'kwetansi'])->name('admin.trasaksi.kwetansi');
    Route::post('admin/transaction/delete/{id}', [TransaksiController::class, 'destroy'])->name('admin.transaksi.hapus');

    // Booking
    Route::get('/admin/booking', [BookingController::class, 'showBooking'])->name('admin.show.booking');
    Route::post('/admin/booking/{id}', [BookingController::class, 'verify'])->name('admin.booking.verify');
    Route::post('admin/booking/delete/{id}', [BookingController::class, 'deleteBooking'])->name('admin.booking.delete');

    //data Pengguna
    Route::get('/admin-dashboard/data-pengguna', [AkunController::class, 'dataClient'])->name('admin.data-pengguna');
    Route::get('/data-pengguna/create', [AkunController::class, 'showCreateAdmin'])->name('add.acount.admin');
    Route::get('/data-pengguna/edit/{id}', [AkunController::class, 'showEditAdmin'])->name('edit.acount.admin');
    Route::post('/data-pengguna/edit/{id}', [AkunController::class, 'EditAdmin'])->name('edit.acount');
    Route::post('/data-pengguna/delete/{id}', [AkunController::class, 'deleteAcount'])->name('delete.acount');
    Route::post('/admin-dashboard/create/verifikasi', [AkunController::class, 'storeAdmin'])->name('create.acount.admin');
});
