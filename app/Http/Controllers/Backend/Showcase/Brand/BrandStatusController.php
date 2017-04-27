<?php

namespace App\Http\Controllers\Backend\Showcase\Brand;

use App\Models\Showcase\Brand\Brand;
use App\Http\Requests\Backend\Showcase\Brand\ManageBrandRequest;
use App\Services\Backend\Showcase\Brand\BrandService;
use App\Http\Controllers\Controller as BaseController;

/**
 * Class BrandStatusController
 *
 * @package App\Http\Controllers\Backend\Showcase\Brand
 */
class BrandStatusController extends BaseController
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
     * Показ "мягкоудаленных" записей
     *
     * @param ManageBrandRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getDeleted(ManageBrandRequest $request)
    {
        return view('backend.showcase.brands.deleted');
    }


    /**
     *  Permanently deleted record from DB.
     *  As default uses forceDelete method from BaseRepository.
     *  your can make your custom method in YouModelRepository class
     *  As default placed in App/Repository/YourPackage/ModelNameRepository.php
     *
     * @param                    $id
     * @param ManageBrandRequest $request
     *
     * @return mixed
     */
    public function forceDelete(Brand $brand, ManageBrandRequest $request)
    {
        $this->brandService->forceDelete($brand);
        return redirect()->route('admin.showcase.brand.deleted')->withFlashSuccess(trans('alerts.backend.showcase.brand.deleted_permanently'));
    }


    /**
     * Восстановление файлов из корзины
     *
     * @param Brand       $deletedBrand
     * @param ManageBrandRequest $request
     *
     * @return mixed
     */
    public function restore(Brand $deletedBrand, ManageBrandRequest $request)
    {
        $this->brandService->restore($deletedBrand);

        return redirect()->route('admin.showcase.brand.index')->withFlashSuccess(trans('alerts.alerts.backend.showcase.brand.restored'));
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
            return redirect(route('admin.showcase.brand.index'))->withFlashError(trans('alerts.backend.showcase.brand.deleted_permanently'));
        }
    return $brand;
    }
}

