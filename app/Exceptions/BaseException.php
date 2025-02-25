<?php

namespace App\Exceptions;

use Exception;

class BaseException extends Exception
{
    public function __construct(string $message = 'Error Server', int $code = 500)
    {
        parent::__construct($message, $code);
    }
}
