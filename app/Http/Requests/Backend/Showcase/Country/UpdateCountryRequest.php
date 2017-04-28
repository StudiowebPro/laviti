<?php

namespace App\Http\Requests\Backend\Showcase\Country;

use App\Http\Requests\Request;
use App\Models\Showcase\Country\Country;

class UpdateCountryRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return Country::$rules;
	}

}
