<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseSet extends Model
{
    use HasFactory;
    public int $exerciseId;
    public int $setId;

    protected $fillable = [
        'exercise_id',
        'set_id'
    ];

    protected $table = 'exercise_set';
}
