<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseImage extends Model
{
    use HasFactory;


    public string $imageUrl;

    protected $fillable = [
        'image_url'
    ];

    protected $table = 'exercise_image';
}
