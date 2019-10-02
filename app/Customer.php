<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $table = 'customers';
    protected $fillable = [
        'idUser',
        'customer_name',
        'noHp',
        'created_at',
        'updated_at'
    ];
}
