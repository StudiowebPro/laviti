<?php

namespace App\Services\Backend\Showcase\Country;

use App\Repositories\Backend\Showcase\Country\CountryRepository;

class CountryService
{
	/**
	 * Repository variable
	 *
	 * @var CountryRepository
	 */
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    /**
     * call the function of repository
     */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->countryRepository, $method], $args);
    }
}
