<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $perPage = 4;
    protected $guarded = [];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function path() {
        return route('products.show', $this);
    }
    
}
