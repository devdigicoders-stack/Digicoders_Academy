<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('whatsapp_number')->nullable();
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('qualification')->nullable();
            $table->string('school_college_name')->nullable();
            $table->string('course_name')->default('Full Stack Web Development');
            $table->string('father_name')->nullable();
            $table->string('guardian_mobile')->nullable();
            $table->string('aadhaar_number')->nullable();
            $table->string('mode')->default('Lucknow'); // Online, Lucknow, Kanpur, Gorakhpur
            $table->string('student_photo')->nullable();
            $table->string('source')->default('Online Admission Form');
            $table->string('status')->default('new'); // new, contacted, follow_up, enrolled
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
