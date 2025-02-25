<?php

namespace App\Exceptions\Auth;

use App\Exceptions\BaseException;
use Exception;

class CredentialInvalid extends BaseException
{
    public function __construct()
    {
        parent::__construct("Category not found", 404);
    }
}
