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
        Schema::create('workout_workout_day', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Workout::class);
            $table->foreignIdFor(WorkoutDay::class);
            $table->boolean('is_enabled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_workout_day');
    }
};
