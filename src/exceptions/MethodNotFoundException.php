<?php
/**
 * Created by PhpStorm.
 * User: daviddiaz
 * Date: 27/9/15
 * Time: 11:06
 */

namespace FrontController\Exception;


use Exception;

class MethodNotFoundException extends \Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}