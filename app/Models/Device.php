<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'device';              // 테이블명
    protected $primaryKey = 'id_device';      // PK
    public $timestamps = false;               // created_at, updated_at 없음

    protected $fillable = [
        'name_device',
        'type_device',
        'release_device',
        'manf_code_device',
    ];
}
