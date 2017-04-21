<?php
/**
 * Created by PhpStorm.
 * User: OldDev
 * Date: 19.04.2017
 * Time: 6:26
 */

namespace App\Http\Requests\Backend\Access\Product;

use App\Http\Requests\Request;

/**
 * Class ManageProductRequest.
 */
class ManageProductRequest extends Request
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
