<?php

namespace App\Exceptions\Product;

use App\Exceptions\BaseException;
use Exception;

class NotFoundCategory extends BaseException
{
    public function __construct()
    {
        parent::__construct("Category not found", 404);
    }
}
