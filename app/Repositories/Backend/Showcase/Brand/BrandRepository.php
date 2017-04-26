<?php

namespace App\Repositories\Backend\Showcase\Brand;
use App\Models\Showcase\Brand\Brand;
use App\Repositories\Repository;
use DB;

class BrandRepository extends Repository
{

    /**
    * Configure the Model
    *
    **/
    public function model()
    {
        return Brand::class;
    }

    /**
     * @param bool $is_visible
     * @param bool $trashed
     *
     * @return mixed
     */
    public function getForDataTable($is_visible = true, $trashed = false)
    {
        /**
         * Note: You must return deleted_at or the Product getActionButtonsAttribute won't
         * be able to differentiate what buttons to show for each row.
         */
        $dataTableQuery = $this->query()
            ->select([
               'brands.name',
				'brands.country_id',
				'brands.is_visible',
				'brands.img',
        ]);
        if ($trashed == 'true') {
            return $dataTableQuery->onlyTrashed();
        }
    //  If need, possible add to Model (or standalone Scope file)
    //  Scope with query only visible select.
    //     visible() is a scope on the ProductScope trait
    //     return $dataTableQuery->visible($is_visible);
        return $dataTableQuery;
    }

    public function create($input)
    {

        $this->model->fill($input);
        if (isset($input['NewImgNames'])) {
            $NewImgNames = $input['NewImgNames'];
            $NewImgAlts = $input['NewImgAlts'];
            $NewImgTitles = $input['NewImgTitles'];
        }
        $brand = $this->model;
        DB::transaction(function () use ($input) {
            if ($this->model->save()) {
    //                event(new BrandCreated($this->model));
    //                $this->createMediaAssociation($Brand, $data);
                return true;
            }
            throw new GeneralException(trans('exceptions.backend.access.products.create_error'));
        });
    }

}
