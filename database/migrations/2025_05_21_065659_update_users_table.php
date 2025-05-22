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
        Schema::table('subjects', function (Blueprint $table) {
            if (!Schema::hasColumn('subjects', 'subject_code')) {
                $table->string('subject_code')->unique()->nullable();
            }

            if (!Schema::hasColumn('subjects', 'subject_description')) {
                $table->string('subject_description')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            if (Schema::hasColumn('subjects', 'subject_code')) {
                $table->dropColumn('subject_code');
            }

            if (Schema::hasColumn('subjects', 'subject_description')) {
                $table->dropColumn('subject_description');
            }
        });
    }
};
