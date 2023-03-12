<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiToken extends Model
{
    use HasFactory;

    public int $userId;
    public int $actionTypeId;
    public string $remoteAddress;
    public string $detail_text;

    protected $fillable = [
        'user_id',
        'action_type_id',
        'remote_address',
        'detail_text'
    ];

    protected $table = 'api_token';

}
