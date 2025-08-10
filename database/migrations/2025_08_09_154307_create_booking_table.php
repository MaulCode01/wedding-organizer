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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('package_id');
            $table->date('tanggal_acara');
            $table->string('lokasi_acara');
            $table->text('catatan')->nullable();
            $table->enum('status', ['pending','disetujui','dibatalkan','selesai'])->default('pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('auth')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('product_packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
