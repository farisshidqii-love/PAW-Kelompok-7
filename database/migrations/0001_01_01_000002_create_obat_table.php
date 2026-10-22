<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('id_obat')->unique();
            $table->string('nama_obat');
            $table->string('kategori_obat');
            $table->integer('stok_obat');
            $table->string('pabrik_pembuat');
            $table->timestamp('created_at')->nullable(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('obat');
    }
};