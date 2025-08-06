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
        Schema::create('konsultan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('kontak');
            $table->string('alamat_lengkap');
            $table->text('catatan')->nullable();
            $table->enum('status', ['pending', 'confirm', 'cancel'])->default('pending');
            $table->timestamps();
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
