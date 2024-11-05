<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        // Таблица подписок пользователей
        Schema::create('user_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('subscription_id')->nullable()->constrained('subscriptions')->onDelete('set null');
            $table->foreignId('payment_status_id')->nullable()->constrained('payment_statuses')->onDelete('set null');
            $table->foreignId('payment_method_id')->nullable()->constrained('payment_methods')->onDelete('set null');
            $table->tinyInteger('lesson_count')->unsigned()->default(1);
            $table->tinyInteger('lesson_used')->unsigned()->default(0);
            $table->decimal('paid_amount', 6, 0)->unsigned()->default(0);
            $table->decimal('total_price', 6, 0)->unsigned()->default(0);
            $table->string('certificate_number', 7)->nullable();  // Ограничение длины до 6 символов для сертификатов
            $table->tinyText('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_subscriptions');
    }
};
