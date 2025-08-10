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
        Schema::create('product_content', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', ['Wedding', 'Prewed', 'Dekorasi', 'MUA', 'Dokumentasi']);
            $table->string('judul_konten');
            $table->longText('deskripsi_konten')->nullable();
            $table->json('fitur_1')->nullable();
            $table->string('image_konten')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_content');
    }
};
