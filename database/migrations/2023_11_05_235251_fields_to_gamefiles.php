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
        Schema::table('gamefiles', function (Blueprint $table) {
            $table->integer('game_id');
            $table->date('release_date');
            $table->integer('gamefile_type');
            $table->integer('filesize');
            $table->integer('installed');
            $table->string('extension');
            $table->integer('forbidden');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gamefiles', function (Blueprint $table) {
            $table->dropColumn('game_id');
            $table->dropColumn('release_date');
            $table->dropColumn('gamefile_type');
            $table->dropColumn('filesize');
            $table->dropColumn('installed');
            $table->dropColumn('extension');
            $table->dropColumn('forbidden');
        });
    }
};
