<?php

namespace App\Enums;

enum CategoryEnum: string
{
    case CATEGORY_01 = 'monitores';
    case CATEGORY_02 = 'procesadores';
    case CATEGORY_03 = 'fuente de poder';
    case CATEGORY_04 = 'placa madre';
    case CATEGORY_05 = 'tarjeta grafica';
    case CATEGORY_06 = 'memoria RAM';
    case CATEGORY_07 = 'almacenamiento';
    case CATEGORY_08 = 'refrigeración';
    case CATEGORY_09 = 'case';
    case CATEGORY_010 = 'teclado';
    case CATEGORY_011 = 'mouse';
    case CATEGORY_012 = 'audifono';
}
