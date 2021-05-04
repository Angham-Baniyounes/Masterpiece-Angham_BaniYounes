<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = "product_images";
    protected $perPage = 5;
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function path() {
        return route('image.show', $this);
    }
}
