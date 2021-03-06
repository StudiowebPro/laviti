<?php
/**
 * Created by PhpStorm.
 * User: OldDev
 * Date: 19.04.2017
 * Time: 4:26
 */

namespace App\Http\Requests\Backend\Showcase\Product;

use App\Http\Requests\Request;

/**
 * Class StoreRoleRequest.
 */
class StoreProductRequest extends Request
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
            'name' => 'required',
        ];
    }
}
