<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id'     => '1351808858219638',
        'client_secret' => 'c0ab4e1dd86dcb91eff660a40fc96151',
        'redirect'      => 'http://glide.ezmart.in/social/login/facebook',
    ],
    'google'=> [
       'client_id'     => '1068463228284-t6a2dpugsim8ca0p2bbeip7et5g3ng2g.apps.googleusercontent.com',
        'client_secret' => '6MkGFwDPNIP7oLrLyMSLEij6',
        'redirect'      => 'http://glide.ezmart.in/social/login/google',
    ]
];
 