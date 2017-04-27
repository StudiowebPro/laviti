<?php

namespace App\Repositories\Backend\Showcase\Brand;
use App\Models\Showcase\Brand\Brand;
use App\Repositories\Repository;
use App\Exceptions\GeneralException;
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
               'brands.id',
				'brands.name',
				'brands.country_id',
				'brands.is_visible',
				'brands.created_at',
				'brands.updated_at',
				'brands.deleted_at',
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
        DB::transaction(function () use ($input) {
            if ($this->model->save()) {
                $this->createOnePhotoAssociation($this->model, $input);
    //                event(new BrandCreated($this->model));
                return true;
            }
            throw new GeneralException(trans('exceptions.backend.access.products.create_error'));
        });
    }

    /**
     *
     * @param array $data
     * @param string|int $id
     * @param string $attribute
     * @return mixed
     */
    public function update($id, $data, $attribute = 'id')
    {
        $record = $this->model->where($attribute, '=', $id)->first();
        $record ->fill($data);
        DB::transaction(function () use ($record ,$data) {
            if ($record->save()) {
                $this->updateMediaAttributes($record, $data);
                $this->deleteOldPhoto($record, $data);
                $this->createOnePhotoAssociation($record, $data);
                // event(new BrandCreated($this->model));
                return true;
            }
            throw new GeneralException(trans('exceptions.backend.access.products.create_error'));
        });
    }

    /**
     *  Update Alt and Title for old image
     * @param $record
     * @param $input
     */
    protected function updateMediaAttributes($record,$input)
    {
        if (isset($input['oldImgNames'])) {
            $media = $record->getMedia();
            $media[0]->setCustomProperty('alt', $input['oldImgAlts'][0]);
            $media[0]->name = $input['oldImgTitles'][0];
            $media[0]->save();
        }
    }


    /**
     * @param $record
     * @param $input
     */
    protected function deleteOldPhoto($record, $input){
        if (isset($input['oldImgNames'])) {
            if ($input['oldImgDeleted'][0] == 1) {
                $record->clearMediaCollection();
            }
        }
    }


    /**
     *
     * @param $input
     */
    protected function createOnePhotoAssociation($record, $input)
    {
        if (isset($input['NewImgNames'])) {
            $newImgNames = $input['NewImgNames'];
            $newImgAlts = $input['NewImgAlts'];
            $NewImgTitles = $input['NewImgTitles'];
            $record->clearMediaCollection();
            $record->addMedia(storage_path('app/public/temp/') . $newImgNames[0])
                ->preservingOriginal()
                ->withCustomProperties(['alt' => $newImgAlts[0]])
                ->usingName($NewImgTitles[0])
                ->toMediaCollection();
        }
    }

    /**
     * Restore Product, deleted by "Soft Deleted" method.
     *
     * @param Brand $brand
     *
     * @return bool
     * @throws GeneralException
     */
    public function restore(Brand $brand)
    {
        if (is_null($brand->deleted_at)) {
            throw new GeneralException(trans('exceptions.backend.showcase.brand.cant_restore'));
        }

        if ($brand->restore()) {
    //            event(new ProductRestored($brand));
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.showcase.brand.restore_error'));
    }

}
