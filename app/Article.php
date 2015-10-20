<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     **/
    protected $fillable = [
        'title',
        'body',
        'published_at',
    ];


    /**
     * Treat $dates as a Carbon instance
     *      Visit Model to dig deeper getDates() method
     *
     * @var array
     */
    protected $dates = ['published_at'];


     /**
      * scopeName (nameing convention)
      * example:  scopeRedCar
      **/


    /**
     * Scope queries to articles that have been published.
     *      Get Articles, WHERE published_at <= now
     *
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where( 'published_at', '<=', Carbon::now() );
    }


    /**
     * Scope queries to articles that have not been published.
     *      Get Articles, WHERE published_at >= now
     *
     * @param $query
     **/
    public function scopeUnpublished($query)
    {
        $query->where( 'published_at', '>=', Carbon::now() );
    }


    /**
     * Set the published_at attribute.
     *      setNameAttribute (naming convention)
     *      example:  setAddressAttribute
     *
     *      Set Published-At Attribute to include H:m:s
     *
     * @param $date
     **/
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

/*
        // use Carbon::parse() to set the time to midnight
        $this->attributes['published_at'] = Carbon::parse($date);
*/
    }


    /**
     * An article is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    /**
     * Get the tags associated with the given article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

}
