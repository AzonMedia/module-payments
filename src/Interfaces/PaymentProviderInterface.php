<?php

namespace Azonmedia\Payments\Interfaces;

interface PaymentProviderInterface
{
    //public function __construct(PaymentProviderAccountInterface $PaymentProvierAccount)

    /**
     * Returns the name of this payment provider
     * @return string
     */
    public static function get_name() : string ;

    public function get_account_info() : PaymentProviderAccountInterface ;

    public function authorize(float $amount, CommandTargetInterface $CommandTarget) : CommandResultInterface ;

    public function capture(/* scalar */ $authorization_code, CommandTargetInterface $CommandTarget) : CommandResultInterface;

    public function charge(float $amount, CommandTargetInterface $CommandTarget) : CommandResultInterface;

    public function refund(float $amount, /* scalar */ $payment_code) : CommandResultInterface;

    public function void( /*scalar */ $payment_code) : CommandResultInterface;

}