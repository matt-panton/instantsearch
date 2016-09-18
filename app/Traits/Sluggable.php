<?php 

namespace App\Traits;

trait Sluggable
{

	/**
	 * Dynamicaly create slug whenever name is updated.
	 */
	public function setNameAttribute ($value)
	{
		$this->attributes['name'] = $value;
		$this->attributes['slug'] = str_slug($value);
	}
}