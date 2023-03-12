<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public int $name;

    protected $fillable = [
        'name'
    ];

    protected $table = 'permission';
}
