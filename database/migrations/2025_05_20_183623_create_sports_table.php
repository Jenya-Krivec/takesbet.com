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
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->string('key', 50)->unique()->index();
            $table->string('name_en', 50)->default('');
            $table->string('name_es', 50)->default('');
            $table->string('name_fr', 50)->default('');
            $table->string('name_pt', 50)->default('');
            $table->string('icon', 50)->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports');
    }
};
