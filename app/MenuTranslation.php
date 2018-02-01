<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTranslation extends Model
{
    public $timestamps = false;
    protected $fillable= [
        'title',
        'description',
        'content',
        'text_bottom',
        'text_top'
    ];

}
