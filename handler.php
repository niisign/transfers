<?php
/**
 * @author  Solomon Jonas Appiah
 * @version 1.0.0
 * @license MIT - PaySwitch Company Ltd
 */
class Transaction
{
    private $api_key;
    private $secret;
    private $context;
    private $pay_load;
    private $method;

    function __construct( $api_key, $secret, $context, $method )
    {
        $this->api_key  =   $api_key;
        $this->secret   =   $secret;
        $this->context  =   $context;
        $this->method   =   $method;
    }
}
