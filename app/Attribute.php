<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Attribute extends Model
{
    use Translatable;
    public $timestamps = false;
    public $translationModel = 'App\AttributeTranslation';
    protected $fillable = ['product_id'];
    public $translatedAttributes = [
        'name',
        'value'
    ];

/*    public static function add($name, $value, $locale, $id) {
        $attribute = new static;
        $attribute->name = $name;
        $attribute->value = $value;
        $attribute->locale = $locale;
        $attribute->post_id = $id;
        $attribute->save();
    }*/

/*    public static function add($data, $id) {
        $attribute = new static;
        $attribute->product_id = $id;
        $attribute->fill($data);

        return $attribute;
    }*/

}
