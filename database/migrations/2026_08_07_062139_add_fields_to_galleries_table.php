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
        Schema::table('galleries', function (Blueprint $table) {
            $table->text('description')->nullable()->after('album');
            $table->string('alt_text')->nullable()->after('description');
            $table->boolean('is_featured')->default(false)->after('image_path');
            $table->boolean('status')->default(true)->after('is_featured');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn(['description', 'alt_text', 'is_featured', 'status']);
        });
    }
};
