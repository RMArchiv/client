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
        Schema::table('games', function (Blueprint $table) {
            $table->text('desc');
            $table->integer('views');
            $table->text('website_url');
            $table->date('release_date');
            $table->integer('maker_id');
            $table->integer('release_type');
            $table->integer('is_banned');
            $table->integer('invisible_on_start_page');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('desc');
            $table->dropColumn('views');
            $table->dropColumn('website_url');
            $table->dropColumn('release_date');
            $table->dropColumn('maker_id');
            $table->dropColumn('release_type');
            $table->dropColumn('is_banned');
            $table->dropColumn('invisible_on_start_page');
        });
    }
};
