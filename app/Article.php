<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    // Which Attributes can be Mass Assigned
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

}
