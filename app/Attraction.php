<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{



  /**
    * Get the route that has this Attraction.
    */
   public function route()
   {
       return $this->belongsTo('App\Route');
   }


   public function user()
   {
       return $this->belongsTo('App\User');
   }


}
