<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'body',
        'status',
        'posted_by',
        'image',
        'like',
        'dislike'
    ];

    public function tags()
    {
        return $this->hasMany('App\Model\use\Tag', 'post_tag');
    }

    public function categories()
    {
        return $this->hasMany('App\Model\use\Category', 'category_post');
    }
}
