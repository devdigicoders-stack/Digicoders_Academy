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
        Schema::table('testimonials', function (Blueprint $table) {
            $table->string('course_name')->nullable()->after('role');
            $table->string('video_url')->nullable()->after('avatar');
            $table->boolean('is_featured')->default(false)->after('is_placed');
            $table->boolean('status')->default(true)->after('is_featured');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropColumn(['course_name', 'video_url', 'is_featured', 'status']);
        });
    }
};
