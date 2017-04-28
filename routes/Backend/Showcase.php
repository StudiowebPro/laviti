<?php

/**
 * AJAX Request info for index-table
 */

/**
 * All route names are prefixed with 'admin.showcase'.
 */
Route::group(
    [
        'prefix'    => 'showcase',
        'as'        => 'showcase.',
        'namespace' => 'Showcase',
    ],
    function () {

        Route::group(
            ['namespace' => 'Product'],
            function () {

                /**
                 * Show deleted products table
                 */
                Route::get('product/deleted', 'ProductStatusController@getDeleted')
                    ->name('product.deleted');

                /**
                 * AJAX Request info for index-table
                 */
                Route::post('product/get', 'ProductTableController')->name(
                    'product.get'
                );

                /*
                 * Permanently deleted ("clear Trash") and restore soft-deleted products
                 */
                Route::group(
                    ['prefix' => 'product/{deletedProduct}'],
                    function () {
                        Route::get('delete', 'ProductStatusController@delete')
                            ->name('product.delete-permanently');
                        Route::get('restore', 'ProductStatusController@restore')
                            ->name('product.restore');
                    }
                );

                //  Ресурс - контроллер CRUD
                //  Все метода ресурс-контроллера см. https://laravel.ru/docs/v5/controllers
                Route::resource('product', 'ProductController');

            }
        );


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
                        Route::get('delete', 'BrandStatusController@forceDelete')
                            ->name('brand.delete-permanently');
                        Route::get('restore', 'BrandStatusController@restore')
                            ->name('brand.restore');
                    }
                );

                /*
                |--------------------------------------------------------------------------
                | Brand routes
                |--------------------------------------------------------------------------
                */
                Route::resource('brand', 'BrandController');

            }
        );


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

    }
);


