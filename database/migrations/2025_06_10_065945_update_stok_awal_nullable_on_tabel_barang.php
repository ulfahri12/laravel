<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('tabel_barang', function (Blueprint $table) {
            $table->integer('stok_awal')->nullable()->change();
        });
    }

    
    public function down(): void
    {
        Schema::table('tabel_barang', function (Blueprint $table) {
            $table->integer('stok_awal')->nullable(false)->change();
        });
    }
};
