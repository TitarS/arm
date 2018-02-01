<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
use Storage;

class Image extends Model
{

    protected $fillable = ['product_id', 'name'];

    public function getProductKitchenImage() {
        return '/images/products/kitchens/' . $this->name;
    }

    public function remove($path) {
        if(File::exists($path . $this->name) && $this->name != NULL) {
            Storage::delete($path . $this->name);
        }
        $this->delete();
    }

}
