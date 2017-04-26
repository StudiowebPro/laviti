<?php

namespace App\Models\Showcase\Product;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Showcase\Product\Traits\Attribute\ProductAttribute;
use App\Models\Showcase\Product\Traits\Scope\ProductScope;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;


/**
 * Class Product
 *
 * @package App\Models\Showcase\Product
 */
class Product extends Model  implements HasMediaConversions
{
    use ProductScope,
        Notifiable,
        SoftDeletes,
        ProductAttribute,
        HasMediaTrait;

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
     * The attributes that are no mass assignable.
     *
     * @var array
     */
//    protected $guarded = ['id'];


    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'products';
    }

    /**
     *
     */
    public function registerMediaConversions()
    {
        $this->addMediaConversion('thumb150')
            ->width(150);

        $this->addMediaConversion('thumb175')
            ->width(175);

        $this->addMediaConversion('thumb200')
            ->width(200);

    }
}
