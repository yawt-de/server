<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiTokenPermission extends Model
{
    use HasFactory;

    public int $apiTokenId;
    public int $permissionId;

    protected $fillable = [
        'api_token_id',
        'permission_id'
    ];

    protected $table = 'api_token_permission';
}
