<?php 

/**
*  Model Brand table
*  Created by Laravel-Generator
*  Original:
*  Used fork:
*  https://github.com/StudiowebPro/laravel-generator
*
*  Ver 1.0.0
*
*/

namespace App\Models\Showcase\Brand;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use App\Models\Showcase\Brand\BrandAttribute;



class Brand extends Model implements HasMediaConversions
{

    use SoftDeletes,
        Notifiable,
        HasMediaTrait,
        BrandAttribute;
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "brands";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name',
		'country_id',
		'is_visible',
		'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
		'country_id' => 'integer',
		'is_visible' => 'boolean',
		'img' => 'string'
    ];


    /**
     * The attributes for SoftDelete.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'name' => 'string',
		'country_id' => 'integer',
		'img' => 'string'
    ];


    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('brands');
    }

    public function registerMediaConversions()
{
    $this->addMediaConversion('thumb150')
        ->width(150);

    $this->addMediaConversion('thumb175')
        ->width(175);

    $this->addMediaConversion('thumb200')
        ->width(200);
}

    public function products() {
		return $this->hasMany('App\Models\Product', 'brand_id', 'id');
	}

}
