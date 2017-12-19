<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\Sluggable;

class MenuTranslation extends Model
{
    //use Sluggable;

    public $timestamps = false;
    protected $fillable= [
        'title',
        'description',
        'text_bottom',
        'text_top'
    ];

/*    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }*/
}
