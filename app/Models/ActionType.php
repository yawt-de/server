<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionType extends Model
{
    use HasFactory;

    public int $name;

    protected $fillable = [
        'name'
    ];

    protected $table = 'action_type';
}
