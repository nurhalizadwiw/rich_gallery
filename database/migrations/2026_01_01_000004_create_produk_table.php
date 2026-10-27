<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk');
            $table->foreignId('id_kategori')->nullable()->constrained('kategori', 'id_kategori')->onDelete('cascade');
            $table->string('nama_produk');
            $table->decimal('harga', 12, 2);
            $table->string('kategori')->nullable(); // Sesuai diagram (enum/string)
            $table->string('tipe_produk');
            $table->integer('jumlah_stok');
            $table->text('deskripsi')->nullable();
            $table->string('foto')->nullable();
            $table->string('status_ketersediaan')->default('Tersedia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
