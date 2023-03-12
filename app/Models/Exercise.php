<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    public string $name;
    public string $description;
    public int $exerciseImageId;

    protected $fillable = [
        'name',
        'description',
        'exercise_image_id'
    ];

    protected $table = 'exercise';
}
