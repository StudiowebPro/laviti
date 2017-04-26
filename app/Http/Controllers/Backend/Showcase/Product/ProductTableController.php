<?php
/**
 * Created by PhpStorm.
 * User: OldDev
 * Date: 19.04.2017
 * Time: 6:54
 */

namespace app\Http\Controllers\Backend\Showcase\Product;

use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\Repositories\Backend\Showcase\Product\ProductRepository;
use App\Http\Requests\Backend\Showcase\Product\ManageProductRequest;

class ProductTableController extends Controller
{
    /**
     * @var ProductRepository
     */
    protected $products;

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
     * @return mixed
     */
    public function __invoke(ManageProductRequest $request)
    {
        $res = Datatables::of($this->products->getForDataTable($request->get('is_visible'), $request->get('trashed')))
            ->escapeColumns(['name', 'price'])
            ->editColumn('is_available', function ($product) {
                return $product->confirmed_label;
            })
//            ->addColumn('roles', function ($user) {
//                return $user->roles->count() ?
//                    implode('<br/>', $user->roles->pluck('name')->toArray()) :
//                    trans('labels.general.none');
//            })
            ->addColumn('img', function ($product) {
//                $mediaItems = $product->getMedia();
                $mediaItem = $product->getFirstMedia('images');
                if ($mediaItem) {
//                    $vp = $mediaItem->getUrl();
//                    $vu = asset(config('app.mediaurl').$mediaItem->file_name);
                    $vu = ('<img src="'.$mediaItem->getUrl('thumb150').'">');
                    return $vu;
                } else {
                    return 'wwww';
                }
            })
            ->addColumn('actions', function ($product) {
                $fff = $product->action_buttons;
                return $product->action_buttons;
            })
//            ->withTrashed()
            ->make(true);
        return $res;
    }
}