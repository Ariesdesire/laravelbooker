<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    //

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';
    //
    /**
     * Get the comments for the blog post.
     */
    public function attractions()
    {
        return $this->hasMany('App\Attraction');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
