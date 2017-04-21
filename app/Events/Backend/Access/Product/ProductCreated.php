<?php
/**
 * Created by PhpStorm.
 * User: OldDev
 * Date: 19.04.2017
 * Time: 4:44
 */

namespace App\Events\Backend\Access\Product;
use Illuminate\Queue\SerializesModels;

/**
 * Class ProductCreated.
 */
class ProductCreated
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
