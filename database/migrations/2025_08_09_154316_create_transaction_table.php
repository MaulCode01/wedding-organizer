<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('booking_id');
        $table->unsignedBigInteger('user_id');
        $table->decimal('jumlah_bayar', 12, 2);
        $table->enum('metode_bayar', ['tunai', 'transfer']);
        $table->string('bukti_bayar')->nullable();
        $table->enum('status', ['belum_lunas', 'lunas', 'gagal'])->default('belum_lunas');
        $table->timestamps();

        $table->foreign('booking_id')->references('id')->on('booking')->onDelete('cascade');
        $table->foreign('user_id')->references('id')->on('auth')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trasaction');
    }
};
