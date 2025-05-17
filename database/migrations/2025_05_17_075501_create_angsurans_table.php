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
        Schema::create('angsurans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_user_id')->constrained()->onDelete('cascade');
            $table->integer('nomor_tenor');
            $table->date('tanggal_tempo');
            $table->integer('jumlah');
            $table->integer('jasa');
            $table->foreignId('transaksi_id')->constrained()->onDelete('cascade')->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angsurans');
    }
};
