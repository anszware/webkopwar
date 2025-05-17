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
        Schema::create('verifikasi_layanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_user_id')->constrained()->onDelete('cascade');
            $table->string('keterangan');
            $table->enum('status',[1,2,3]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasi_layanans');
    }
};
