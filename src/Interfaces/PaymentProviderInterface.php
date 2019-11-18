<?php
declare(strict_types=1);

namespace Azonmedia\Payments\Interfaces;

/**
 * Interface PaymentProviderInterface
 * @package Azonmedia\Payments\Interfaces
 * Represents the integration with a payment provider. Provides the methods for executing payments.
 */
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