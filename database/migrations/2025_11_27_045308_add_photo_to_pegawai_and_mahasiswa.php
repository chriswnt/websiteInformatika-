<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tambah kolom photo untuk tabel pegawai
        Schema::table('pegawai', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('pegawai_nama');
        });

        // Tambah kolom photo untuk tabel mahasiswa
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('nama');
        });
    }

    public function down(): void
    {
        Schema::table('pegawai', function (Blueprint $table) {
            $table->dropColumn('photo');
        });

        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropColumn('photo');
        });
    }
};
