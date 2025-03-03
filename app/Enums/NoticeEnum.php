<?php

namespace App\Enums;

enum NoticeEnum: string
{   
    //titulo
    case Notice_01 = '';

    public function description(): string
    {
        return match($this){
            self::Notice_01 => '',
        };
    }
    public function imageUrl(): string
    {
        return match($this){
            self::Notice_01 => '',
        };
    }
}
