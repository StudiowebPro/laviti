<?php

namespace App\Events\Backend\Showcase\Product;

use Illuminate\Queue\SerializesModels;

class ProductUpdated
{
    use SerializesModels;
    /**
     * @var
     */
    public $product;

    /**
     * @param $user
     */
    public function __construct($product)
    {
        $this->product = $product;
    }
}