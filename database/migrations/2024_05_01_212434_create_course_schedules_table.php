<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('course_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id')->nullable(); // teacher's ID, nullable if there are times with no teacher
            $table->date('date');
            $table->time('time');
            $table->boolean('status')->default(1);
            $table->timestamps();

            // Optional: Add a foreign key constraint if there is a relationship with the users table
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_schedules');
    }
};
