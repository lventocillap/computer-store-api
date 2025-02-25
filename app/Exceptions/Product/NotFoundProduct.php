<?php

namespace App\Exceptions\Product;

use App\Exceptions\BaseException;
use Exception;

class NotFoundProduct extends BaseException
{
    public function __construct()
    {
        parent::__construct("Product not found", 404);
    }
}
