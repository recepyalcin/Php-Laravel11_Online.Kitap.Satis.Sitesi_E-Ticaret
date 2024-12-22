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
        Schema::create('siparis', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->string('ad_soyad', 20);
            $table->string('email', 50);
            $table->string('telefon', 50);
            $table->string('adres', 200);
            $table->float('toplam');
            $table->string('not', 150)->nullable();
            $table->string('IP', 20);
            $table->string('durum', 30)->default('Yeni');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siparis');
    }
};
