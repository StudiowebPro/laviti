<?php
/**
 * Created by PhpStorm.
 * Product: OldDev
 * Date: 19.04.2017
 * Time: 4:41
 */

namespace App\Repositories\Backend\Access\Product;

use App\Models\Access\Product\Product;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use App\Events\Backend\Access\Product\ProductCreated;

use App\Repositories\Backend\Access\Role\RoleRepository;


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

        $Product = $this->createProductStub($data);
        DB::transaction(function () use ($Product, $data) {
            if ($Product->save()) {
                event(new ProductCreated($Product));
                return true;
            }
            throw new GeneralException(trans('exceptions.backend.access.products.create_error'));
        });
    }

    /**
     * @param  $input
     *
     * @return mixed
     */
    protected function createProductStub($input)
    {
        $Product = self::MODEL;
        $Product = new $Product();
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
}
