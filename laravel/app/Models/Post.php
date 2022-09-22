<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    protected $fillable = [
        'user_id',
        'title',
        'post_content',
        'post_image',
        'post_date',
    ];

    use SoftDeletes;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }
}
