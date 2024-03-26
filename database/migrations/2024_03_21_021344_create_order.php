<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('address');
            $table->string('phoneNumber');
            $table->string('totalAmount');
            $table->unsignedBigInteger('status_id');
            $table->string('paymentMethod');
            $table->string('cancelReson')->nullable();
            $table->boolean('isCancel')->default(false);
            $table->dateTime('orderDate');
            $table->dateTime('recivedDate')->nullable();
            $table->foreign('status_id')->references('id')->on('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
