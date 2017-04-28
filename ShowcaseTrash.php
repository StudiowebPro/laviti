

/*
|--------------------------------------------------------------------------
| Brand routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Brand'],
    function () {

        Route::post('brand/get', 'BrandTableController')->name('brand.get');

        /**
        * Show deleted products table
        */
        Route::get('brand/deleted', 'BrandStatusController@getDeleted')->name('brand.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'brand/{deletedBrand}'],
            function () {
                Route::get('delete', 'BrandStatusController@forceDelete')->name('brand.delete-permanently');
                Route::get('restore', 'BrandStatusController@restore')->name('brand.restore');
            }
        );

        Route::resource('brand', 'BrandController');

    }
);
//=========================  END Brand routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Brand routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Brand'],
    function () {

        Route::post('brand/get', 'BrandTableController')->name('brand.get');

        /**
        * Show deleted products table
        */
        Route::get('brand/deleted', 'BrandStatusController@getDeleted')->name('brand.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'brand/{deletedBrand}'],
            function () {
                Route::get('delete', 'BrandStatusController@forceDelete')->name('brand.delete-permanently');
                Route::get('restore', 'BrandStatusController@restore')->name('brand.restore');
            }
        );

        Route::resource('brand', 'BrandController');

    }
);
//=========================  END Brand routes =====================================================

/*
|--------------------------------------------------------------------------
| Brand routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Brand'],
    function () {

        Route::post('brand/get', 'BrandTableController')->name('brand.get');

        /**
        * Show deleted products table
        */
        Route::get('brand/deleted', 'BrandStatusController@getDeleted')->name('brand.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'brand/{deletedBrand}'],
            function () {
                Route::get('delete', 'BrandStatusController@forceDelete')->name('brand.delete-permanently');
                Route::get('restore', 'BrandStatusController@restore')->name('brand.restore');
            }
        );

        Route::resource('brand', 'BrandController');

    }
);
//=========================  END Brand routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Country routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Country'],
    function () {

        Route::post('country/get', 'CountryTableController')->name('country.get');

        /**
        * Show deleted products table
        */
        Route::get('country/deleted', 'CountryStatusController@getDeleted')->name('country.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'country/{deletedCountry}'],
            function () {
                Route::get('delete', 'CountryStatusController@forceDelete')->name('country.delete-permanently');
                Route::get('restore', 'CountryStatusController@restore')->name('country.restore');
            }
        );

        Route::resource('country', 'CountryController');

    }
);
//=========================  END Country routes =====================================================

/*
|--------------------------------------------------------------------------
| Brand routes
|--------------------------------------------------------------------------
*/
Route::group(
    ['namespace' => 'Brand'],
    function () {

        Route::post('brand/get', 'BrandTableController')->name('brand.get');

        /**
        * Show deleted products table
        */
        Route::get('brand/deleted', 'BrandStatusController@getDeleted')->name('brand.deleted');

        /*
        * Permanently deleted ("clear Trash") and restore soft-deleted products
        */
        Route::group(
            ['prefix' => 'brand/{deletedBrand}'],
            function () {
                Route::get('delete', 'BrandStatusController@forceDelete')->name('brand.delete-permanently');
                Route::get('restore', 'BrandStatusController@restore')->name('brand.restore');
            }
        );

        Route::resource('brand', 'BrandController');

    }
);
//=========================  END Brand routes =====================================================