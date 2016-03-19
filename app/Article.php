<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Field I'm ok with, no MassAssignement error to throw
    protected $fillable =[
        'title',
        'body',
        'published_at',
    ];

    protected $dates = ['published_at'];

    //query scope (convention: scopeName)

    //scope published
    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    }

    // scope unpublished
    public function scopeUnpublished($query){
        $query->where('published_at', '>=', Carbon::now());

    }



    // setNameAttribute (convention)
    public function setPublishedAtAttribute($date){
        // i want to make sure my date is in the correct format
        $this->attributes['published_at'] = Carbon::parse($date);
    }


    /**
     * An article is owned by A user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}


