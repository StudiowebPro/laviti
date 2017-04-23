<?php

namespace App\Http\Controllers\Backend\Showcase\Product;

use App\Models\Showcase\Product\Product;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Showcase\Product\ProductRepository;
use App\Http\Requests\Backend\Showcase\Product\ManageProductRequest;

/**
 * Class ProductStatusController
 *
 * @package App\Http\Controllers\Backend\Showcase\Product
 */
class ProductStatusController extends Controller
{
    /**
     * @var
     */
    protected $products;

    /**
     * ProductStatusController constructor.
     *
     * @param ProductRepository $products
     */
    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }

    /**
     * Показ удаленных продуктов
     *
     * @param ManageProductRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getDeleted(ManageProductRequest $request)
    {
        return view('backend.showcase.product.deleted');
    }

    /**
     * Полное уничтожение удаленных товаров ("Очистка корзмны")
     *
     * @param Product              $deletedProduct
     * @param ManageProductRequest $request
     *
     * @return mixed
     */
    public function delete(Product $deletedProduct, ManageProductRequest $request)
    {
        $this->products->forceDelete($deletedProduct);

        return redirect()->route('admin.showcase.product.deleted')->withFlashSuccess(trans('alerts.backend.products.deleted_permanently'));
    }

    /**
     * Восстановление файлов из корзины
     *
     * @param Product           $deletedProduct
     * @param ManageProductRequest $request
     *
     * @return mixed
     */
    public function restore(Product $deletedProduct, ManageProductRequest $request)
    {
        $this->products->restore($deletedProduct);

        return redirect()->route('admin.showcase.product.index')->withFlashSuccess(trans('alerts.backend.products.restored'));
    }


}