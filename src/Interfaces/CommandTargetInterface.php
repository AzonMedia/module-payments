<?php


namespace Azonmedia\Payments\Interfaces;


interface CommandTargetInterface
{
    /**
     * This can be an account number or CC name (see CreditCardInterface that extends this one)
     * It may return INT from get_id() if there is no name.
     * @return scalar
     */
    public function get_name() /* scalar */;

    public function get_id() /* scalar */;
}