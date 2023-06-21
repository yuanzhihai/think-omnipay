Omnipay for Thinkphp
==============

[![Total Downloads](https://img.shields.io/packagist/dt/yzh52521/think-omnipay.svg)](https://packagist.org/packages/yzh52521/think-omnipay)
[![Latest Version](http://img.shields.io/packagist/v/yzh52521/think-omnipay.svg)](https://github.com/ignited/yzh52521/think-omnipay/releases)

Integrates the [Omnipay](https://github.com/adrianmacneil/omnipay) PHP library with Laravel to make Configuring multiple payment tunnels a breeze!

## Installation

Include the laravel-omnipay package as a dependency in your `composer.json`:

    composer require yzh52521/think-omnipay

**Note:** You don't need to include the `omnipay/common` in your composer.json - it has already been included `think-omnipay`.

### Install Required Providers

Now just include each gateway as you require, to included PayPal for example:

    composer require omnipay/paypal "3.*"

Alternatively you can include every gateway by the following:

    composer require omnipay/omnipay "3.*"

**Note:** this requires a large amount of composer work as it needs to fetch each seperate repository. This is not recommended.

## Configuration

#### PayPal Express Example
Here is an example of how to configure password, username and, signature with paypal express checkout driver

```php
...
'gateways' => [
    'paypal' => [
        'driver'  => 'PayPal_Express',
        'options' => [
            'username'  => 'coolusername',
            'password'  => 'strongpassword',
            'signature' => '',
            'solutionType' => '',
            'landingPage'    => '',
            'headerImageUrl' => '',
            'brandName' =>  'Your app name',
            'testMode' => true
        ]
    ],
]
...
```


## Usage

```php
$cardInput = [
	'number'      => '4444333322221111',
	'firstName'   => 'MR. WALTER WHITE',
	'expiryMonth' => '03',
	'expiryYear'  => '16',
	'cvv'         => '333',
];

$card = \ThinkOmnipay\Facade::creditCard($cardInput);

$response = \ThinkOmnipay\Facade::purchase([
	'amount'    => '100.00',
	'returnUrl' => 'http://bobjones.com/payment/return',
	'cancelUrl' => 'http://bobjones.com/payment/cancel',
	'card'      => $cardInput
])->send();

dd($response->getMessage());
```

This will use the gateway specified in the config as `default`.

However, you can also specify a gateway to use.

```php
\ThinkOmnipay\Facade::setGateway('paypal');

$response = \ThinkOmnipay\Facade::purchase([
	'amount' => '100.00',
	'card'   => $cardInput
])->send();

dd($response->getMessage());
```

In addition you can make an instance of the gateway.

```php
$gateway = \ThinkOmnipay\Facade::gatGateway('paypal');
```

## License
This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
