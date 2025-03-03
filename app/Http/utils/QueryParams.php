<?php

declare(strict_types=1);

namespace App\Http\utils;

trait QueryParams
{
    public function param(string $name): ?string
    {
        if(isset($_GET[$name])){
            $param = $_GET[$name];
            return $param;
        }else{
            return null;
        }
    }
}