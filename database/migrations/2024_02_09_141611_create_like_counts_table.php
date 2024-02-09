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
        Schema::create('like_counts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('like_id');
            $table->bigInteger('count');

            $table->foreign('like_id')->references('id')->on('likes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('like_counts');
    }
};
