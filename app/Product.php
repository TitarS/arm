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

    public static function add($data) {
        $product = new static;
        $product->fill($data);

        return $product;
    }

    public function edit($data) {
        $this->fill($data);

        return $this;
    }

    /*set category*/
    public function setCategory($menu_id) {
        if($menu_id == NULL) {
            return;
        }
        $this->menu_id = $menu_id;
        $this->save();
    }

    public function setOff() {
        $this->status = 0;
    }

    public function setOn() {
        $this->status = 1;
    }
    /*end*/

    /*status*/
    public function toggleStatus($value) {
        if($value == NULL) {
            return $this->setOff();
        }
        return $this->setOn();
    }

    public function getStatus() {
        if($this->status == 1){
            return 'Вкл';
        }
        return 'Откл';
    }

    public function getStatusFront() {
        if($this->status == 0){
            return;
        }
        return 'checked';
    }
    /*end*/

    /*image*/
    public function getMainGalleryImage() {
        if ($this->image_main == null) {
            return '/img/noimage.png';
        }
        return '/images/products/accessories/' . $this->image_main;
    }

    public function getMainProductImage() {
        if ($this->image_main == null) {
            return '/img/noimage.png';
        }
        return '/images/products/kitchens/' . $this->image_main;
    }

    public function uploadImage($path, $image){
        if($image == NULL) {
            return;
        }
        $this->removeImage($path);
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs($path, $filename);
        $this->image_main = $filename;
    }

    public function removeImage($path){
        if($this->image_main != NULL) {
            Storage::delete($path . $this->image_main);
        }
    }

    public function uploadAlbum($path, $images) {
        if($images == NULL) {
            return;
        }
        foreach ($images as $image) {
            $this->removeImage($path);
            $filename = str_random(10) . '.' . $image->extension();
            $image->storeAs($path, $filename);
            Image::create(['name' => $filename, 'product_id' => $this->id]);
        }
    }

    public function getImages() {
        return $this->images()->get();
    }
    /*end*/

    public function remove($path) {
        $this->removeImage($path);
        $this->delete();
    }

    public function hasVideo() {
        return $this->video != null ? true : false;
    }

    public function hasTour() {
        return $this->link_360 == null ? false : true;
    }

    public function hasImages() {
        return $this->images()->first() != null ? true : false;
    }

    public function hasAttributes(){
        return $this->attributes()->first() != null ? true : false;
    }

    public function getAttribs() {
        return $this->attributes()->get();
    }
/*    public function getAttributes() {
        return $this->attributes()->get();
    }*/

}
