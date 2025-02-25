<?php

namespace App\Enums;

enum UserEnum: string
{
    case USER_01 = 'luis';
    case USER_02 = 'esteban';
    case USER_03 = 'jared';
    case USER_04 = 'marco';

    public function password(): string
    {
        return match($this){
            self::USER_01 => 'luis123',
            self::USER_02 => 'esteban123',
            self::USER_03 => 'jared123',
            self::USER_04 => 'marco123'
        };
    }
    public function email(): string
    {
        return match($this){
            self::USER_01 => 'luis@gmail.com',
            self::USER_02 => 'esteban@gmail.com',
            self::USER_03 => 'jared@gmail.com',
            self::USER_04 => 'marco@gmail.com'
        };
    }
}
