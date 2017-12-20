<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Attribute extends Model
{
    use Translatable;
    public $timestamps = false;
    public $translationModel = 'App\AttributeTranslation'; //??Працює й без нього??
    protected $fillable = ['product_id'];
    public $translatedAttributes = [
        'name',
        'value'
    ];

}
