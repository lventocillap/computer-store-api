<?php

namespace App\Exceptions\Auth;

use App\Exceptions\BaseException;
use Exception;

class TokenExpired extends BaseException
{
    public function __construct()
    {
        parent::__construct("Token expired", 404);
    }
}
