<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    public string $name;

    protected $fillable = [
        'name'
    ];

    protected $table = 'set';
}
