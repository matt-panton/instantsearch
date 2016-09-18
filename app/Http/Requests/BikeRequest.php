<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class BikeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    	$ignore = is_null($this->bike) ? null : $this->bike->id;

        return [
			'name'            => 'required|unique:bikes,id,'.$ignore,
			'price'           => 'required|numeric',
			'year'            => 'required|numeric',
			'description'     => 'required',
			'manufacturer_id' => 'required|exists:manufacturers,id',
			'suspension'      => 'required|in:full,hardtail',
        ];
    }
}
