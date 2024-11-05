<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Запуск миграции.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id(); // Это создаст автоинкрементный id, аналогичный BIGINT UNSIGNED AUTO_INCREMENT
            $table->foreignId('teacher_id')->nullable()->constrained('teachers')->onDelete('set null'); // Внешний ключ
            $table->date('date');
            $table->time('time');
            $table->string('img', 255)->nullable()->comment('Если это мастер-класс');
            $table->tinyText('notes')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0 выкл., 1 вкл.');
            $table->tinyInteger('type')->default(0)->comment('0-Курсы, 1-Мастер-классы');
            $table->timestamps(0); // Создает created_at и updated_at, без микро секунд

            // Индексы
            $table->primary('id');
            $table->index('teacher_id'); // Индекс для teacher_id
        });
    }

    /**
     * Откат миграции.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}