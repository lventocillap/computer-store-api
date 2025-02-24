<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'imageble_type',
        'imageble_id',
        'url'
    ];
}
