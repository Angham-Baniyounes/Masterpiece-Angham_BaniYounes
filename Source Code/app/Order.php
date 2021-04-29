<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = [];

    public function products() {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
