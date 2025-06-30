<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Title
    |--------------------------------------------------------------------------
    |
    | These value defines a custom title to be displayed in various pages of the application.
    |
    */

    "address" => "Nigeria",
    "title" => "FAANG Dreams, Naija Roots",
    "facebookUrl" => "https://www.facebook.com/p/nigerians-at-faan/",
    "tiktokUrl" => "https://www.tiktok.com/@nigerians-at-faang",
    "twitterUrl" => "https://x.com/nigerians-at-faang/",
    "description" => "Nigerians @ FAANG is a platform celebrating the journeys, stories, and achievements of Nigerians working at top global tech companies like Facebook, Apple, Amazon, Netflix, Google, and more. Discover profiles, get inspired, and connect with excellence.",
    "keywords" => "Nigerians at FAANG, Nigerian tech talent, Nigerians in Big Tech, Nigerians at Facebook, Nigerians at Google, Nigerians at Apple, African tech diaspora, success stories, tech inspiration Nigeria, Nigerian engineers, FAANG directory, Nigerian developers, African tech success, Nigerians at big tech, Nigerians in FAANG",
    "author" => "Oyekola Toheeb",
    "instagramUrl" => "https://instgram.com/nigerians-at-faang/",
    "linkedInUrl" => "https://www.linkedin.com/company/nigerians-faang/",
    "githubUrl" => "https://github.com/To-heeb/nigerians-at-faang/",
    "contact_mail" => env('CONTACT_MAIL', 'contact@nigeriansatfaang.com'),
    "privacy_mail" => env('PRIVACY_MAIL', 'contact@nigeriansatfaang.com'),
    "support_number" => env('SUPPORT_NUMBER', '+2349052293405'),

];
