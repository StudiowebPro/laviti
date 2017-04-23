<?php
/**
 * All route names are prefixed with 'admin.showcase'.
 */
Route::group([
    'prefix'     => 'showcase',
    'as'         => 'showcase.',
    'namespace'  => 'Showcase',
], function () {

        Route::group(['namespace' => 'Product'], function () {

            /**
             * Show deleted products table
             */
            Route::get('product/deleted', 'ProductStatusController@getDeleted')->name('product.deleted');

            /**
             * AJAX Request info for index-table
             */
            Route::post('product/get', 'ProductTableController')->name('product.get');

            /*
             * Permanently deleted ("clear Trash") and restore soft-deleted products
             */
            Route::group(['prefix' => 'product/{deletedProduct}'], function () {
                Route::get('delete', 'ProductStatusController@delete')->name('product.delete-permanently');
                Route::get('restore', 'ProductStatusController@restore')->name('product.restore');
            });

            //  Ресурс - контроллер CRUD
            //  Все метода ресурс-контроллера см. https://laravel.ru/docs/v5/controllers
            Route::resource('product', 'ProductController');

        });
});
