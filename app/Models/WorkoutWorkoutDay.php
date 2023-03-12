<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutWorkoutDay extends Model
{
    use HasFactory;

    public int $workoutId;
    public int $workoutDayId;
    public bool $isEnabled;

    protected $fillable = [
        'workout_id',
        'workout_day_id',
        'is_enabled'
    ];

    protected $table = 'workout_workout_day';
}
