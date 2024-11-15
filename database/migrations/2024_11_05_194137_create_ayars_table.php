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
        Schema::create('ayars', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('baslik',150);
            $table->string('keywords')->nullable();
            $table->string('aciklama')->nullable();
            $table->string('sirket', 150)->nullable();
            $table->string('adres', 150)->nullable();
            $table->string('telefon', 20)->nullable();
            $table->string('email', 75)->nullable();
            $table->string('smtpserver', 75)->nullable();
            $table->string('smtpemail', 75)->nullable();
            $table->string('smtpsifre', 75)->default(0)->default(0);
            $table->integer('smtpport')->nullable()->default(0);
            $table->string('facebook', 100)->nullable();
            $table->string('instagram',  100)->nullable();
            $table->string('twitter', 100)->nullable();
            $table->string('youtube', 100)->nullable();
            $table->text('hakkimizda')->nullable();
            $table->text('iletisim',)->nullable();
            $table->text('referanslar',)->nullable();
            $table->string('durum', 5)->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayars');
    }
};
