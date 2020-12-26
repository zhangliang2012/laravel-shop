<?php
/**
 * Created by PhpStorm.
 * User: zhang liang
 * Date: 2020/12/19
 * Time: 18:24
 */
namespace App\Exceptions;

use Exception;

class BusinessException extends Exception
{
    public function __construct($message = "", $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
