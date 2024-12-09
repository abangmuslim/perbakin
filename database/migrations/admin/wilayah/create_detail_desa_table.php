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
        Schema::connection('mysql')->create('desa', function (Blueprint $table) {
            $table->id();
            $table->string('kode_desa');
            $table->string('nama_desa');
            $table->string('kode_kecamatan');
            $table->string('luas_wilayah')->nullable();
            $table->string('koordinat')->nullable();

            $table->string('website')->nullable();
            $table->string('batas_wilayah_utara')->nullable();
            $table->string('batas_wilayah_timur')->nullable();
            $table->string('batas_wilayah_selatan')->nullable();
            $table->string('batas_wilayah_barat')->nullable();

            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql')->dropIfExists('desa');
    }
};