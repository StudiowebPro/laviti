<?php

namespace App\Http\Controllers\Backend\Showcase\Brand;

use App\Http\Requests\Backend\Showcase\Brand\CreateBrandRequest;
use App\Http\Requests\Backend\Showcase\Brand\UpdateBrandRequest;
use App\Services\Backend\Showcase\Brand\BrandService;
use App\Http\Controllers\Controller as BaseController;
use Flash;

class BrandController extends BaseController
{

    /**
     * @var  BrandService
     */
    private $brandService;

    function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    /**
     * Display a listing of the Brand.
     *
     * @return Response
     */
    public function index()
    {
        $brands = $this->brandService->paginate(10);

        return view('backend.showcase.brands.index')->with(compact('brands'));
    }

    /**
     * Show the form for creating a new Brand.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.showcase.brands.create');
    }

    /**
     * Store a newly created Brand in storage.
     *
     * @param CreateBrandRequest $request
     *
     * @return Response
     */
    public function store(CreateBrandRequest $request)
    {
        $input = $request->all();

        $brand = $this->brandService->create($input);

        Flash::success('Brand saved successfully.');

        return redirect(route('admin.showcase.brand.index'));
    }

    /**
     * Display the specified Brand.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $brand = $this->exist($id);

        return view('backend.showcase.brands.show')->with(compact('brand'));
    }

    /**
     * Show the form for editing the specified Brand.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $brand = $this->exist($id);

        return view('backend.showcase.brands.edit')->with(compact('brand'));
    }

    /**
     * Update the specified Brand in storage.
     *
     * @param int $id
     * @param UpdateBrandRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBrandRequest $request)
    {
        $this->exist($id);

        $this->brandService->update($id, $request->all());

        Flash::success('Brand updated successfully.');

        return redirect(route('admin.showcase.brand.index'));
    }

    /**
     * Remove the specified Brand from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $this->exist($id);

        $this->brandService->delete($id);

        Flash::success('Brand deleted successfully.');

        return redirect(route('admin.showcase.brand.index'));
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
            $brand = $this->brandService->findOrFail($id);
        } catch(ModelNotFoundException $e) {
            Flash::error('Brand not found');

            return redirect(route('admin.showcase.brand.index'));
        }

        return $brand;
    }
}
