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
        Schema::create('voucher', function (Blueprint $table) {
            $table->id();
            $table->double('dongiatoithieu')->default(0);
            $table->string('ma');
            $table->date('ngaytao');
            $table->date('ngayhethan');
            $table->double('sotiengiam');
            $table->integer('solansudung');
            $table->integer('solandadung');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher');
    }
};
