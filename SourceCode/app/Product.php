<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Nagy\LaravelRating\Traits\Rate\Rateable;

class Product extends Model
{
    use SearchableTrait;
    use Rateable;
    
    protected $table = 'products';
    protected $perPage = 4;
    protected $guarded = [];
    protected $searchable = [
        'columns' => [
            'products.product_name'          => 10,
            'products.product_description'   => 10,
            'products.product_price'         => 10,
            'subcategories.subcategory_name' => 10, 
            'categories.id'                  => 10,
            'subcategories.category_id'      => 10,
        ],
        'joins' => [
            'subcategories' => ['products.subcategory_id', 'subcategories.id'],
            'categories' => ['subcategories.category_id', 'categories.id'],
        ],
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'order_product', 'order_id', 'product_id')->withTimestamps();
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
