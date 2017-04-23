<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 22.04.2017
 * Time: 17:31
 */

namespace App\Http\Requests\Backend\Showcase\Product;

use App\Http\Requests\Request;

class UpdateProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->hasRole(1);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

}