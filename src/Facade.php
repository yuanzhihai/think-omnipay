<?php

namespace yuan\ThinkOmnipay;

use Omnipay\Common\CreditCard;

class Facade extends \think\Facade
{
    /**
     * @param array $parameters
     * @return CreditCard
     */
    public static function creditCard($parameters = null)
    {
        return new CreditCard( $parameters );
    }

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeClass()
    {
        return 'omnipay';
    }
}