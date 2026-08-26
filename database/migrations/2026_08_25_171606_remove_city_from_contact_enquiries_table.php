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
        if (Schema::hasColumn('contact_enquiries', 'city')) {
            Schema::table('contact_enquiries', function (Blueprint $table) {
                $table->dropColumn('city');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (! Schema::hasColumn('contact_enquiries', 'city')) {
            Schema::table('contact_enquiries', function (Blueprint $table) {
                $table->string('city')->nullable()->after('course');
            });
        }
    }
};
