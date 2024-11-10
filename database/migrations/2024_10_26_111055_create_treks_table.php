<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('treks', function (Blueprint $table) {
            $table->id();
            $table->string('trek_heading');
            $table->string('price');
            $table->string('about_trek'); // Changed to string
            $table->string('location');
            $table->string('altitude');
            $table->string('difficulty');
            $table->string('best_time_to_visit');
            $table->string('base_camp');
            $table->string('duration');
            $table->json('route')->nullable();
            $table->json('key_attraction')->nullable();
            $table->json('preparation_tips')->nullable();
            $table->json('how_to_reach')->nullable();
            $table->json('image_paths')->nullable();
            $table->enum('trek_times_season', ['winter', 'summer'])->nullable();
            $table->string('trek_times_months')->nullable(); // Single selected month
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treks');
    }
};
