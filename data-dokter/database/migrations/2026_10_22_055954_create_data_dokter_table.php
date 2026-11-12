<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_dokter', function (Blueprint $table) {
            $table->string('sip', 50)->primary();
            $table->string('nama', 100);
            $table->string('spesialis', 100);
            $table->string('kontak', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_dokter');
    }
};