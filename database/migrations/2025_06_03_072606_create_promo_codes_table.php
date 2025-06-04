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
        Schema::create('promo_codes', function (Blueprint $table) {
            $table->id();
            $table->string('key', 50)->index();
            $table->unsignedBigInteger('bookmaker_id');
            $table->string('component', 50)->default('');
            $table->json('value_en');
            $table->json('value_es');
            $table->json('value_fr');
            $table->json('value_pt');
            $table->unsignedBigInteger('order')->default(0)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_codes');
    }
};
