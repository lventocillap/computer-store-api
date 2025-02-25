<?php

namespace App\Enums;

enum ProductEnum: string
{
    case PRODUCT_01 = 'Intel core i5 12400f';
    case PRODUCT_02 = 'Ryzen 5400g';
    case PRODUCT_03 = 'rtx 4060';
    case PRODUCT_04 = 'rtx 5070ti';

    public function brand(): string
    {
        return match ($this) {
            self::PRODUCT_01 => 'Intel',
            self::PRODUCT_02 => 'AMD',
            self::PRODUCT_03 => 'Asus',
            self::PRODUCT_04 => 'MSI'
        };
    }

    public function status(): string
    {
        return 'nuevo'; // Puedes cambiarlo según la lógica de tu aplicación
    }

    public function stock(): int
    {
        return match ($this) {
            self::PRODUCT_01 => 20,
            self::PRODUCT_02 => 15,
            self::PRODUCT_03 => 10,
            self::PRODUCT_04 => 5
        };
    }

    public function manufacturerInformationUrl(): string
    {
        return match ($this) {
            self::PRODUCT_01 => 'https://www.intel.com/core-i5-12400f',
            self::PRODUCT_02 => 'https://www.amd.com/ryzen-5400g',
            self::PRODUCT_03 => 'https://www.asus.com/rtx-4060',
            self::PRODUCT_04 => 'https://www.msi.com/rtx-5070ti'
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::PRODUCT_01 => 'Procesador Intel Core i5 de 12ª generación',
            self::PRODUCT_02 => 'Procesador Ryzen con gráficos integrados',
            self::PRODUCT_03 => 'Tarjeta gráfica NVIDIA RTX 4060',
            self::PRODUCT_04 => 'Tarjeta gráfica NVIDIA RTX 5070 Ti'
        };
    }

    public function price(): float
    {
        return match ($this) {
            self::PRODUCT_01 => 250.99,
            self::PRODUCT_02 => 199.99,
            self::PRODUCT_03 => 499.99,
            self::PRODUCT_04 => 799.99
        };
    }

    public function categoryId(): int
    {
        return match ($this) {
            self::PRODUCT_01, self::PRODUCT_02 => 2, // Categoría de procesadores
            self::PRODUCT_03, self::PRODUCT_04 => 5,  // Categoría de tarjetas gráficas
        };
    }
}
