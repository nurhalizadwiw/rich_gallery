<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kuota_harian', function (Blueprint $table) {
            $table->date('tanggal')->primary();
            $table->integer('max_kuota');
            $table->integer('kuota_terpakai')->default(0);
            $table->string('status_kuota')->default('Tersedia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kuota_harian');
    }
};
