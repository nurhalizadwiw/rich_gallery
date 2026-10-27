<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->foreignId('id_pelanggan')->constrained('pelanggan', 'id_pelanggan')->onDelete('cascade');
            $table->foreignId('id_admin')->nullable()->constrained('admin', 'id_admin')->onDelete('set null');
            $table->string('jenis_pesanan');
            $table->decimal('budget_buket', 12, 2)->nullable();
            $table->string('tema_pilihan')->nullable();
            $table->text('catatan_pelanggan')->nullable();
            $table->dateTime('tgl_waktu_delivery_pickup');
            $table->string('lokasi_kirim');
            $table->text('ongkir_doi')->nullable();
            $table->decimal('total_pesanan', 12, 2);
            $table->string('status_pembayaran')->default('Pending');
            $table->string('status_pesanan')->default('Menunggu Konfirmasi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
