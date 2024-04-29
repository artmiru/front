<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Make sure it's unsigned
            $table->foreign('user_id')->references('id')->on('users'); // Add a foreign key constraint
            $table->string('bio',1000)->nullable();
            $table->string('folder')->nullable();
            $table->boolean('status')->default(1);
            $table->string('pass_card')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
