<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 22.04.2017
 * Time: 22:03
 */

namespace App\Events\Backend\Showcase\Product;

use Illuminate\Queue\SerializesModels;

/**
 * Class ProductDeleted.
 */
class ProductDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $product;

    /**
     * @param $product
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

}