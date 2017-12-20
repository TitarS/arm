<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Menu extends Model
{
    use Translatable;
    public $translationModel = 'App\MenuTranslation'; //??Працює й без нього??
    protected $fillable = ['slug', 'image'];
    public $translatedAttributes = [
        'title',
        'description',
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

    public function products() {
        return $this->hasMany(Product::class);
    }
}
