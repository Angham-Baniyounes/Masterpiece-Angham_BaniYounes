<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $perPage = 3;
    protected $guarded = [];

    public function subcategories() {
        return $this->hasMany(Subcategory::class);
    }

    public function path() {
        return route('categories.show', $this);
    }
}
