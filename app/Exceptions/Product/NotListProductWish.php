<?php

namespace App\Exceptions\Product;

use App\Exceptions\BaseException;
use Exception;

class NotListProductWish extends BaseException
{
    public function __construct()
    {
        parent::__construct('Product not list', 404);
    }
}