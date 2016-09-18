<?php

namespace App;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use Sluggable; 

    /**
     * A manufacturer has many bikes.
     */
    public function bikes () 
    {
    	return $this->hasMany(Bike::class);
    }
}
