<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->string('kategori', 225);
            $table->string('gambar')->nullable();
            $table->text('deskripsi')->nullable();
            $table->boolean('approval')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};
