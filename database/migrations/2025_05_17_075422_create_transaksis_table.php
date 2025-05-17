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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constarined()->onDelete('cascade');
            $table->date('tanggal_transaksi');
            $table->integer('jumlah');
            $table->enum('metode',['transfer','langsung']);
            $table->string('bukti_transaksi');
            $table->string('petugas_id')->constrained('users')->onDelete('cascade')->nullable();
            $table->date('tanggal_verifikasi')->nullable();
            $table->string('keterangan')->nullable();
            $table->enum('jenis_transaksi',['debet','kredit']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
