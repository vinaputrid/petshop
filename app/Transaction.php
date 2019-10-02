<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $table = 'transactions';
    protected $fillable = [
        'idOrder',
        'report',
        'created_at',
        'updated_at'
    ];
}
