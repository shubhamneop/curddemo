<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
         /*
        'facebook' => [
       'client_id' => '1120224634748024', //Facebook API
       'client_secret' => '7303691d807eaff92bbb1657b96b1e', //Facebook Secret
       'redirect' => 'http://laravel.localhost/login/facebook/callback',
    ],

    
    'twitter' => [
       'client_id' => '',
       'client_secret' => '',
       'redirect' => 'http://127.0.0.1:8000/login/twitter/callback',
    ],

        
    */

      'github' => [
       'client_id' => 'da10286ae9662fa416b1',
       'client_secret' => '380cd64b7c0c982b9f5e8c3a6ef6082b6c1dfdcd',
       'redirect' => 'http://127.0.0.1:8000/login/github/callback',
    ],
];
