<?php

namespace App\Exceptions\Product;

use App\Exceptions\BaseException;
use Exception;

class LimitedStock extends BaseException
{
    public function __construct()
    {
        parent::__construct("Supera el limite de stock", 400);
    }
}
