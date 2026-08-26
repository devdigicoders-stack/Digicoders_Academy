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
        if (! Schema::hasColumn('blogs', 'faqs')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->json('faqs')->nullable()->after('canonical_url');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('blogs', 'faqs')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->dropColumn('faqs');
            });
        }
    }
};
