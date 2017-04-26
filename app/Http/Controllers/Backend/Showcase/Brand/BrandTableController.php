<?php
/**
 * Created by PhpStorm.
 * User: OldDev
 * Date: 19.04.2017
 * Time: 6:54
 */

namespace App\Http\Controllers\Backend\Showcase\Brand;

use App\Http\Requests\Backend\Showcase\Brand\ManageBrandRequest;
use App\Services\Backend\Showcase\Brand\BrandService;
use App\Http\Controllers\Controller as BaseController;
use Yajra\Datatables\Facades\Datatables;

class BrandTableController extends BaseController
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
     * @param ManageBrandRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageBrandRequest $request)
    {
        $res = Datatables::of($this->brandService->getForDataTable($request->get('is_visible'), $request->get('trashed')))
            ->escapeColumns(['id'])
            ->addColumn('img', function ($Brand) {
                $mediaItem = $Brand->getFirstMedia('images');
                if ($mediaItem) {
                    $vu = ('<img src="'.$mediaItem->getUrl('thumb150').'">');
                    return $vu;
                } else {
                    return '';
                }
            })
            ->addColumn('actions', function ($Brand) {
                return $Brand->action_buttons;
            })
            ->make(true);
        return $res;
    }
}