<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = ['product_id', 'name'];

    public function getProductKitchenImage() {
        return '/images/products/kitchens/' . $this->name;
    }
}
