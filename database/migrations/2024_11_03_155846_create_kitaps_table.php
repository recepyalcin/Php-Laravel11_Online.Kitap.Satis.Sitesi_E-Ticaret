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
        Schema::create('kitaps', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('kategori_id')->default(0);
            $table->string('ad',length: 255);
            $table->string('aciklama',length: 255)->nullable();
            $table->string('keywords',length: 255)->nullable();
            $table->string('yazar',length: 255)->nullable();
            $table->string('yayinevi',length: 255)->nullable();
            $table->string('basim_yili',length: 255)->nullable();
            $table->string('tur_id',length: 11)->nullable();
            $table->float('alis_fiyat')->nullable();
            $table->float('satis_fiyat')->nullable();
            $table->integer('stok')->default(0)->default(0);
            $table->string('detay', length: 2000)->nullable();
            $table->string('durum', length: 5)->nullable()->default('False');
            $table->string('slug', length: 100)->nullable();
            $table->string('resim', length: 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kitaps');
    }
};

