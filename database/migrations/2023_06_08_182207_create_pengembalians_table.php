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
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id('id_pengembalian',10);
            $table->string('id_anggota');
            $table->string('id_buku');
            $table->string('tgl_jatuh_tempo');
            $table->string('tgl_kembali');
            $table->string('terlambat',20);
            $table->string('denda',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
