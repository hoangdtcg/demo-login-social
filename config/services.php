<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
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


    'google' => [

        'client_id' => '823978148508-klumnahd77d31om1inv8kd3span92t6k.apps.googleusercontent.com',

        'client_secret' => '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',

        'redirect' => 'http://127.0.0.1:8000/callback/google',

    ],
    'facebook' => [
        'client_id' => '2143899842435519',
        'client_secret' => 'd90ebfebfb0d987993993e3c52a862b4',
        'redirect' => 'http://127.0.0.1:8000/callback/facebook',
    ],

    'github' => [
        'client_id' => 'ef11792c378d56fde0d1',
        'client_secret' => 'c5ae1c58e49ce16ae095d12b061237fa455de974',
        'redirect' => 'http://127.0.0.1:8000/callback/github ',
    ],

];
