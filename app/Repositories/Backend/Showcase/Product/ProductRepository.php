<?php
/**
 * Created by PhpStorm.
 * Product: OldDev
 * Date: 19.04.2017
 * Time: 4:41
 */

namespace App\Repositories\Backend\Showcase\Product;

use App\Models\Showcase\Product\Product;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use App\Events\Backend\Showcase\Product\ProductCreated;
use App\Events\Backend\Showcase\Product\ProductUpdated;
use App\Events\Backend\Showcase\Product\ProductDeleted;
use App\Events\Backend\Showcase\Product\ProductRestored;

/**
 * Class ProductRepository.
 */
class ProductRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Product::class;

//    public function __construct()
//    {
//        $v='ffff';
//        echo($v);
//    }

    /**
     * @param Model $product
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Model $product)
    {
        if (access()->id() == $product->id) {
            throw new GeneralException(trans('exceptions.backend.access.users.cant_delete_self'));
        }

        if ($product->delete()) {
            event(new ProductDeleted($product));

            return true;
        }

        throw new GeneralException(trans('exceptions.backend.access.users.delete_error'));
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
                config('access.products_table').'.id',
                config('access.products_table').'.name',
                config('access.products_table').'.price',
                config('access.products_table').'.is_visible',
                config('access.products_table').'.is_available',
                config('access.products_table').'.created_at',
                config('access.products_table').'.updated_at',
                config('access.products_table').'.deleted_at',
            ]);

        if ($trashed == 'true') {
            return $dataTableQuery->onlyTrashed();
        }

        // visible() is a scope on the ProductScope trait
        $v = $dataTableQuery->visible($is_visible);
        return $dataTableQuery->visible($is_visible);
    }

    /**
     * @param Model $input
     */
    public function create($input)
    {
        $data = $input['data'];
        $Product = self::MODEL;
        $product = new $Product();

        $product = $this->createProductStub($product, $data);
        DB::transaction(function () use ($product, $data) {
            if ($product->save()) {
                event(new ProductCreated($product));
                $this->createMediaAssociation($product, $data);
                return true;
            }
            throw new GeneralException(trans('exceptions.backend.access.products.create_error'));
        });
    }

    /**
     * @param Model $product
     * @param array $input
     *
     * @return bool
     * @throws GeneralException
     */
    public function update(Model $product, array $input)
    {
        $data = $input['data'];
        $product = $this->createProductStub($product, $data);
        $product = $this->updateMediaAttributes($product, $data);
        $product = $this->updateMediaAssociation($product, $data);
        $product = $this->createMediaAssociation($product, $data);
        DB::transaction(function () use ($product, $data) {
            if ($product->save()) {
                //For whatever reason this just wont work in the above call, so a second is needed for now
                event(new ProductUpdated($product));
                return true;
            }
            throw new GeneralException(trans('exceptions.backend.access.users.update_error'));
        });
    }


    protected function updateMediaAssociation($product,$input)
    {
        $oldImgNames = $input['oldImgNames'];
        $oldImgAlts = $input['oldImgAlts'];
        $oldImgTitles = $input['oldImgTitles'];
        $oldImgDeleted = $input['oldImgDeleted'];
        $oldImgId = $input['oldImgId'];
        if (count($oldImgId) > 0) {
            foreach ($oldImgId as $i => $oldId) {
                if ($oldImgDeleted[$i] == 1) {
                    $product->deleteMedia($oldId);
                }
            }
        }
        return $product;
    }

    protected function updateMediaAttributes($product,$input)
    {
//        $oldImgNames = $input['oldImgNames']; Резерв
        $oldImgAlts = $input['oldImgAlts'];
        $oldImgTitles = $input['oldImgTitles'];
        $oldImgId = $input['oldImgId'];
        $media=$product->getMedia('images');
        if (count($oldImgId) > 0) {
            foreach ($oldImgId as $i => $oldId) {
                  $media[$i]->setCustomProperty('alt', $oldImgAlts[$i]);
                  $media[$i]->name = $oldImgTitles[$i];
                  $media[$i]->save();
            }
        }
        return $product;
    }

    protected function createMediaAssociation($product,$input)
    {
        $newImgNames = $input['NewImgNames'];
        $newImgAlts = $input['NewImgAlts'];
        $NewImgTitles = $input['NewImgTitles'];
        if ($newImgNames) {
            foreach ($newImgNames as $i => $newImgName) {
                $product->addMedia(storage_path('app/public/temp/') . $newImgName)
                    ->preservingOriginal()
                    ->withCustomProperties(['alt' => $newImgAlts[$i]])
                    ->usingName($NewImgTitles[$i])
                    ->toMediaCollection('images');
            }
        }
        return $product;
    }

    /**
     * @param  $input
     *
     * @return mixed
     */
    protected function createProductStub($Product, $input)
    {
        $Product->name = $input['name'];
        $Product->price = $input['price'];
        $Product->category_id = $input['category_id'];
        $Product->brand_id = $input['brand_id'];
        $Product->country_id = $input['country_id'];
        $Product->mini_description = $input['mini_description'];
        $Product->middle_description = $input['middle_description'];
        $Product->description = $input['description'];
        $Product->material = $input['material'];
        $Product->main_img = $input['main_img'];
        $Product->is_available = $input['is_available'];
        $Product->is_visible = $input['is_visible'];
        $Product->is_homepage = $input['is_homepage'];
        $Product->seo_title = $input['seo_title'];
        $Product->seo_keywords = $input['seo_keywords'];
        $Product->seo_description = $input['seo_description'];
        $Product->is_new = $input['is_new'];
        $Product->is_sale = $input['is_sale'];
        $Product->price_sale = $input['price_sale'];
        $Product->is_action = $input['is_action'];
        $Product->price_action = $input['price_action'];
        $Product->is_bonus = $input['is_bonus'];
        $Product->sum_bonus = $input['sum_bonus'];
        $Product->action_id = $input['action_id'];
        $Product->bonusaction_id = $input['bonusaction_id'];
        $Product->is_leader = $input['is_leader'];
        $Product->collection_id = $input['collection_id'];
        $Product->is_collection_visible = $input['is_collection_visible'];
        return $Product;
    }


    /**
     * Restore Product, deleted by "Soft Deleted" method.
     *
     * @param Model $product
     *
     * @return bool
     * @throws GeneralException
     */
    public function restore(Model $product)
    {
        if (is_null($product->deleted_at)) {
            throw new GeneralException(trans('exceptions.backend.access.users.cant_restore'));
        }

        if ($product->restore()) {
            event(new ProductRestored($product));

            return true;
        }

        throw new GeneralException(trans('exceptions.backend.access.users.restore_error'));
    }


}
