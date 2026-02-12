<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';              // 테이블명
    protected $primaryKey = 'id_member';      // PK
    public $timestamps = false;               // created_at, updated_at 없음

    protected $fillable = [
        'name_member',
        'email_member',
        'phone_member',
        'join_date_member',
        'role_member',
    ];
}
