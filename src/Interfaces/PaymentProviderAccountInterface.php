<?php
declare(strict_types=1);

namespace Azonmedia\Payments\Interfaces;

/**
 * Interface PaymentProvierAccountInterface
 * @package Azonmedia\Payments\Interfaces
 * Represents an account with a payment provider
 */
interface PaymentProviderAccountInterface
{
    /**
     * May returrn get_id() if there is no name
     * @return mixed
     */
    public function get_name() /* string */ ;
    public function get_id() /* scalar */ ;
}