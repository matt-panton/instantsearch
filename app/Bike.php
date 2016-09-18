<?php

namespace App;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Bike extends Model
{
	use Sluggable, Searchable;

	protected $fillable = [
		'name',
		'price',
		'year',
		'description',
		'suspension',
		'manufacturer_id',
	];

	/**
	 * Implicit bind by slug.
	 */
	public function getRouteKeyName ()
	{
		return 'slug';
	}

	/**
	 * Set price in pence.
	 */
	public function setPriceAttribute ($value)
	{
		$this->attributes['price'] = $value * 100;
	}

	/**
	 * Get price in pounds.
	 */
	public function getPriceAttribute ($value)
	{
		return $value/100;
	}

	/**
	 * Get the indexable data array for the model.
	 */
	public function toSearchableArray ()
	{
		$array = $this->toArray();

		$array['manufacturer'] = $this->manufacturer->name;
		$array['disciplines'] = $this->disciplines->pluck('name')->toArray();
		unset($array['manufacturer_id']);

		return $array;
	}

	/**
	 * A bike belongs to a manufacturer.
	 */
    public function manufacturer ()
    {
    	return $this->belongsTo(Manufacturer::class);
    }

    /**
     * A bike can have many disciplines.
     */
    public function disciplines ()
    {
    	return $this->belongsToMany(Discipline::class);
    }
}
