<?php

namespace App\Services\Backend\Showcase\Brand;

use App\Repositories\Backend\Showcase\Brand\BrandRepository;

class BrandService
{
	/**
	 * Repository variable
	 *
	 * @var BrandRepository
	 */
    private $brandRepository;

    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    /**
     * call the function of repository
     */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->brandRepository, $method], $args);
    }
}
