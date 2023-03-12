<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory;

    public int $actionType;
    public int $apiToken;
    public string $remoteAdress;
    public string $detailText;

    protected $fillable = [
        'action_type_id',
        'api_token_id',
        'remote_adress',
        'detail_text'
    ];

    protected $table = 'audit_log';
}
