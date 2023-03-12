<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutDayExerciseSet extends Model
{
    use HasFactory;

    public int $workoutId;
    public int $exerciseId;

    protected $fillable = [
        'workout_id',
        'exercise_set_id'
    ];

    protected $table = 'workout_day_exercise_set';
}
