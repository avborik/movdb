<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class Post extends Model implements ViewableContract
{
    use Sluggable;
    use SluggableScopeHelpers;
    use Viewable;

    protected $fillable = [
        'user_id', 'category_id', 'photo_id', 'name', 'review','title','description'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['name','title']
            ]
        ];
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
