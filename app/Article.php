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

    // setNameAttribute (naming convention)
    // example:  setAddressAttribute

    // Set Published-At Attribute to include H:m:s
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

        // use Carbon::parse() to set the time to midnight
//        $this->attributes['published_at'] = Carbon::parse($date);
    }

}
