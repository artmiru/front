<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', 10)->unique();
            $table->string('comment', 1000)->nullable();
            $table->string('last_name')->nullable()->index();
            $table->string('middle_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['phone']);  
            $table->dropIndex(['last_name_index']);
            $table->dropColumn('last_name');
            $table->dropColumn('middle_name');
            $table->dropColumn('comment');
        });
    }
};
