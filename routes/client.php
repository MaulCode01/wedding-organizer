<?php

use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\KonsultanController;
use App\Http\Controllers\client\AboutController;
use App\Http\Controllers\client\CheckOutController;
use App\Http\Controllers\client\DetailProductController;
use App\Http\Controllers\client\HeroController;
use App\Http\Controllers\client\ProdukController;
use App\Http\Controllers\client\ProfileClientController;
use Illuminate\Support\Facades\Route;

Route::post('/client/booking', [BookingController::class, 'storeBooking'])->name('booking.store');


Route::get('/', [HeroController::class, 'index'])->name('page.hero');
Route::get('/client/contact-us', [HeroController::class, 'contact'])->name('page.contact');
Route::get('/about-user', [AboutController::class, 'about'])->name('page.about');


Route::get('/client/paket/wedding', [ProdukController::class, 'wedding'])->name('page.paket.wedding');
Route::get('/client/paket/mua', [ProdukController::class, 'mua'])->name('page.paket.mua');
Route::get('/client/paket/dekorasi', [ProdukController::class, 'decor'])->name('page.paket.dekor');
Route::get('/client/paket/dokumentasi', [ProdukController::class, 'dokumentasi'])->name('page.paket.dokumentasi');
Route::get('/client/paket/prewed', [ProdukController::class, 'prewed'])->name('page.paket.prewed');
Route::get('/client/paket/detail', [ProdukController::class, 'detailPaket'])->name('detail.produk');

Route::get('/admin-dashboard/konsultan', [KonsultanController::class, 'showConsult'])->name('admin.show.konsult');
Route::post('/konsultan/message', [KonsultanController::class, 'storeKonsultan'])->name('konsultant.send');
Route::post('/konsultan/{id}/status', [KonsultanController::class, 'updateStatus'])->name('konsult.update.status');
Route::delete('/konsultan/{id}', [KonsultanController::class, 'deleteConsult'])->name('konsult.destroy');

Route::middleware(['auth', 'role:client'])->group(function(){
    Route::get('/product/checkout', [CheckOutController::class, 'checkOut'])->name('client.produk.checkout');
    Route::get('/profile/client', [ProfileClientController::class, 'showProfile'])->name('client.profile');

    Route::get('/admin/detail-produk/{package_key}', [DetailProductController::class, 'showDetail'])->name('admin.detail.produk');
});
