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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('trek_heading');
            $table->text('about_trek');
            $table->string('location');
            $table->string('altitude');
            $table->string('difficulty');
            $table->string('best_time_to_visit');
            $table->string('base_camp');
            $table->string('duration');
            $table->json('route');
            $table->json('key_attraction');
            $table->json('preparation_tips');
            $table->json('how_to_reach');
            $table->json('images')->nullable();
            $table->string('trek_times_season');
            $table->string('trek_times_months');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
