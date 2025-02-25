<?php

namespace App\Exceptions\Auth;

use App\Exceptions\BaseException;
use Exception;

class UserNotFound extends BaseException
{
    public function __construct()
    {
        parent::__construct("User not found", 404);
    }
}
