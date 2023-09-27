<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Facades\Schema;

return new class extends Migration 
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('Mobil', function (Blueprint $table) {
            $table->increment("id_mobil");
            $table->var("nama_mobil");
            $table->integer("harga_mobil");
            $table->date("tahun_keluar");
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('Mobil');
    }
};