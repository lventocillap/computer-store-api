<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'status',
        'stock',
        'manufacturer_information_url',
        'description',
        'price',
        'category_id'
    ];
}
