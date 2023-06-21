<?php

namespace yuan\ThinkOmnipay;

use Omnipay\Common\CreditCard;


/**
 * @method  OmnipayManager setGateway()
 * @method  OmnipayManager getGateway()
 * @method  \Omnipay\Common\GatewayInterface purchase( array $options = array() )
 */
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