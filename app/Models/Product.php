<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

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
        'url',
        'category_id',

    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
    public function image():MorphOne
    {
        return $this->morphOne(Image::class, 'imageble');
    }
    public function wishlist(): HasMany
    {
        return $this->hasMany(Wishlist::class, 'product_id');
    }
}
