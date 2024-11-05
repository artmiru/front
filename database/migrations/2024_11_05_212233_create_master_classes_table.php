<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMkImgTable extends Migration
{
    /**
     * Запуск миграции.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_classes', function (Blueprint $table) {
            $table->id(); // Эквивалент BIGINT UNSIGNED AUTO_INCREMENT
            $table->string('filename', 255); // Поле для пути к изображению
            $table->string('title', 255); // Название изображения
            $table->boolean('is_active')->default(true); // Статус активности с дефолтным значением 1 (активен)
            $table->timestamps(); // Добавит поля created_at и updated_at

            // Индекс для оптимизации поиска по title
            $table->index('title', 'title_idx');
        });
    }

    /**
     * Откат миграции.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mk_img');
    }
}
