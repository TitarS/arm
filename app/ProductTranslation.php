<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductTranslation extends Model
{
    use Sluggable;

    public $timestamps = false;
    protected $fillable= [
        'title',
        'slug',
        'content',
        'content_top',
        'description',
        'count_days',
        'material',
        'warranty'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
