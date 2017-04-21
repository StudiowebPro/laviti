<?php

namespace App\Models\Access\Product;

use App\Models\Access\Product\Traits\Attribute\ProductAttribute;
use App\Models\Access\Product\Traits\Scope\ProductScope;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use ProductScope,
        ProductAttribute;
//        ProductAccess,
//        Notifiable,
//        SoftDeletes,
//        UserAttribute,
//        UserRelationship,
//        UserSendPasswordReset;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'price', 'is_visible', 'is_available'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('access.products_table');
    }


}
