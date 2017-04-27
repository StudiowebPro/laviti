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
               'brands.id',
               'brands.name',
				'brands.country_id',
				'brands.is_visible',
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
                $this->deleteOldPhoto($record, $data);
                $this->createOnePhotoAssociation($record, $data);
                // event(new BrandCreated($this->model));
                return true;
            }
            throw new GeneralException(trans('exceptions.backend.access.products.create_error'));
        });
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

}
