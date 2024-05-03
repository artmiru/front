<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->bigInteger('order_id');
            $table->bigInteger('payment_id')->nullable();
            $table->bigInteger('payment_method_id')->constrained();
            $table->integer('amount');
            $table->string('status', 50)->nullable();
            $table->integer('refund_amount')->nullable();
            $table->dateTime('refund_date')->nullable();
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
        Schema::dropIfExists('payments');
    }
};