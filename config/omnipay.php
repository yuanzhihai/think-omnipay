<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Gateway
    |--------------------------------------------------------------------------
    |
    | Here you can specify the gateway that the facade should use by default.
    |
    */
    'gateway'  => env( 'OMNIPAY_GATEWAY','PayPal_Express' ),


    /*
    |--------------------------------------------------------------------------
    | Gateway specific settings
    |--------------------------------------------------------------------------
    |
    | Here you can specify gateway specific settings.
    |
    */
    'gateways' => [
        'paypal' => [
            'driver'  => 'PayPal_Express',
            'options' => [
                'username'    => env( 'OMNIPAY_PAYPAL_USERNAME' ),
                'landingPage' => ['billing','login'],
            ],
        ]
    ],

];