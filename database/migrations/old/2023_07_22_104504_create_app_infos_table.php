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
        Schema::create('app_infos', function (Blueprint $table) {
            $table->id();
            $table->string('social_link_youtube')->nullable();
            $table->string('social_link_facebook')->nullable();
            $table->string('social_link_twitter')->nullable();
            $table->string('social_link_instagram')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_infos');
    }
};
