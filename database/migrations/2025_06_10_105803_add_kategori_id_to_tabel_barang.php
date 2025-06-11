<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tabel_barang', function (Blueprint $table) {
            $table->foreignId('kategori_id')
                ->nullable()
                ->constrained('tabel_kategori')
                ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('tabel_barang', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
            $table->dropColumn('kategori');
        });
    }
};
