<?php

namespace App\Enums;

enum ImageProductEnum: string
{
    case IMAGE_01 = 'https://computershopperu.com/728-large_default/procesador-intel-core-i5-12400f-250ghz-hasta-440ghz-18mb-10-core-lga1700-pnbx8071512400f.jpg';
    case IMAGE_02 = 'https://computershopperu.com/3946-large_default/procesador-amd-ryzen-5-5600g-390ghz-hasta-440ghz-16mb-6-core-am4-pn100-100000252box.jpg';
    case IMAGE_03 = 'https://computershopperu.com/562-large_default/tarjeta-de-video-asus-geforce-rtx-4060-8gb-gddr6-128bits-dual-oc-pn90yv0jc0-m0aa00.jpg';
    case IMAGE_04 = 'https://www.progear.ma/6392-tm_product_lg/msi-geforce-rtx-5070-ti-16g-vanguard-soc-launch-edition.jpg';
    
    public function type(): string
    {
        return 'App\Models\Product';
    }
    public function id(): int
    {
        return match($this){
            self::IMAGE_01 => 1,
            self::IMAGE_02 => 2,
            self::IMAGE_03 => 3,
            self::IMAGE_04 => 4
        };
    }
}
