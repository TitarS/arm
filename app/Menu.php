<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;
use File;
use Storage;

class Menu extends Model
{
    use Translatable;

    const ON = 1;
    const OFF = 0;

    protected $fillable = ['slug', 'image'];
    public $translatedAttributes = [
        'title',
        'description',
        'content',
        'text_bottom',
        'text_top'
    ];

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public static function getMenus() {
        $menus = Menu::where('parent_id', null)->get();

        return $menus;
    }

    public static function getAllMenus() {
        $menus = Menu::all()->pluck('title', 'id');

        return $menus;
    }

    public static function getProductsMenu() {
        $menus = Menu::find(2)->children->pluck('title', 'id')->all();

        return $menus;
    }

    public static function getGalleriesMenu() {
        $menus = Menu::find(3)->children->pluck('title', 'id')->all();

        return $menus;
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function getUrl() {
        return env('APP_URL') . '/' . \App::getLocale() . '/' . $this->slug;
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

    public function statusOff() {
        $this->status = Menu::OFF;
        //$this->status = 0;
    }

    public function statusOn() {
        $this->status = Menu::ON;
        //$this->status = 1;
    }

    public function toggleStatus($value) {
        if ($value == null) {
            return $this->statusOff();
        }
        return $this->statusOn();

    }

    public function getCategoryImage() {
        if ($this->image == null) {
            return '/img/noimage.png';
        }
        return '/images/categories/' . $this->image;
    }

    public function getParentCategory() {
        if($this->parent()->first() == null) {
            return 'Нету';
        }
        return $this->parent()->first()->title;
    }

    public function edit($data) {
        $this->fill($data);
        $this->save();
    }

    public function removeImage($path){
        if (File::exists($path . $this->image) && $this->image != NULL) {
            Storage::delete($path . $this->image);
        }
    }

    public function uploadImage($path, $image) {
        if($image == null) {
            return;
        }
        $this->removeImage($path);
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs($path, $filename);
        $this->image = $filename;
        $this->save();
    }

}
