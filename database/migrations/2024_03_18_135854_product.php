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
         Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desciption');
            $table->double('price');
            $table->integer('stock');
            $table->string('defaultImage');
            $table->json('listImage');
            $table->boolean('status')->nullable()->default(false);
            $table->dateTime('create_at');
            $table->dateTime('create_by');
            $table->dateTime('update_at');
            $table->dateTime('update_by');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('Categoies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Products');
    }
};
