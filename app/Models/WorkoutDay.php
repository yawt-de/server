<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutDay extends Model
{
    use HasFactory;

    public int $name;
    public int $weekdayId;

    protected $fillable = [
        'name',
        'weekday_id'
    ];

    protected $table = 'workout_day';
}
