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
        Schema::create('loaiSP', function (Blueprint $table) {
            $table->id();
            $table->string('tenLoai', 40)->unique();
            $table->integer('thuTu')->default(0);
            $table->boolean('anHien')->default(1);
            $table->string('urlHinh', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loaiSP');
    }
};
