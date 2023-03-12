<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repetition extends Model
{
    use HasFactory;

    public int $unitId;
    public int $count;

    protected $fillable = [
        'unit_id',
        'count'
    ];

    protected $table = 'repetition';
}
