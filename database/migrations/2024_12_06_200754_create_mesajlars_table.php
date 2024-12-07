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
        Schema::create('mesajlars', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('isim',length: 50);
            $table->string('email',length: 50)->nullable();
            $table->string('telefon',length: 20)->nullable();
            $table->string('konu',length: 100)->nullable();
            $table->string('mesaj')->nullable();
            $table->string('not',length: 100)->nullable();
            $table->string('durum', length: 5)->nullable()->default('New');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesajlars');
    }
};
