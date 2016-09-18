<?php

namespace App;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
	use Sluggable;

	public $timestamps = false;
	
	protected $fillable = ['name'];

	/**
	 * A discipline can have many bikes.
	 */
    public function bikes ()
    {
    	return $this->belongsToMany(Bike::class);
    }
}
