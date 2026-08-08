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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('code')->nullable();
            $table->string('category')->default('6 Month Diploma');
            $table->string('duration')->default('6 Months');
            $table->decimal('fee', 10, 2)->default(25000.00);
            $table->string('badge')->nullable();
            $table->integer('students_count')->default(0);
            $table->decimal('rating', 3, 1)->default(4.9);
            $table->boolean('is_featured')->default(false);
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
