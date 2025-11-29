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
    Schema::create('files', function (Blueprint $table) {
        $table->id();           // Primary key
        $table->string('name'); // nama asli file
        $table->string('path'); // path file di storage
        $table->timestamps();   // untuk waktu created_at dan updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
