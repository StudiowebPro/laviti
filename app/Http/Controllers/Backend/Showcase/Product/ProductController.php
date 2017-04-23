<?php

namespace App\Http\Controllers\Backend\Showcase\Product;

use App\Models\Showcase\Product\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Showcase\Product\ManageProductRequest;
use App\Http\Requests\Backend\Showcase\Product\StoreProductRequest;
use App\Http\Requests\Backend\Showcase\Product\UpdateProductRequest;
use App\Repositories\Backend\Showcase\Product\ProductRepository;

// use Illuminate\Http\Request;


class ProductController extends Controller
{

    /**
     * @var ProductRepository
     */
    protected $products;
    protected $media;

    /**
     * @param ProductRepository $products
     */
    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }


    /**
     * @param ManageProductRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageProductRequest $request)
    {
        return view('backend.showcase.product.index');
    }

    /**
     * @param ManageProductRequest $request
     *
     * @return mixed
     */
    public function create(ManageProductRequest $request)
    {
//        return view('backend.access.create')
//            ->withRoles($this->roles->getAll());
        return view('backend.showcase.product.create');
    }

    /**
     * @param Product              $product
     * @param ManageProductRequest $request
     *
     * @return mixed
     */
    public function edit(Product $product, ManageProductRequest  $request)
    {
        $media=$product->getMedia('images');
        return view('backend.showcase.product.edit')
            ->withProduct($product)
            ->withMedia($media);
    }

    /**
     * @param Product              $product
     * @param UpdateProductRequest $request
     *
     * @return mixed
     */
    public function update(Product $product, UpdateProductRequest $request)
    {
        $this->products->update($product, ['data' => $request]);
        return redirect()->route('admin.showcase.product.index')->withFlashSuccess(trans('alerts.backend.products.updated'));
    }

    /**
     * @param StoreProductRequest $request
     *
     * @return mixed
     */
    public function store(StoreProductRequest $request)
    {
        $this->products->create(['data' => $request]);
        return redirect()->route('admin.showcase.product.index')->withFlashSuccess(trans('alerts.backend.products.created'));
    }

    /**
     * @param Product              $product
     * @param ManageProductRequest $request
     *
     * @return mixed
     */
    public function destroy(Product $product, ManageProductRequest $request)
    {
        $this->products->delete($product);

        return redirect()->route('admin.showcase.product.index')->withFlashSuccess(trans('alerts.backend.products.deleted'));
    }    
    

//    public function show($ability, $arguments = [])
//    {
//        var_dump('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
//    }


    /**
     *
     */
    public function ajaxupload()
    {
        return 'gg';
    }
}
