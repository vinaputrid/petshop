<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use SoftDeletes;
    protected $table = 'foods';
    protected $fillable = [
        'food_name',
        'food_merk',
        'food_type',
        'price',
        'created_at',
        'updated_at'
    ];
}
