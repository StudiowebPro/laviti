<?php

namespace App\Http\Controllers\Backend\Showcase\Country;

use App\Models\Showcase\Country\Country;
use App\Http\Requests\Backend\Showcase\Country\CreateCountryRequest;
use App\Http\Requests\Backend\Showcase\Country\UpdateCountryRequest;
use App\Http\Requests\Backend\Showcase\Country\ManageCountryRequest;
use App\Services\Backend\Showcase\Country\CountryService;
use App\Http\Controllers\Controller as BaseController;
use Flash;

class CountryController extends BaseController
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
     * Display a listing of the Country.
     *
     * @return Response
     */
    public function index()
    {
        $countries = $this->countryService->paginate(10);

        return view('backend.showcase.countries.index')->with(compact('countries'));
    }

    /**
     * Show the form for creating a new Country.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.showcase.countries.create');
    }

    /**
     * Store a newly created Country in storage.
     *
     * @param CreateCountryRequest $request
     *
     * @return Response
     */
    public function store(CreateCountryRequest $request)
    {
        $input = $request->all();

        $country = $this->countryService->create($input);

        Flash::success('Country saved successfully.');

        return redirect(route('admin.showcase.country.index'));
    }

    /**
     * Display the specified Country.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $country = $this->exist($id);

        return view('backend.showcase.countries.show')->with(compact('country'));
    }

    /**
     * @param Product              $product
     * @param ManageProductRequest $request
     *
     * @return mixed
     */
    public function edit(Country $country, ManageCountryRequest  $request)
    {
        $media=$country->getMedia();
        return view('backend.showcase.countries.edit')
            ->withCountry($country)
            ->withMedia($media);
    }




    /**
     * Update the specified Country in storage.
     *
     * @param int $id
     * @param UpdateCountryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCountryRequest $request)
    {
        $this->exist($id);

        $this->countryService->update($id, $request->all());

        Flash::success('Country updated successfully.');

        return redirect(route('admin.showcase.country.index'));
    }

    /**
     * Remove the specified Country from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $this->exist($id);

        $this->countryService->delete($id);

        Flash::success('Country deleted successfully.');

        return redirect(route('admin.showcase.country.index'));
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
            Flash::error('Country not found');

            return redirect(route('admin.showcase.country.index'));
        }

        return $country;
    }
}
