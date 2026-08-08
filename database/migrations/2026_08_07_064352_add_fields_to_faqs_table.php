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
        Schema::table('faqs', function (Blueprint $table) {
            $table->string('question')->after('id');
            $table->text('answer')->after('question');
            $table->string('category')->default('General')->after('answer');
            $table->string('page_slug')->default('all')->after('category');
            $table->integer('sort_order')->default(0)->after('page_slug');
            $table->boolean('is_featured')->default(false)->after('sort_order');
            $table->boolean('status')->default(true)->after('is_featured');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->dropColumn(['question', 'answer', 'category', 'page_slug', 'sort_order', 'is_featured', 'status']);
        });
    }
};
