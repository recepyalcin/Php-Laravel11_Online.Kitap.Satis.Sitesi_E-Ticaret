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
        Schema::create('siparisedilenlers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('siparis_id');
            $table->integer('kitap_id');
            $table->integer('fiyat');
            $table->integer('miktar');
            $table->float('tutar');
            $table->float('toplam');
            $table->string('not', 150)->nullable();
            $table->string('durum', 30)->default('Yeni');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siparisedilenlers');
    }
};
