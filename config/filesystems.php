<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],
        'officers' => [
            'driver' => 'local',
            'root' => base_path() . '/public/images/officers/',
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public',
        ],
        'officers_militray_images' => [
            'driver' => 'local',
            'root' => base_path() . '/public/images/officers_militray_images/',
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public',
        ],
        'officers_id_images' => [
            'driver' => 'local',
            'root' => base_path() . '/public/images/officers_id_images/',
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public',
        ],
        'semi_officers' => [
            'driver' => 'local',
            'root' => base_path() . '/public/images/semi_officers/',
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public',
        ],
        'semi_officers_militray_images' => [
            'driver' => 'local',
            'root' => base_path() . '/public/images/semi_officers_militray_images/',
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public',
        ],
        'semi_officers_id_images' => [
            'driver' => 'local',
            'root' => base_path() . '/public/images/semi_officers_id_images/',
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public',
        ],
        'soliders' => [
            'driver' => 'local',
            'root' => base_path() . '/public/images/soliders/',
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public',
        ],
        'soliders_militray_images' => [
            'driver' => 'local',
            'root' => base_path() . '/public/images/soliders_militray_images/',
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public',
        ],
        'soliders_id_images' => [
            'driver' => 'local',
            'root' => base_path() . '/public/images/soliders_id_images/',
            'url' => env('APP_URL') . '/public',
            'visibility' => 'public',
        ],
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
