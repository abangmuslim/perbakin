<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_sidarendu')->create('PEKE-1-00001', function (Blueprint $table) {
            $table->id();
            $table->string('kode_referensi_anak');
            $table->string('kecamatan');
            $table->float('baik');
            $table->float('sedang',5,2);
            $table->float('rusak',5,2);
            $table->float('rusak_berat',5,2);
            $table->string('tahun');
            
            $table->timestamps();

            $table->foreign('kode_referensi_anak')->references('kode_referensi_anak')->on('daftardata')->onDelete('cascade');
            
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_serdadu')->dropIfExists('PEKE-1-00001');
    }
};
