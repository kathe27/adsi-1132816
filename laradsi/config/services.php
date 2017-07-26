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
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('CALLBACK_URL'),
    ],
    'google' => [
        'client_id' => '647227625243-mjugelu3frmmlk00qap92kisg9b87evv.apps.googleusercontent.com',
        'client_secret' => '8rgpZ5ugpqOFHbhu9rHBfa2t',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'twitter' => [
        'client_id' => 'hP7UFBDYCL4GmBYmQoDCZG42r',
        'client_secret' => 'XnUoI06q9eFNSApgMLwdmuxyg4GKLjRKMJ6iuwRosXEhD4Bn2F',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

];
