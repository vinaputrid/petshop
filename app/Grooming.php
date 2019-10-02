<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grooming extends Model
{
    use SoftDeletes;
    protected $table = 'groomings';
    protected $fillable = [
        'idAnimal',
        'grooming_type',
        'price',
        'created_at',
        'updated_at'
    ];
}
