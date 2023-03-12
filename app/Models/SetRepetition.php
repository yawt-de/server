<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetRepetition extends Model
{
    use HasFactory;

    public int $repetitionId;
    public int $setId;
    public int $order;

    protected $fillable = [
        'repetition_id',
        'set_id',
        'order'
    ];

    protected $table = 'set_repetition';
}
