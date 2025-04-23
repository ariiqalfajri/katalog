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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id_produk')->primary(); // Primary Key
            $table->unsignedBigInteger('id_katalog'); // Foreign Key ke tabel katalog
            $table->string('nama_produk'); // Nama produk
            $table->text('deskripsi_produk'); // Deskripsi produk
            $table->string('gambar_produk'); // URL gambar produk
            $table->decimal('harga', 10, 2); // Harga produk
            $table->enum('status', ['available', 'unavailable']); // Status produk
            $table->json('spek')->nullable(); // Spesifikasi dalam format JSON
            $table->string('client')->nullable(); // Client (opsional)
            $table->string('lokasi'); // Lokasi produk
            $table->date('completion_date'); // Tanggal penyelesaian
            $table->timestamps(); // Kolom created_at dan updated_at otomati
            $table->foreign('id_katalog')->references('id_katalog')->on('catalogs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};