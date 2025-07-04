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
        Schema::create('bookmakers', function (Blueprint $table) {
            $table->id();
            $table->string('key', 10)->unique()->index();
            $table->string('name', 100)->default('');
            $table->string('url', 100)->default('')->nullable();
            $table->string('logo', 100)->default('');
            $table->string('logo_color', 10)->default('');
            $table->string('promo_code', 100)->default('');
            $table->boolean('bonus_available')->default(0);
            $table->string('bonus_label_1_en', 100)->default('');
            $table->string('bonus_label_1_es', 100)->default('');
            $table->string('bonus_label_1_fr', 100)->default('');
            $table->string('bonus_label_1_pt', 100)->default('');
            $table->string('bonus_label_2_en', 100)->default('');
            $table->string('bonus_label_2_es', 100)->default('');
            $table->string('bonus_label_2_fr', 100)->default('');
            $table->string('bonus_label_2_pt', 100)->default('');
            $table->text('warning_en');
            $table->text('warning_es');
            $table->text('warning_fr');
            $table->text('warning_pt');
            $table->string('licensed', 50)->default('')->nullable();
            $table->boolean('streaming')->default(0)->nullable();
            $table->boolean('tested')->default(0)->nullable();
            $table->string('email', 50)->default('')->nullable();
            $table->string('phone', 50)->default('')->nullable();
            $table->boolean('active')->default(1);
            $table->integer('order')->default(1);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmakers');
    }
};
