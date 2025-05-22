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
            $table->string('course_name')->unique();
            $table->string('course_code')->unique();
            $table->enum('course_type', ['online', 'offline']);
            $table->integer('course_duration')->unsigned(); // in months
            $table->decimal('course_fee', 10, 2)->unsigned();
            $table->text('course_description')->nullable();
            $table->text('description')->nullable(); // additional notes
            $table->date('course_start_date');
            $table->date('course_end_date');
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->string('institute_code'); // foreign key if applicable
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
