<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable =  ['*'];




    protected $dates = ['published_at'];

    //query scope (convention: scopeName)

    //scope published
    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    }


    // setNameAttribute (convention)
    public function setPublishedAtAttribute($date){
        // i want to make sure my date is in the correct format
        $this->attributes['published_at'] = Carbon::parse($date);
    }






    public function user(){
       return $this->belongsTo('App\User');
    }


}
