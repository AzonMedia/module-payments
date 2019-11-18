<?php
declare(strict_types=1);

namespace Azonmedia\Payments\Interfaces;

/**
 * Interface CreditCardInterface
 * @package Azonmedia\Payments\Interfaces
 * This is a CreditCard CommandTarget
 */
interface CreditCardInterface extends CommandTargetInterface
{
    public function validate() : CommandResultInterface ;
}