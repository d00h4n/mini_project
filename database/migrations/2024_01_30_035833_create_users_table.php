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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 225);
            $table->integer('id_posisi');
            $table->string('gambar');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat', 225)->nullable();
            $table->string('username', 225)->nullable();
            $table->string('email', 225)->nullable();
            $table->string('password');
            $table->string('no_hp', 15)->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
