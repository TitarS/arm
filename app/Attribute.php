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

    public static function add($data, $productID) {
        foreach ($data as $requestAttribute) {
            $attribute = new static;
            $attribute->product_id = $productID;
            $attribute->fill($requestAttribute);
            $attribute->save();
        }

        return $attribute;
    }

}
