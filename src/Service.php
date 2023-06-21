<?php

namespace ThinkOmnipay;

use Omnipay\Common\GatewayFactory;

class Service extends \think\Service
{

    public function register()
    {
        $this->app->bind( 'omnipay',function ($app) {
            return new OmnipayManager( $app,new GatewayFactory );
        } );
    }

}