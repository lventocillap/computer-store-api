<?php

namespace App\Enums;

enum UserEnum: string
{
    case USER_01 = 'luis';
    case USER_02 = 'esteban';
    case USER_03 = 'jared';

    public function password(): string
    {
        return match($this){
            self::USER_01 => 'luis123',
            self::USER_02 => 'esteban123',
            self::USER_03 => 'jared123',
        };
    }
    public function email(): string
    {
        return match($this){
            self::USER_01 => 'polintlvas@gmail.com',
            self::USER_02 => 'esteban@gmail.com',
            self::USER_03 => 'jaredgd2006@gmail.com',
        };
    }
    public function dni(): string
    {
        return match($this){
            self::USER_01 => '75678989',
            self::USER_02 => '12345678',
            self::USER_03 => '87456321'
        };
    }
    
    public function direcction(): string
    {
        return 'Senati Independencia';
    }
    public function cellphone(): string
    {
        return match($this){
            self::USER_01 => '994022932',
            self::USER_02 => '982675762',
            self::USER_03 => '945707294'
        };
    }
}
