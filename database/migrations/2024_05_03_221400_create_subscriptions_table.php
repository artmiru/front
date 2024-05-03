<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('payment_id')->constrained()->onDelete('set null');
            $table->unsignedBigInteger('course_price_id')->nullable()->constrained()->onDelete('set null');
            $table->unsignedBigInteger('course_id')->nullable()->constrained()->onDelete('set null');
            $table->unsignedBigInteger('master_class_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('gift_certificate_code')->nullable();
            $table->integer('hours_count');
            $table->integer('hours_remaining');
            $table->date('expiration_date');
            $table->string('comment',1000);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
};
