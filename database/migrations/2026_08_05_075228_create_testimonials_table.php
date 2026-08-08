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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('company')->default('Software Company');
            $table->string('role')->default('Software Engineer');
            $table->decimal('rating', 3, 1)->default(5.0);
            $table->text('review');
            $table->string('avatar')->nullable();
            $table->boolean('is_placed')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
