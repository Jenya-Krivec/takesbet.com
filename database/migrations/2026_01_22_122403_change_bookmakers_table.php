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
        Schema::table('bookmakers', function (Blueprint $table) {
            $table->string('bonus_casino_pt', 255)->default('')->after('bonus_label_2_pt');
            $table->string('bonus_casino_fr', 255)->default('')->after('bonus_label_2_pt');
            $table->string('bonus_casino_es', 255)->default('')->after('bonus_label_2_pt');
            $table->string('bonus_casino_en', 255)->default('')->after('bonus_label_2_pt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookmakers', function (Blueprint $table) {
            $table->dropColumn(['bonus_casino_pt', 'bonus_casino_fr', 'bonus_casino_es', 'bonus_casino_en']);
        });
    }
};
