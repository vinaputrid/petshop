<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use SoftDeletes;
    protected $table = 'animals';
    protected $fillable = [
        'idCustomer',
        'animal_name',
        'animal_type',
        'weight',
        'created_at',
        'updated_at'
    ];
}
