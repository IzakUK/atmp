<?php

<<<<<<< HEAD
=======
use Illuminate\Support\Str;

>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | This option controls the default cache connection that gets used while
    | using this caching library. This connection is used when another is
    | not explicitly specified when executing a given caching function.
    |
    | Supported: "apc", "array", "database", "file", "memcached", "redis"
    |
    */

    'default' => env('CACHE_DRIVER', 'file'),
=======
    | This option controls the default cache store that will be used by the
    | framework. This connection is utilized if another isn't explicitly
    | specified when running a cache operation inside the application.
    |
    */

    'default' => env('CACHE_STORE', 'database'),
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores for the
    | same cache driver to group types of items stored in your caches.
    |
<<<<<<< HEAD
=======
    | Supported drivers: "array", "database", "file", "memcached",
    |                    "redis", "dynamodb", "octane", "null"
    |
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
    */

    'stores' => [

<<<<<<< HEAD
        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
=======
        'array' => [
            'driver' => 'array',
            'serialize' => false,
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
        ],

        'database' => [
            'driver' => 'database',
<<<<<<< HEAD
            'table' => 'cache',
            'connection' => null,
=======
            'connection' => env('DB_CACHE_CONNECTION'),
            'table' => env('DB_CACHE_TABLE', 'cache'),
            'lock_connection' => env('DB_CACHE_LOCK_CONNECTION'),
            'lock_table' => env('DB_CACHE_LOCK_TABLE'),
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
<<<<<<< HEAD
=======
            'lock_path' => storage_path('framework/cache/data'),
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
<<<<<<< HEAD
                // Memcached::OPT_CONNECT_TIMEOUT  => 2000,
=======
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
<<<<<<< HEAD
            'connection' => 'default',
=======
            'connection' => env('REDIS_CACHE_CONNECTION', 'cache'),
            'lock_connection' => env('REDIS_CACHE_LOCK_CONNECTION', 'default'),
        ],

        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        ],

        'octane' => [
            'driver' => 'octane',
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | When utilizing a RAM based store such as APC or Memcached, there might
    | be other applications utilizing the same cache. So, we'll specify a
    | value to get prefixed to all our keys so we can avoid collisions.
    |
    */

    'prefix' => env(
        'CACHE_PREFIX',
        str_slug(env('APP_NAME', 'laravel'), '_').'_cache'
    ),
=======
    | When utilizing the APC, database, memcached, Redis, and DynamoDB cache
    | stores, there might be other applications using the same cache. For
    | that reason, you may prefix every cache key to avoid collisions.
    |
    */

    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache_'),
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50

];
