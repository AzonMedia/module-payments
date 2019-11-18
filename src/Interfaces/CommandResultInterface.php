<?php
declare(strict_types=1);

namespace Azonmedia\Payments\Interfaces;

/**
 * Interface CommandResultInterface
 * @package Azonmedia\Payments\Interfaces
 * Represents the result of the execution of a payment command (like charge())
 */
interface CommandResultInterface
{
    //public function __construct(string $command, array $result)

    public function get_command() : string ;

    public function get_exit_code() /* scalar */ ;

    public function get_exit_message() : string ;

    public function is_successful() : bool ;

    /**
     * Returns additional codes - for exmaple in Authorization it returns authorization id
     * @return mixed
     */
    public function get_additional_code() /* NULL|scalar */ ;

}