<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Связано с пользователем
            $table->foreignId('subscription_id')->constrained()->onDelete('cascade'); // Связано с подпиской
            $table->foreignId('visit_status_id')->constrained('visit_statuses'); // Связано с состоянием визита
            $table->foreignId('schedule_id')->constrained('schedules'); // Связано с расписанием
            $table->tinyText('notes')->nullable(); // Примечания, может быть пустым
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
