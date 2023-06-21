<?php

namespace ThinkOmnipay;

use Omnipay\Common\GatewayFactory;

class Service extends \think\Service
{

    public function register()
    {
        $this->app->bind( 'omnipay',function () {
            return new OmnipayManager( $this->app,new GatewayFactory );
        } );
    }

}