<?php

namespace App\Http\Requests\Backend\Showcase\Brand;

use App\Http\Requests\Request;
use App\Models\Showcase\Brand\Brand;

class UpdateBrandRequest extends Request {

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
		return Brand::$rules;
	}

}
