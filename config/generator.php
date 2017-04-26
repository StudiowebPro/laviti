<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Controller
    |--------------------------------------------------------------------------
    |
    | This controller will be used as a base controller of all controllers
    |
    */

    'base_controller'          => 'App\Http\Controllers\Controller',

    /*
    |--------------------------------------------------------------------------
    | Path for classes
    |--------------------------------------------------------------------------
    |
    | All Classes will be created on these relevant path
    |
    */

    'path_migration'           => base_path('database/migrations/'),

    'path_model'               => app_path('Models/'),

    'path_attribute'           => app_path('Models/'),

    'path_repository'          => app_path('Repositories/'),

    'path_service'             => app_path('Services/'),

    'path_controller'          => app_path('Http/Controllers/'),

    'path_view'                => base_path('resources/views/'),

    'path_request'             => app_path('Http/Requests/'),

    'path_route'               => base_path('routes/Backend/Showcase.php'),

    'path_factory'             => base_path('database/factories/ModelFactory.php'),

    /*
    |--------------------------------------------------------------------------
    | Namespace for classes
    |--------------------------------------------------------------------------
    |
    | All Classes will be created with these namespaces
    |
    */

    'namespace_model'          => 'App\Models',

    'namespace_attribute'        => 'App\Models',

    'namespace_repository'     => 'App\Repositories',

    'namespace_service'        => 'App\Services',

    'namespace_controller'     => 'App\Http\Controllers',

    'namespace_request'        => 'App\Http\Requests',


    /*
    |--------------------------------------------------------------------------
    | Model extend
    |--------------------------------------------------------------------------
    |
    | Model extend Configuration.
    | By default Eloquent model will be used.
    | If you want to extend your own custom model 
    | then you can specify "model_extend" => true and "model_extend_namespace" & "model_extend_class".
    |
    | e.g.
    | 'model_extend' => true,
    | 'model_extend_namespace' => 'App\Models\AppBaseModel as AppBaseModel',
    | 'model_extend_class' => 'AppBaseModel',
    |
    */

    'model_extend_class'    => 'Illuminate\Database\Eloquent\Model',

    /*
     |--------------------------------------------------------------------------
     | View extend
     |--------------------------------------------------------------------------
     */
    'main_layout'           => 'backend.layouts.app',


    /*
    |--------------------------------------------------------------------------
    | Scaffold setting
    |--------------------------------------------------------------------------
    |
    | Application layers consist of :
    | 
    | Controllers - contains application logic and passing user input data to service
    | Services - The middleware between controller and repository, 
    | gather data from controller, performs validation and business logic, calling repositories for data manipulation.
    | Repositories - layer for interaction with models and performing DB operations
    | Eloquents - common laravel model files with relationships defined
    |
    | By default scaffold will automatically service and repository layer.
    | You also can setting to only create repository
    | Or if you want to only use Eloquent, you can set 2 below options is false.
    */
    'use_repository_layer'  => true,
    'use_service_layer'     => true,

    /**
     *  template package for different type tables. All templates
     *  must will placed to folder resources/generator-templates/PackageName
     *  "standart" - only base behavior for table
     *  "image"
     */
    'templatepackage'   => 'imageOnlyOne',
    // if true, generator make model for table with image collection
    // recommendation use templatepackage "image" for this type.
    'image'     =>  true,
    // if true, collection include many images, if false only one.
    'multiimg'  =>  true,  // Used only for "image" package
    // if true, to model add implementation for it and in cfg folder
    // default sizes for thumbnail you can change in model file
    // as default set make 3 thumbnails for each img with high 150px, 200px, 300px
    'thumbnails' => true,
    // if table has foreign key, generator make form and table with related data
    'fkey'       => true,

    //
    'package'   => 'Showcase',

    // In all paths for generated files will add prefix after all base paths and namespaces
    'package_path_prefix'        => 'Backend/',

    // In all paths for generated files will add prefix after all base paths and namespaces
    'package_namespace_prefix'   => '\Backend',


    // if false model will created in folder 'ModelsPath/Package', if true
    // in folder /ModelsPath/Prefix/Package.
    // as example for prefixes 'Backend' and 'Frontend' used same models...
    'use_prefix_for_model'  => false,

    'route_prefix'          => 'admin.showcase.',

    // prtfix for lang files
    'trans_prefix'          => 'backend.showcase',

    'view_prefix'          => 'backend',

    /*
    |--------------------------------------------------------------------------
    | Message
    |--------------------------------------------------------------------------
    */
    'message' => [
        'en' => [
            'store'     => ':model saved successfully.',
            'update'    => ':model updated successfully.',
            'delete'    => ':model deleted successfully.',
            'not_found' => ':model not found',
        ],
        'ja' => [
            'store'     => '新規登録が完了しました。',
            'update'    => '更新が完了しました。',
            'delete'    => '削除が完了しました。',
            'not_found' => 'この:modelが存在していません。',
        ]
    ]
];
