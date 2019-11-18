<?php


namespace Azonmedia\Payments\Interfaces;


interface CreditCardInterface extends CommandTargetInterface
{
    public function validate() : CommandResultInterface ;
}