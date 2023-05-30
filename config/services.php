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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'stripe' => [
        'secret' => '',
    ],

    /**
     * Social media login
     */
    'github' => [
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'https://giget.da-shopping.com/auth/github/callback',
    ],
    'linkedin' => [    
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'https://giget.da-shopping.com/auth/linkedin/callback'
    ],
    'google' => [    
        'client_id'     => '898880989491-iejpudhdaoqk952qarusiaml8kop1nct.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect'      => 'https://giget.da-shopping.com/auth/google/callback'
    ],
    'facebook' => [    
        'client_id'     => '860862048390588',
        'client_secret' => 'f65aae6d60f0c42645ac8a2ebfa3dec6',
        'redirect'      => 'https://giget.da-shopping.com/auth/facebook/callback'
    ],
    'twitter' => [    
        'client_id'     => 'cFl2ZGpQSVVQWDFHRnZLdU5KaDA6MTpjaQ',
        'client_secret' => '42Nbhrzivlf7G475WEt4CG7dB1WsnzOYGiKElxUu--fOyW5W1p',
        'redirect'      => 'https://giget.da-shopping.com/auth/twitter/callback'
    ],

    // Email marketing
    'mailjet' => [
        'key'    => "",
        'secret' => "",
    ]

];
