<?php

namespace App\Exceptions\Auth;

use App\Exceptions\BaseException;
use Exception;

class TokenNotFound extends BaseException
{
    public function __construct()
    {
        parent::__construct("Token not found", 404);
    }
}
