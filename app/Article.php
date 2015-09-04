<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{

    // Which Attributes can be Mass Assigned
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    // Make Laravel treat dates as Carbon instance
    // Visit Model to dig deeper getDates() method
    protected $dates = ['published_at'];

    // scopeName (nameing convention)
    // example:  scopeRedCar

    // Query Scope
    // Get Articles, WHERE published_at <= now
    public function scopePublished($query)
    {
        $query->where( 'published_at', '<=', Carbon::now() );
    }

    // Get Articles, WHERE published_at >= now
    public function scopeUnpublished($query)
    {
        $query->where( 'published_at', '>=', Carbon::now() );
    }


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
