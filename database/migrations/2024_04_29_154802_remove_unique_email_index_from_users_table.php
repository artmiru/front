<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the unique index on the 'email' column
            $table->dropUnique('users_email_unique'); // 'users_email_unique' is the conventional name for the unique index on the 'email' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add the unique index back to the 'email' column
            $table->unique('email'); // No need to specify the index name, Laravel will use the default naming convention
        });
    }
};
