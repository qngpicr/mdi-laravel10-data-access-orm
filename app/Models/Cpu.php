<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    protected $table = 'cpu';              // 테이블명
    protected $primaryKey = 'id_cpu';      // PK
    public $timestamps = false;            // created_at, updated_at 없음

    protected $fillable = [
        'name_cpu',
        'release_cpu',
        'core_cpu',
        'thread_cpu',
        'maxghz_cpu',
        'minghz_cpu',
        'type_code_cpu',
        'manf_code_cpu',
    ];
}
