<?php
/**
 * Created by PhpStorm.
 * User: OldDev
 * Date: 19.04.2017
 * Time: 6:54
 */

namespace App\Http\Controllers\Backend\Showcase\Country;

use App\Http\Requests\Backend\Showcase\Country\ManageCountryRequest;
use App\Services\Backend\Showcase\Country\CountryService;
use App\Http\Controllers\Controller as BaseController;
use Yajra\Datatables\Facades\Datatables;

class CountryTableController extends BaseController
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
     * @param ManageCountryRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCountryRequest $request)
    {
        $res = Datatables::of($this->countryService->getForDataTable($request->get('is_visible'), $request->get('trashed')))
            ->escapeColumns(['id'])
            ->addColumn('img', function ($Country) {
                $mediaItem = $Country->getFirstMedia('images');
                if ($mediaItem) {
                    $vu = ('<img src="'.$mediaItem->getUrl('thumb150').'">');
                    return $vu;
                } else {
                    return '';
                }
            })
            ->addColumn('actions', function ($Country) {
                return $Country->action_buttons;
            })
            ->make(true);
        return $res;
    }
}