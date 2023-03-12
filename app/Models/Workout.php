<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'is_private'
    ];

    protected $attributes = [
        'is_private' => true
    ];


    protected $table = 'workout';
}
