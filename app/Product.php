<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use Translatable;
    public $translatedAttributes = [
        'title',
        'slug',
        'content',
        'content_top',
        'description',
        'count_days',
        'material',
        'warranty'
    ];
    protected $fillable = ['video', 'link_360'];

    public function attributes() {
        return $this->hasMany(Attribute::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function menu() {
        return $this->belongsTo(Menu::class);
    }

    public function hasAttributes() {
        return $this->attributes()->first() != null ? true : false;
    }

    public function getAttributes() {
        return $this->attributes()->get();
    }

    public function hasVideo() {
        return $this->video != null ? true : false;
    }

    public function hasTour() {
        return $this->link_360 != null ? true : false;
    }

    public function hasImages() {
        return $this->images()->first() != null ? true : false;
    }

    public function getImages() {
        return $this->images()->get();
    }

    public function getMainProductImage() {
        return '/images/products/kitchens/' . $this->image_main;
    }

    public function getMainGalleryImage() {
        return '/images/products/accessories/' . $this->image_main;
    }

    public function getStatus() {
        if($this->status == 1) {
            return 'Вкл';
        }
        return 'Откл';
    }

    public static function add($data) {
        $product = new self;

        $product->fill($data);
        //$product->save();
        return $product;
    }

   public function UploadImage($path, $image) {
       if($image == NULL) {
            return;
        }
        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs($path, $filename);
        $this->image_main = $filename;
    }

    ////?????image - може не image////
    public function removeImage() {
        if ($this->main_image != NULL) {
            Storage::delete('images/products/kitchens/' . $this->main_image);
        }
    }

    public function uploadAlbum($images) {
        if($images == NULL) {
            return;
        }
        foreach ($images as $image) {
            $this->removeImage();
            $filename = str_random(10) . '.' . $image->extension();
            $image->storeAs('images/products/kitchens/', $filename);
            Image::create(['name' => $filename, 'product_id' => $this->id]);
        }
    }

    public function setCategory($menu_id) {
        if($menu_id == NULL) {
            return;
        }
        $this->menu_id = $menu_id;
    }

    public function toggleStatus($value) {
        if($value == null) {
            return $this->setOff();
        }
        return $this->setOn();
    }

    public function setOn() {
        $this->status = 1;
    }

    public function setOff() {
        $this->status = 0;
    }



/*    public function addAttribute($attributes) {
        foreach ($attributes as $attribute) {
            Attribute::add($attribute[0], $attribute[1], $attribute[2], $this->id);
        }
    }*/

/*    public function addAttribute($attributes) {
        foreach ($attributes as $attribute) {
            Attribute::add($attribute, $this->id);
        }
    }*/
}
