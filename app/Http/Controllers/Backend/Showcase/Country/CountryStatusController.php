<?php

namespace App\Http\Controllers\Backend\Showcase\Country;

use App\Models\Showcase\Country\Country;
use App\Http\Requests\Backend\Showcase\Country\ManageCountryRequest;
use App\Services\Backend\Showcase\Country\CountryService;
use App\Http\Controllers\Controller as BaseController;

/**
 * Class CountryStatusController
 *
 * @package App\Http\Controllers\Backend\Showcase\Brand
 */
class CountryStatusController extends BaseController
{

    /**
     * @var  CountryService
     */
    private $countryService;

    function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }


    /**
     * Показ "мягкоудаленных" записей
     *
     * @param ManageCountryRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getDeleted(ManageCountryRequest $request)
    {
        return view('backend.showcase.countries.deleted');
    }


    /**
     *  Permanently deleted record from DB.
     *  As default uses forceDelete method from BaseRepository.
     *  your can make your custom method in YouModelRepository class
     *  As default placed in App/Repository/YourPackage/ModelNameRepository.php
     *
     * @param                    $id
     * @param ManageCountryRequest $request
     *
     * @return mixed
     */
    public function forceDelete(Country $country, ManageCountryRequest $request)
    {
        $this->brandService->forceDelete($country);
        return redirect()->route('admin.showcase.country.deleted')->withFlashSuccess(trans('alerts.backend.showcase.country.deleted_permanently'));
    }


    /**
     * Восстановление файлов из корзины
     *
     * @param Country       $deletedCountry
     * @param ManageCountryRequest $request
     *
     * @return mixed
     */
    public function restore(Country $deletedCountry, ManageCountryRequest $request)
    {
        $this->countryService->restore($deletedCountry);

        return redirect()->route('admin.showcase.country.index')->withFlashSuccess(trans('alerts.alerts.backend.showcase.country.restored'));
    }




    /**
     * check if a record exist
     *
     * @param  int $id
     * @return Eloquent
     */
    private function exist($id)
    {
        try {
            $country = $this->countryService->findOrFail($id);
        } catch(ModelNotFoundException $e) {
            return redirect(route('admin.showcase.country.index'))->withFlashError(trans('alerts.backend.showcase.country.deleted_permanently'));
        }
    return $country;
    }
}

