<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use SoftDeletes;
    protected $table = 'admins';
    protected $fillable = [
        'idUser',
        'admin_name',
        'noHp',
        'created_at',
        'updated_at'
    ];
}
