<?php

namespace App\Enums;

enum ProductEnum: string
{
    //id = 1 = monitores
    //id = 2 = procesadores
    //id = 3 = fuente de poder
    //id = 4 = placa madre
    //id = 5 = tarjeta grafica 
    //id = 6 = memoria RAM
    //id = 7 = almacenamiento
    //id = 8 = disipador
    //id = 9 = case
    //id = 10 = teclado
    //id = 11 = mouse
    //id = 12 = audifono 
    case PLACA_01 = 'PLACA MSI MAG X870E TOMAHAWK WIFI ATX DDR5 AMD AM5 (PN:911-7E59-002)';
    case PLACA_02 = 'PLACA MSI MPG X870E CARBON WIFI ATX DDR5 AMD AM5';
    case PLACA_03 = 'PLACA ASUS ROG STRIX Z890-F GAMING WIFI ATX DDR5 LGA 1851 (PN:90MB1I40-M0EAY0)';
    case PLACA_04 = 'PLACA GIGABYTE H470M H M.ATX DDR4 LGA 1200';
    case PLACA_05 = 'PLACA ASUS PRIME B760M-A AX M.ATX DDR5 LGA 1700 (PN:90MB1EI0-M0EAY0)';
    case PLACA_06 = 'PLACA GIGABYTE Z790 GAMING X AX ATX DDR5 LGA 1700';
    case PLACA_07 = 'PLACA MSI B560M PRO-E M.ATX DDR4 LGA 1200 (PN:911-7D22-074)';
    case PLACA_08 = 'PLACA B650 AORUS ELITE AX ICE ATX DDR5 AMD AM5';
    case PLACA_09 = 'PLACA ASROCK B650M-H/ M.2+ M.ATX DDR5 AMD AM5';
    case PLACA_10 = 'PLACA MSI PRO B760M-P M.ATX DDR4 LGA 1700 (PN:911-7E02-006)';
    case FUENTE_01 = 'FUENTE DE PODER MSI MAG A1250GL PCIE5 1250W BLACK 80 PLUS GOLD MODULAR';
    case FUENTE_02 = 'FUENTE DE PODER MSI MPG A1000G 1000W BLACK 80 PLUS GOLD MODULAR (PN:306-7ZP7C23-CE0)';
    case FUENTE_03 = 'FUENTE DE PODER ASUS ROG STRIX 750W BLACK 80 PLUS GOLD MODULAR (PN:90YE00A0-BMAA00)';
    case FUENTE_04 = 'FUENTE DE PODER ANTEC HCG1200 PRO 1200W 80 PLUS PLATINUM MODULAR';
    case FUENTE_05 = 'FUENTE DE PODER ASUS PRIME 750W WHITE 80 PLUS GOLD MODULAR (PN:90YE00U1-BVAA00)';
    case FUENTE_06 = 'FUENTE DE PODER ANTRYX B600 V3 600W ATX v2.31';
    case FUENTE_07 = 'FUENTE DE PODER COOLER MASTER MWE 550 V2 230V 550W 80 PLUS BRONZE';
    case FUENTE_08 = 'FUENTE DE PODER ANTEC HCG1000 PRO 1000W 80 PLUS PLATINUM MODULAR';
    case FUENTE_09 = 'FUENTE DE PODER COOLER MASTER GX II 850W 80 PLUS GOLD FULL MODULAR (PN:MPX-8503-AFAG-2BUS)';
    case FUENTE_10 = 'FUENTE DE PODER THERMALRIGHT TB 650W 80 PLUS BRONZE (PN:TR-TB650S)';
    //PROCESADORES INTEL
    case PRODUCT_05 = 'INTEL CORE ULTRA 7 265K';
    case PRODUCT_06 = 'INTEL CORE I7-14700K';
    case PRODUCT_07 = 'INTEL CORE ULTRA 5 245K';
    case PRODUCT_08 = 'INTEL CORE I5-14400F';
    case PRODUCT_09 = 'PROCESADOR INTEL CORE I5-13400F';
    //PROCESADORES AMD
    case PRODUCT_10 = 'AMD RYZEN 9 9950X';
    case PRODUCT_11 = 'AMD RYZEN 7 8700G';
    case PRODUCT_12 = 'AMD RYZEN 7 7700X';
    case PRODUCT_13 = 'AMD RYZEN 5 8600G';
    case PRODUCT_14 = 'AMD RYZEN 5 4500';
    //MONITORES
    case PRODUCT_15 = 'MONITOR TEROS TE-2401S 23.8"';
    case PRODUCT_16 = 'MONITOR XIAOMI GAMING G27i 27"';
    case PRODUCT_17 = 'MONITOR XIAOMI G27Qi 27"';
    case PRODUCT_18 = 'MONITOR ASUS TUF GAMING VG249Q1A 23.8"';
    case PRODUCT_19 = 'MONITOR GIGABYTE M27AQ ICE 27';
    case PRODUCT_20 = 'MONITOR MSI MAG 255XFV 24.5"';
    case PRODUCT_21 = 'MONITOR MSI MAG 276CXF 27"';
    case PRODUCT_22 = 'MONITOR MSI G27C4X CURVO 27"';
    case PRODUCT_23 = 'MONITOR ASUS ROG STRIX XG259QNS 24.5"';
    case PRODUCT_24 = 'MONITOR ASUS ROG STRIX XG27AQMR 27"';
    case GRAF_01 = 'TARJETA DE VIDEO MSI RADEON RX 6650 XT 4GB GDDR6 64BITS MECH 2X OC';
    case GRAF_02 = 'TARJETA DE VIDEO MSI GEFORCE RTX 3050 8GB GDDR6 128BITS VENTUS 2X OC';
    case GRAF_03 = 'TARJETA DE VIDEO MSI RADEON RX 6650 XT 8GB GDDR6 128BITS MECH 2X OC';
    case GRAF_04 = 'TARJETA DE VIDEO MSI GEFORCE RTX 3060 12GB GDDR6 192BITS VENTUS 2X OC';
    case GRAF_05 = 'TARJETA DE VIDEO XFX SPEEDSTER SWFT 210 AMD RADEON RX 6650 XT 8GB GDDR6 128BITS';
    case GRAF_06 = 'TARJETA DE VIDEO XFX SPEEDSTER QICK 319 AMD RADEON RX 7800 XT 16GB GDDR6 256BITS CORE EDITION';
    case GRAF_07 = 'TARJETA DE VIDEO ASUS GEFORCE RTX 3060Ti 8GB GDDR6 256BITS DUAL OC';
    case GRAF_08 = 'TARJETA DE VIDEO XFX SPEEDSTER SWFT 210 AMD RADEON RX 7600 XT 16GB GDDR6 128BITS';
    case GRAF_09 = 'TARJETA DE VIDEO ASUS GEFORCE RTX 4070 12GB GDDR6X 192BITS TUF GAMING';
    case GRAF_10 = 'TARJETA DE VIDEO ASUS GEFORCE RTX 4060 8GB GDDR6 128BITS DUAL EVO OC';
    //
    case RAM_01 = 'MEMORIA 16GB (8GBx2) DDR4 G.SKILL AEGIS BLACK BUS 3200MHZ';
    case RAM_02 = 'MEMORIA 96GB (48GBx2) DDR5 G.SKILL TRIDENT Z5 RGB BLACK BUS 6400MHZ';
    case RAM_03 = 'MEMORIA 8GB DDR4 KINGSTON FURY BEAST BLACK BUS 2666MHZ';
    case RAM_04 = 'MEMORIA 8GB DDR4 KINGSTON FURY BEAST RGB BLACK BUS 3200MHZ';
    case RAM_05 = 'MEMORIA 8GB DDR5 KINGSTON FURY BEAST RGB BLACK BUS 6000MHz';
    case RAM_06 = 'MEMORIA 8GB DDR4 CORSAIR VENGEANCE RGB RS BUS 3200MHz';
    case RAM_07 = 'MEMORIA 16GB DDR5 KINGSTON FURY BEAST RGB BLACK BUS 5200MHz';
    case RAM_08 = 'MEMORIA 8GB DDR4 CORSAIR VENGEANCE LPX BUS 3200MHz';
    case RAM_09 = 'MEMORIA 16GB DDR5 KINGSTON FURY BEAST RGB BLACK BUS 5600MHz';
    case RAM_10 = 'MEMORIA 8GB DDR4 T-FORCE VULCAN Z GRAY BUS 3200MHz';
    case CASE_01 = 'CASE ANTEC C8 CONSTELLATION BLACK SIN FUENTE VIDRIO TEMPLADO FULL TOWER (PN:0-761345-10019-9)';
    case CASE_02 = 'CASE ANTEC CX300 ELITE WHITE RGB SIN FUENTE VIDRIO TEMPLADO MID TOWER (PN:0-761345-10096-0)';
    case CASE_03 = 'CASE ANTEC CX800 ELITE BLACK RGB SIN FUENTE VIDRIO TEMPLADO MID TOWER (PN:0-761345-10058-8)';
    case CASE_04 = 'CASE DEEPCOOL CH560 DIGITAL WHITE ARGB SIN FUENTE VIDRIO TEMPLADO MID TOWER';
    case CASE_05 = 'CASE MSI MAG PANO 100L PZ WHITE SIN FUENTE VIDRIO TEMPLADO MID TOWER';
    case CASE_06 = 'CASE ASUS TUF GAMING GT302 ARGB BLACK SIN FUENTE VIDRIO TEMPLADO MID TOWER (PN:90DC00I0B18000)';
    case CASE_07 = 'CASE LIAN LI 011 DYNAMIC EVO BLACK RGB SIN FUENTE VIDRIO TEMPLADO MID TOWER (PN:011DERGBX)';
    case CASE_08 = 'CASE ASUS TUF GAMING GT502 WHITE SIN FUENTE VIDRIO TEMPLADO MID TOWER (PN:GT502/WHT/TG)';
    case CASE_09 = 'CASE DEEPCOOL MATREXX CK560 BLACK ARGB SIN FUENTE VIDRIO TEMPLADO MID TOWER (PN:R-CK560-BKAAE4-G-1)';
    case CASE_10 = 'CASE ANTRYX FX730 BLACK ARGB SIN FUENTE VIDRIO TEMPLADO MID TOWER (PN:AC-FX730K)';
    case TECL_01 = 'TECLADO ANTRYX MK ZIGRA EVO BLACK GRAY MECANICO RED SWITCH WIRED USB (PN:AMK-900KRE-SP)';
    case TECL_02 = 'TECLADO REDRAGON MITRA BLACK RGB MECANICO SWITCH RED WIRED USB (PN:K551RGB-1)';
    case TECL_03 = 'TECLADO ASUS ROG STRIX SCOPE RX XA05 RGB SWITCH RED MECANICO WIRED USB';
    case TECL_04 = 'TECLADO MACHENIKE K500F-B81 RGB MORADO SWITCH OUTEMOU CRYSTAL MECANICO WIRED USB';
    case TECL_05 = 'TECLADO MACHENIKE KT68-PRO RGB SMART SCREEN BLACK NORTH POLE SWITCH YELLOW MECANICO WIRELESS/BLUETOOTH/WIRED USB';
    case MOUS_01 = 'MOUSE ASUS ROG P707 SPATHA X BLACK RGB DPI 8000 CONECTIVIDAD WIRED USB/WIRELESS';
    case MOUS_02 = 'MOUSE ASUS TUF GAMING P309 M3 GEN II RGB DPI 8000 CONECTIVIDAD WIRED USB';
    case MOUS_03 = 'MOUSE MACHENIKE L8 PRO RGB BLACK DPI 26,000 CONECTIVIDAD WIRELESS/WIRED USB + BASE DE CARGA';
    case MOUS_04 = 'MOUSE LOGITECH G G502 X HERO BLACK DPI 25,600 CONECTIVIDAD USB (PN:910-006136)';
    case MOUS_05 = 'MOUSE LOGITECH G G502 HERO RGB BLACK DPI 25,600 CONECTIVIDAD WIRED USB';
    case MEMO_01 = 'SSD 2TB WESTERN DIGITAL SN850X BLACK NVMe M.2 2280 Pcie 4.0';
    case MEMO_02 = 'SSD 512GB HIKSEMI FUTURE ECO NVMe M.2 2280 Pcie GEN 4.0x4';
    case MEMO_03 = 'SSD 512GB LEXAR NM620 NVMe M.2 2280 Pcie GEN 3x4';
    case MEMO_04 = 'DISCO DURO PC 2TB SEAGATE BARRACUDA 64MB 7200RPM FORMATO 3.5" (PN:1ER164-021)';
    case MEMO_05 = 'SSD 1TB KINGSTON NV3 NVMe M.2 2280 Pcie 4.0 (PN:SNV3S/1000G)';
    // Disipador
    case DIS_01 = 'DEEPCOOL MYSTIQUE 360 ARGB BLACK COOLER CPU REFRIGERACION LIQUIDA COMPATIBLE AMD/INTEL (PN:R-LX750-BKADSNC-G-1)';
    case DIS_02 = 'ASUS ROG RYUJIN III 360 ARGB EXTREME BLACK COOLER CPU REFRIGERACION LIQUIDA COMPATIBLE AMD/INTEL (PN:90RC0131-M0AAY0)';
    case DIS_03 = 'ASUS ROG RYUJIN III 360 ARGB EXTREME WHITE COOLER CPU REFRIGERACION LIQUIDA COMPATIBLE AMD/INTEL (PN:90RC0132-M0AAY0)';
    case DIS_04 = 'ANTRYX TRITON VISION 360P BLACK ARGB COOLER CPU REFRIGERACION LIQUIDA COMPATIBLE AMD/INTEL';
    case DIS_05 = 'COOLER PARA CASE HYTE THICC FP12 120MM PACKx3 (PN:FAN-HYTE-FP12-BW-3)';
    case DIS_06 = 'HYTE THICC Q60 WHITE QRGB COOLER CPU REFRIGERACION LIQUIDA COMPATIBLE AMD/INTEL (PN:FAN-HYTE-Q60-BW)';
    case DIS_07 = 'COOLER PARA CASE ANTRYX LYNK FAN LF120 WHITE ARGB 120MM PACKx3 CON CONTROLADOR';
    case DIS_08 = 'KIT COOLER PARA CASE ANTRYX SPECTRUM 310 WHITE ARGB 120MM PACKx3 CON CONTROLADOR + CONTROL REMOTO';
    case DIS_09 = 'COOLER PARA CASE MSI MPG EZ120 BLACK ARGB 120MM PACKx3 CON CONTROLADOR';
    case DIS_10 = 'COOLER PARA CASE LIAN LI ST 120 WHITE ARGB 120MM PACKx3 CON CONTROLADOR (PN:ST120-3W)';
    // Audífonos
    case HEADPHONE_01 = 'AUDIFONO LOGITECH G G435 LIGHTSPEED AZUL FRAMBUESA CON MICROFONO WIRELESS';
    case HEADPHONE_02 = 'AUDIFONO MSI IMMERSE GH30 V2 BLACK CON MICROFONO CONEXIÓN 3.5MM (PN:S3721001-SV1)';
    case HEADPHONE_03 = 'AUDIFONO LOGITECH G G435 LIGHTSPEED BLACK CON MICROFONO WIRELESS (PN:981-001049)';
    case HEADPHONE_04 = 'AUDIFONO RAZER BLACKSHARK V2 X BLACK CON MICROFONO SONIDO 7.1 CONEXIÓN 3.5MM (PN:RZ04-03240100-R3U1)';
    case HEADPHONE_05 = 'AUDIFONO REDRAGON PANDORA BLACK RGB CON MICROFONO SONIDO 7.1 CONEXIÓN USB (PN:H350RGB)';

    public function brand(): string
    {
        return match ($this) {
            self::PLACA_01 => 'MSI',
            self::PLACA_02 => 'MSI',
            self::PLACA_03 => 'ASUS',
            self::PLACA_04 => 'GIGABYTE',
            self::PLACA_05 => 'ASUS',
            self::PLACA_06 => 'GIGABYTE',
            self::PLACA_07 => 'MSI',
            self::PLACA_08 => 'AORUS',
            self::PLACA_09 => 'ASROCK',
            self::PLACA_10 => 'MSI',
            self::FUENTE_01 => 'MSI',
            self::FUENTE_02 => 'MSI',
            self::FUENTE_03 => 'ASUS',
            self::FUENTE_04 => 'ANTEC',
            self::FUENTE_05 => 'ASUS',
            self::FUENTE_06 => 'ANTRYX',
            self::FUENTE_07 => 'COOLER MASTER',
            self::FUENTE_08 => 'ANTEC',
            self::FUENTE_09 => 'COOLER MASTER',
            self::FUENTE_10 => 'THERMALRIGHT ',
            //PROCESADORES INTEL
            self::PRODUCT_05 => 'Intel',
            self::PRODUCT_06 => 'Intel',
            self::PRODUCT_07 => 'Intel',
            self::PRODUCT_08 => 'Intel',
            self::PRODUCT_09 => 'Intel',
            //PROCESADORES AMD  
            self::PRODUCT_10 => 'AMD',
            self::PRODUCT_11 => 'AMD',
            self::PRODUCT_12 => 'AMD',
            self::PRODUCT_13 => 'AMD',
            self::PRODUCT_14 => 'AMD',
            //MONITORES
            self::PRODUCT_15 => 'Teros',
            self::PRODUCT_16 => 'Xiaomi',
            self::PRODUCT_17 => 'Asus',
            self::PRODUCT_18 => 'Xiaomi',
            self::PRODUCT_19 => 'Gigabyte',
            self::PRODUCT_20 => 'MSI',
            self::PRODUCT_21 => 'MSI',
            self::PRODUCT_22 => 'MSI',
            self::PRODUCT_23 => 'Asus',
            self::PRODUCT_24 => 'Asus',
            self::GRAF_01 => 'MSI',
            self::GRAF_02 => 'MSI',
            self::GRAF_03 => 'MSI',
            self::GRAF_04 => 'MSI',
            self::GRAF_05 => 'XFX',
            self::GRAF_06 => 'XFX',
            self::GRAF_07 => 'ASUS',
            self::GRAF_08 => 'XFX',
            self::GRAF_09 => 'ASUS',
            self::GRAF_10 => 'ASUS',
            //
            self::RAM_01 => 'G.SKILL',
            self::RAM_02 => 'G.SKILL',
            self::RAM_03 => 'KINGSTON FURY',
            self::RAM_04 => 'KINGSTON FURY',
            self::RAM_05 => 'KINGSTON FURY',
            self::RAM_06 => 'CORSAIR',
            self::RAM_07 => 'KINGSTON FURY',
            self::RAM_08 => 'CORSAIR',
            self::RAM_09 => 'KINGSTON FURY',
            self::RAM_10 => 'T-FORCE',
            self::CASE_01 => 'ANTEC',
            self::CASE_02 => 'ANTEC',
            self::CASE_03 => 'ANTEC',
            self::CASE_04 => 'DEEPCOOL',
            self::CASE_05 => 'MSI',
            self::CASE_06 => 'ASUS',
            self::CASE_07 => 'LIAN LI',
            self::CASE_08 => 'ASUS',
            self::CASE_09 => 'DEEPCOOL',
            self::CASE_10 => 'ANTRYX',
            self::TECL_01 => 'ANTRYX',
            self::TECL_02 => 'REDRAGON',
            self::TECL_03 => 'ASUS',
            self::TECL_04 => 'MACHENIKE',
            self::TECL_05 => 'MACHENIKE',
            self::MOUS_01 => 'ASUS',
            self::MOUS_02 => 'ASUS',
            self::MOUS_03 => 'MACHENIKE',
            self::MOUS_04 => 'LOGITECH G',
            self::MOUS_05 => 'LOGITECH G',
            self::MEMO_01 => 'WESTERN DIGITAL',
            self::MEMO_02 => 'HIKSEMI',
            self::MEMO_03 => 'LEXAR',
            self::MEMO_04 => 'SEAGATE',
            self::MEMO_05 => 'KINGSTON',
            self::DIS_01 => 'DEEPCOOL',
            self::DIS_02 => 'ASUS',
            self::DIS_03 => 'ASUS',
            self::DIS_04 => 'ANTRYX',
            self::DIS_05 => 'HYTE',
            self::DIS_06 => 'HYTE',
            self::DIS_07 => 'ANTRYX',
            self::DIS_08 => 'ANTRYX',
            self::DIS_09 => 'MSI',
            self::DIS_10 => 'LIAN LI',
            self::HEADPHONE_01 => 'LOGITECH G',
            self::HEADPHONE_02 => 'MSI',
            self::HEADPHONE_03 => 'LOGITECH G',
            self::HEADPHONE_04 => 'RAZER',
            self::HEADPHONE_05 => 'REDRAGON',
        };
    }

    public function status(): string //no se modifica
    {
        return 'nuevo'; // Puedes cambiarlo según la lógica de tu aplicación
    }

    public function stock(): int //no se modifica
    {
        return 10;
    }

    public function manufacturerInformationUrl(): string
    {
        return match ($this) {
            self::PLACA_01 => 'https://www.msi.com/Motherboard/MAG-X870E-TOMAHAWK-WIFI/Overview',
            self::PLACA_02 => 'https://www.msi.com/Motherboard/MPG-X870E-CARBON-WIFI/Overview',
            self::PLACA_03 => 'https://rog.asus.com/es/motherboards/rog-strix/rog-strix-z890-f-gaming-wifi/',
            self::PLACA_04 => 'https://www.gigabyte.com/pe/Motherboard/H470M-H-rev-10#kf',
            self::PLACA_05 => 'https://www.asus.com/us/motherboards-components/motherboards/prime/prime-b760m-a-ax/',
            self::PLACA_06 => 'https://www.gigabyte.com/es/Motherboard/Z790-GAMING-X-AX-rev-1x#kf',
            self::PLACA_07 => 'https://www.msi.com/Motherboard/B560M-PRO-E/Overview',
            self::PLACA_08 => 'https://www.gigabyte.com/pe/Motherboard/B650-AORUS-ELITE-AX-ICE#kf',
            self::PLACA_09 => 'https://www.asrock.com/MB/AMD/B650M-HM.2+/index.asp#Overview',
            self::PLACA_10 => 'https://latam.msi.com/Motherboard/PRO-B760M-P-DDR4/Overview',
            self::FUENTE_01 => 'https://es.msi.com/Power-Supply/MAG-A1250GL-PCIE5/Overview',
            self::FUENTE_02 => 'https://latam.msi.com/Power-Supply/MPG-A1000G/Overview',
            self::FUENTE_03 => 'https://rog.asus.com/latin/power-supply-units/rog-strix/rog-strix-750g-model/',
            self::FUENTE_04 => 'https://www.antec.com/product/power/hcg1200-pro-platinum-atx31',
            self::FUENTE_05 => 'https://www.asus.com/motherboards-components/power-supply-units/prime/ap-750g/',
            self::FUENTE_06 => 'https://www.antryx.com/producto/b600-v3/',
            self::FUENTE_07 => 'https://www.coolermaster.com/es-global/products/mwe-550-bronze-v2-230v/?tab=overview',
            self::FUENTE_08 => 'https://www.antec.com/product/power/hcg1000-pro-platinum-atx31',
            self::FUENTE_09 => 'https://www.coolermaster.com/en-global/products/gx-ii-gold-850/?tab=overview',
            self::FUENTE_10 => 'https://www.thermalright.com/product/tb-650s/',
            self::PRODUCT_05 => 'https://www.intel.la/content/www/xl/es/products/sku/241063/intel-core-ultra-7-processor-265k-30m-cache-up-to-5-50-ghz/specifications.html',
            self::PRODUCT_06 => 'https://www.intel.la/content/www/xl/es/products/sku/236783/intel-core-i7-processor-14700k-33m-cache-up-to-5-60-ghz/specifications.html',
            self::PRODUCT_07 => 'https://www.intel.la/content/www/xl/es/products/sku/241067/intel-core-ultra-5-processor-245k-24m-cache-up-to-5-20-ghz/specifications.html',
            self::PRODUCT_08 => 'https://www.intel.la/content/www/xl/es/products/sku/236777/intel-core-i5-processor-14400f-20m-cache-up-to-4-70-ghz/specifications.html',
            self::PRODUCT_09 => 'https://www.intel.la/content/www/xl/es/products/sku/230501/intel-core-i513400f-processor-20m-cache-up-to-4-60-ghz/specifications.html      ',
            //PROCESADORES AMD  
            self::PRODUCT_10 => 'https://www.amd.com/es/products/processors/desktops/ryzen/9000-series/amd-ryzen-9-9950x.html',
            self::PRODUCT_11 => 'https://www.amd.com/es/products/processors/desktops/ryzen/8000-series/amd-ryzen-7-8700g.html',
            self::PRODUCT_12 => 'https://www.amd.com/es/products/processors/desktops/ryzen/7000-series/amd-ryzen-7-7700x.html',
            self::PRODUCT_13 => 'https://www.amd.com/es/products/processors/desktops/ryzen/8000-series/amd-ryzen-5-8600g.html',
            self::PRODUCT_14 => 'https://www.amd.com/es/products/specifications/processors.html',
            //MONITORES
            self::PRODUCT_15 => 'https://www.teroslatinamerica.com/product/te-2401s/',
            self::PRODUCT_16 => 'https://www.intel.la/content/www/xl/es/products/sku/241063/intel-core-ultra-7-processor-265k-30m-cache-up-to-5-50-ghz/specifications.html',
            self::PRODUCT_17 => 'https://www.asus.com/latin/displays-desktops/monitors/tuf-gaming/tuf-gaming-vg249q1a/',
            self::PRODUCT_18 => 'https://www.mi.com/co/product/xiaomi-2k-gaming-monitor-g27qi/',
            self::PRODUCT_19 => 'https://www.gigabyte.com/pe/Monitor/M27QA-ICE#kf',
            self::PRODUCT_20 => 'https://www.msi.com/Monitor/MAG-255XFV/Overview',
            self::PRODUCT_21 => 'https://www.msi.com/Monitor/MAG-276CXF/Overview',
            self::PRODUCT_22 => 'https://latam.msi.com/Monitor/G27C4X/Overview',
            self::PRODUCT_23 => 'https://rog.asus.com/monitors/23-to-24-5-inches/rog-strix-xg259qns/',
            self::PRODUCT_24 => 'https://rog.asus.com/es/monitors/27-to-31-5-inches/rog-strix-xg27aqmr/',
            self::GRAF_01 => 'https://www.msi.com/Graphics-Card/Radeon-RX-6500-XT-MECH-2X-4G-OC/Overview',
            self::GRAF_02 => 'https://www.msi.com/Graphics-Card/GeForce-RTX-3050-VENTUS-2X-8G-OC/Overview',
            self::GRAF_03 => 'https://es.msi.com/Graphics-Card/Radeon-RX-6650-XT-MECH-2X-8G-OC/Overview',
            self::GRAF_04 => 'https://latam.msi.com/Graphics-Card/GeForce-RTX-3060-VENTUS-2X-12G-OC/Overview',
            self::GRAF_05 => 'https://www.xfxforce.com/shop/xfx-speedster-swft210-amd-radeon-tm-rx-6650-xt-core',
            self::GRAF_06 => 'https://www.xfxforce.com/shop/xfx-speedster-qick-319-radeon-tm-rx-7800-xt-core-edition',
            self::GRAF_07 => 'https://www.asus.com/latin/motherboards-components/graphics-cards/dual/dual-rtx3060ti-o8g/',
            self::GRAF_08 => 'https://www.xfxforce.com/shop/xfx-speedster-swft-210-amd-radeon-tm-rx-7600-xt#2',
            self::GRAF_09 => 'https://www.asus.com/latin/motherboards-components/graphics-cards/tuf-gaming/tuf-rtx4070-12g-gaming/',
            self:: GRAF_10 => 'https://www.asus.com/us/motherboards-components/graphics-cards/dual/dual-rtx4060-o8g-evo/',
            //
            self::RAM_01 => 'https://www.gskill.com/product/165/185/1567584549/F4-3200C16D-16GIS',
            self::RAM_02 => 'https://www.gskill.com/product/165/374/1681113538/F5-6400J3239F48GX2-TZ5RK',
            self::RAM_03 => 'https://www.kingston.com/latam/memory/gaming/kingston-fury-beast-ddr4-memory?speed=2666mt%2Fs&total%20(kit)%20capacity=8gb&kit=single%20module&dram%20density=8gbit',
            self::RAM_04 => 'https://www.kingston.com/datasheets/KF432C16BBA_8.pdf',
            self::RAM_05 => 'https://www.kingston.com/es/memory/gaming/kingston-fury-beast-ddr5-rgb-memory?speed=6000mt/s',
            self::RAM_06 => 'https://www.corsair.com/kr/es/p/memory/cmg8gx4m1e3200c16/vengeancea-rgb-rs-8gb-1-x-8gb-ddr4-dram-3200mhz-c16-memory-kit-cmg8gx4m1e3200c16?srsltid=AfmBOorBKyReIm0ajvn1OEBceUkAHdiFJ1PfP8cPiZoYX9qh8d3F-X9t#tab-overview',
            self::RAM_07 => 'https://www.kingston.com/es/memory/gaming/kingston-fury-beast-ddr5-rgb-memory?speed=6000mt/s',
            self::RAM_08 => 'https://www.corsair.com/es/es/p/memory/cmk8gx4m1z3200c16/vengeancea-lpx-8gb-1-x-8gb-ddr4-dram-3200mhz-c16-memory-kit-black-cmk8gx4m1z3200c16?srsltid=AfmBOopaYBQzIULZLhafW-WQT053XCeBvAX4gtxJXgXEtqjRaHrScZyo',
            self::RAM_09 => 'https://www.kingston.com/es/memory/gaming/kingston-fury-beast-ddr5-rgb-memory?speed=6000mt/s',
            self::RAM_10 => 'https://www.teamgroupinc.com/es/product-detail/memory/desktop/vulcan-z-ddr4-gray/vulcan-z-ddr4-gray-TLZGD48G3200HC16C01/',
            self::CASE_01 => 'https://www.antec.com/product/case/c8',
            self::CASE_02 => 'https://www.antec.com/documents/product/case-CX300_RGB_ELITE_Flyer_EN_240409.pdf',
            self::CASE_03 => 'https://antec.com/documents/product/case-CX800_RGB_ELITE_Flyer_EN_240426.pdf',
            self::CASE_04 => 'https://es.deepcool.com/products/Cases/CH560-DIGITAL-WH-Airflow-Case-With-Status-Screen/2023/17189.shtml',
            self::CASE_05 => 'https://mx.msi.com/PC-Case/MAG-PANO-100L-PZ/Overview',
            self::CASE_06 => 'https://www.asus.com/motherboards-components/cases/tuf-gaming/tuf-gaming-gt302-argb/',
            self::CASE_07 => 'https://lian-li.com/product/o11d-evo-rgb/',
            self::CASE_08 => 'https://www.asus.com/motherboards-components/cases/tuf-gaming/tuf-gaming-gt502/',
            self::CASE_09 => 'https://es.deepcool.com/products/Cases/CK560-Mid-Tower-ATX-Case-Airflow/2021/15062.shtml',
            self::CASE_10 => 'https://www.antryx.com/producto/fx730-black/',
            self::TECL_01 => 'https://www.antryx.com/producto/mk-zigra-evo/',
            self::TECL_02 => 'https://redragon.es/products/mitra-k551/',
            self::TECL_03 => 'https://rog.asus.com/latin/keyboards/keyboards/aura-rgb/rog-strix-scope-rx-model/ ',
            self::TECL_04 => 'https://global.machenike.com/products/k500f?variant=44909751009450',
            self::TECL_05 => 'https://global.machenike.com/es/products/kt68pro?srsltid=AfmBOooPSSuwB_u28SZjiIjwzYBbssOW-lBNEMed8sWgPbmUEDpjbRmF',
            self::MOUS_01 => 'https://rog.asus.com/es/mice-mouse-pads/mice/wireless/rog-spatha-x-model/',
            self::MOUS_02 => 'https://www.asus.com/es/accessories/mice-and-mouse-pads/tuf-gaming/asus-tuf-gaming-m3-gen-ii/',
            self::MOUS_03 => 'https://global.machenike.com/es/products/l8pro?variant=45398131048618',
            self::MOUS_04 => 'https://www.logitechg.com/es-roam/products/gaming-mice/g502-x-wired-lightforce.910-006136.html?srsltid=AfmBOoqNXLUPJVGeP2saIUCo6DAMf2UtVqVmVQAyASjPPfJ4EuzPPFGB',
            self::MOUS_05 => 'https://www.logitechg.com/es-roam/products/gaming-mice/g502-hero-gaming-mouse.910-005550.html?srsltid=AfmBOopNButqb6IvThmDT-25FE4OTIQppTXwJYLhvWrSf0Z4lJIhEpEJ',
            self::MEMO_01 => 'https://www.westerndigital.com/es-la/products/internal-drives/wd-purple-sata-hdd?sku=WD23PURZ',
            self::MEMO_02 => 'https://www.hiksemitech.com/en/hiksemi/all-products/solid-state-drive/hs-ssd-future-eco.html',
            self::MEMO_03 => 'https://americas.lexar.com/es/product/lexar-nm620-m-2-2280-nvme-ssd/',
            self::MEMO_04 => 'https://www.seagate.com/la/es/products/hard-drives/barracuda-hard-drive/',
            self::MEMO_05 => 'https://www.kingston.com/latam/ssd/nv3-nvme-pcie-ssd?capacity=1tb',
            self::DIS_01 => 'https://www.deepcool.com/Prevent.shtml?productname=MYSTIQUE360ARGB&url=https://www.deepcool.com/products/Cooling/cpuliquidcoolers/MYSTIQUE-360-ARGB-5th-Gen-LCD-Liquid-Cooler-1851-1700-AM5/2024/18771.shtml&randomInt=dHEzQg==',
            self::DIS_02 => 'https://rog.asus.com/es/cooling/cpu-liquid-coolers/rog-ryujin/rog-ryujin-iii-360-argb-extreme/',
            self::DIS_03 => 'https://rog.asus.com/pe/cooling/cpu-liquid-coolers/rog-ryujin/rog-ryujin-iii-360-argb-extreme-white-edition/',
            self::DIS_04 => 'https://www.antryx.com/producto/triton-vision-360p/',
            self::DIS_05 => 'https://hyte.com/store/thicc-fp12/fan-hyte-fp12-bw-3?zCountry=PE',
            self::DIS_06 => 'https://hyte.com/store/q60/fan-hyte-q60-bw?zCountry=PE',
            self::DIS_07 => 'https://www.antryx.com/producto/lynk-fan-lf120-3in1-set-white/',
            self::DIS_08 => 'https://www.antryx.com/producto/kit-argb-spectrum-310-white/',
            self::DIS_09 => 'https://latam.msi.com/PC-Component/MPG-EZ120-ARGB/Overview',
            self::DIS_10 => 'https://lian-li.com/product/st120/?cn-reloaded=1',
            self::HEADPHONE_01 => 'https://www.logitechg.com/es-es/products/gaming-audio/g435-wireless-bluetooth-gaming-headset.981-001050.html',
            self::HEADPHONE_02 => 'https://www.msi.com/Gaming-Gear/IMMERSE-GH30-V2/Overview',
            self::HEADPHONE_03 => 'https://www.logitechg.com/es-mx/products/gaming-audio/g435-wireless-bluetooth-gaming-headset.981-001049.html',
            self::HEADPHONE_04 => 'https://www.razer.com/latam-es/gaming-headsets/razer-blackshark-v2-x',
            self::HEADPHONE_05 => 'https://redragon.es/products/best-seller/pandora-h350/',
        };
    }
    public function description(): string
    {
        return match ($this) {
            self::PLACA_01 => 'SOCKET:AM5 Amd Ryzen Series 9000/8000/7000,MEMORIA:4x DIMM,Max.256GB,DDR5 8400(OC),REDES:Wi-Fi 7/Bluetooth® v5.4,AUDIO:Realtek® ALC4080 Codec/7.1-Channel USB High',
            self::PLACA_02 => 'SOCKET:AM5 Amd Ryzen Series 9000/8000/7000,MEMORIA:4x DIMM,Max.256GB,DDR5 8400(OC),REDES:Wi-Fi 7/Bluetooth® v5.4,AUDIO:Realtek® ALC4080 Codec/7.1-Channel USB High',
            self::PLACA_03 => 'SOCKET:Intel Socket LGA1851 para procesadores Intel Core Ultra (serie 2),MEMORIA:4 x DIMM,Max.192GB,DDR5 8600+MT/s (Oc),REDES:Intel Wi-Fi 7/Bluetooth® v5.4,AUDIO:ROG SupremeFX 7.1 Surround Sound High Definition Audio',
            self::PLACA_04 => 'SOCKET:Intel LGA 1200 11Va|10Ma Generación,MEMORIA:2 x DIMM|Max.64GB|DDR4 3200,ETHERNET:Realtek® GbE LAN chip (1 Gbps|100 Mbps),CONTROLADOR:iTE® I/O Controller Chip',            self::PLACA_05 => 'SOCKET:Intel LGA 1700 14va/13va/12va Generación,MEMORIA:4 x DIMM,Max.128GB,DDR5 7200+,REDES:Intel Wi-Fi 6 (802.11ax) integrado,PUERTOS:PCIe 4.0,02 M.2 slots',
            self::PLACA_06 => 'SOCKET:Intel LGA 1700 14Va/13Va/12Va Generación,MEMORIA:4 x DIMM,Max.256GB,DDR5 7600(OC),REDES:Wi-Fi 6E/Bluetooth® v5.3,ETHERNET:Realtek® 2.5GbE LAN chip (2.5 Gbps/1 Gbps/100 Mbps)',
            self::PLACA_07 => 'SOCKET:Intel LGA 1200 11Va/10Ma Generación,MEMORIA:2x DIMM,Max.64GB,DDR4 4800Mhz,ETHERNET:1x Intel® I219V 1Gbps LAN controller,AUDIO:Realtek® ALC892/ALC897 Codec',
            self::PLACA_08 => 'SOCKET:AM5 Amd Ryzen Series 9000/8000/7000,MEMORIA:4x DIMM,Max.256GB,DDR5 8000Mhz (OC),NETWORKS:2.5GbE LAN & Wi-Fi 6E,CONECTIVIDAD:HDMI,DP,Fronal USB-C® 20Gb/s,Rear USB-C® 10Gb/s',
            self::PLACA_09 => 'SOCKET:AM5 Amd Ryzen Series 9000/8000/7000,MEMORIA:2x DIMM,Max.128GB,DDR5 6400+(OC),RANURAS:1 PCIe 4.0 x16,2 PCIe 4.0 x1,1 M.2 Key E,GRÁFICOS:AMD RDNA™ 2 integrados',
            self::PLACA_10 => 'SOCKET:Intel LGA 1700 14Va/13Va/12Va Generación,MEMORIA:4 x DIMM,Max.128GB,DDR4 4800(OC),AUDIO:Realtek® ALC897 Codec,ETHERNET:Realtek® RTL8111H Gigabit LAN',
            
            self::FUENTE_01 => 'EFICIENCIA:80 Plus Gold,WATTS:1250w,RANGO ENTRADA:100-240 V,DIMENSIONES:150mm x 150mm x 86mm',
            self::FUENTE_02 => 'EFICIENCIA:80 Plus Gold,WATTS:1000w,RANGO ENTRADA:100-240 VAC,DIMENSIONES:150mm x 150mm x 86mm',
            self::FUENTE_03 => 'EFICIENCIA:80 Plus Gold,WATTS:750w,RANGO ENTRADA:100-240V,DIMENSIONES:160mm x 150mm x 86mm',
            self::FUENTE_04 => 'EFICIENCIA:80 Plus Platinum,WATTS:1200w,RANGO ENTRADA:100-240V,DIMENSIONES:140 x 150 x 86mm',
            self::FUENTE_05 => 'EFICIENCIA:80 Plus Gold,WATTS:750w,RANGO ENTRADA:100-240V,DIMENSIONES:150 x 150 x 86mm',
            self::FUENTE_06 => 'FACTOR:ATX V2.31,WATTS:600w,RANGO ENTRADA:200-240Vac,DIMENSIONES:150 x 140 x 86 mm',
            self::FUENTE_07 => 'EFICIENCIA:80 Plus Bronze,WATTS:550w,RANGO ENTRADA:200-240Vac,DIMENSIONES:140 x 150 x 86 mm',
            self::FUENTE_08 => 'EFICIENCIA:80 Plus Platinum,WATTS:1000w,RANGO ENTRADA:100-240V,DIMENSIONES:140 x 150 x 86mm',
            self::FUENTE_09 => 'EFICIENCIA:80 Plus Gold,WATTS:850w,RANGO ENTRADA:100-240V,DIMENSIONES:160 x 150 x 86mm',
            self::FUENTE_10 => 'EFICIENCIA:80 Plus Bronze,WATTS:650w,RANGO ENTRADA:100-240Vac,DIMENSIONES:150 x 140 x 86mm',

            self::PRODUCT_05 => 'FRECUENCIA BASE:3.90GHz,FRECUENCIA MÁXIMA:5.50GHz,NÚCLEOS:20,SOCKET:LGA1851',
            self::PRODUCT_06 => 'FRECUENCIA BASE:3.40GHz,FRECUENCIA MÁXIMA:5.60GHz,NÚCLEOS:20,SOCKET:LGA1700',
            self::PRODUCT_07 => 'FRECUENCIA BASE:4.20GHz,FRECUENCIA MÁXIMA:5.20GHz,NÚCLEOS:14,SOCKET:LGA1851',
            self::PRODUCT_08 => 'FRECUENCIA BASE:2.50GHz,FRECUENCIA MÁXIMA:4.70GHz,NÚCLEOS:10,SOCKET:LGA1700',
            self::PRODUCT_09 => 'FRECUENCIA BASE:2.50GHz,FRECUENCIA MÁXIMA:4.60GHz,NÚCLEOS:10,SOCKET:LGA1700',
            self::PRODUCT_10 => 'FRECUENCIA BASE:4.30GHz,FRECUENCIA MÁXIMA:5.70GHz,NÚCLEOS:16,SOCKET:AM5',
            self::PRODUCT_11 => 'FRECUENCIA BASE:4.20GHz,FRECUENCIA MÁXIMA:5.10GHz,NÚCLEOS:8,SOCKET:AM5',
            self::PRODUCT_12 => 'FRECUENCIA BASE:4.50GHz,FRECUENCIA MÁXIMA:5.40GHz,NÚCLEOS:8,SOCKET:AM5',
            self::PRODUCT_13 => 'FRECUENCIA BASE:4.30GHz,FRECUENCIA MÁXIMA:5.00GHz,NÚCLEOS:6,SOCKET:AM5',
            self::PRODUCT_14 => 'FRECUENCIA BASE:3.60GHz,FRECUENCIA MÁXIMA:4.10GHz,NÚCLEOS:6,SOCKET:AM4',

            self::PRODUCT_15 => 'RESPUESTA:5Ms,FRECUENCIA:100Hz,PUERTOS:HDMI x 1/VGA x 1,CERTIFICADO:Panel VA/AMD RADEON FreeSync',
            self::PRODUCT_16 => 'RESPUESTA:1Ms,FRECUENCIA:165Hz,PUERTOS:DisplayPort x 1/HDMI(v2.0) x 1/CC In cable x 1,CERTIFICADO:FAST IPS/AMD Freesync Premium',
            self::PRODUCT_17 => 'RESPUESTA:1Ms,FRECUENCIA:165Hz,PUERTOS:DisplayPort1.2 x1/HDMI (v1.4) x2,CERTIFICADO:IPS/FreeSync Premium/Adaptive Sync',
            self::PRODUCT_18 => 'RESPUESTA:1Ms,FRECUENCIA:180Hz,PUERTOS:DisplayPort x 2/HDMI x 2,CERTIFICADO:IPS/Amd Radeon Freesync',
            self::PRODUCT_19 => 'RESPUESTA:1Ms,FRECUENCIA:180Hz,PUERTOS:DisplayPort x 1/HDMI x 2/USB Type-C x 1,CERTIFICADO:SS IPS/Amd Radeon Freesync',
            self::PRODUCT_20 => 'RESPUESTA:0.5Ms,FRECUENCIA:250Hz,PUERTOS:HDMI(V2.0b) x 2/DP (V1.4) x 1,CERTIFICADO:Rapid VA/Adaptive Sync',
            self::PRODUCT_21 => 'RESPUESTA:0.5Ms,FRECUENCIA:280Hz,PUERTOS:HDMI(V2.0b) x 2/DP (V1.4) x 1,CERTIFICADO:Rapid VA/Adaptive Sync',
            self::PRODUCT_22 => 'RESPUESTA:1Ms,FRECUENCIA:250Hz,PUERTOS:DisplayPort 1.2 x 1/HDMI x 2,CERTIFICADO:VA/Freesync Premium',
            self::PRODUCT_23 => 'RESPUESTA:1Ms,FRECUENCIA:380Hz,PUERTOS:DisplayPort 1.4 x 1/HDMI (v2.0) x 2,CERTIFICADO:IPS/AMD FreeSync Premium/Adaptive Sync',
            self::PRODUCT_24 => 'RESPUESTA:1Ms,FRECUENCIA:300Hz,PUERTOS:DisplayPort 1.4 DSC x 1/HDMI (v2.0) x 2,CERTIFICADO:IPS/AMD Freesync Premium Pro/G-SYNC Compatible',

            self::GRAF_01 => 'MEMORIA:4GB GDDR6, INTERFAZ:64Bits, CUDA CORES:1024, INTERFAZ:PCI Express® Gen 4.0 ',
            self::GRAF_02 => 'MEMORIA:8GB GDDR6, INTERFAZ:128Bits, CUDA CORES:2560, INTERFAZ:PCI Express® Gen 4.0 x8',
            self::GRAF_03 => 'MEMORIA:8GB GDDR6, INTERFAZ:128Bits, CUDA CORES:2048, INTERFAZ:PCI Express® Gen 4.0 ',
            self::GRAF_04 => 'MEMORIA:12GB GDDR6, INTERFAZ:192Bits, CUDA CORES:1807, INTERFAZ:PCI Express® Gen 4.0 ',
            self::GRAF_05 => 'MEMORIA:8GB GDDR6, INTERFAZ:128Bits, CUDA CORES:2635, INTERFAZ:PCI Express® Gen 4.0 ',
            self::GRAF_06 => 'MEMORIA:16GB GDDR6, INTERFAZ:256Bits, CUDA CORES:2430Mhz, INTERFAZ:PCI Express® Gen 4.0 ',
            self::GRAF_07 => 'MEMORIA:8GB GDDR6, INTERFAZ:256Bits, CUDA CORES:4864, INTERFAZ:PCI Express® Gen 4.0 ',
            self::GRAF_08 => 'MEMORIA:16GB GDDR6, INTERFAZ:128Bits, CUDA CORES:2755 MHz, INTERFAZ:PCI Express® Gen 4.0 ',
            self::GRAF_09 => 'MEMORIA:12GB GDDR6X, INTERFAZ:192Bits, CUDA CORES:5888, INTERFAZ:PCI Express® Gen 4.0 ',
            self::GRAF_10 => 'MEMORIA:8GB GDDR6, INTERFAZ:128Bits, CUDA CORES:3072, INTERFAZ:PCI Express® Gen 4.0 ',
            //
            self::RAM_01 => 'CAPACIDAD:16GB (8GBx2), TIPO:DDR4, VELOCIDAD:3200MHz, LATENCIA:CL16',
            self::RAM_02 => 'CAPACIDAD:96GB (48GBx2), TIPO:DDR5, VELOCIDAD:6400MHz, ILUMINACIÓN:Led RGB',
            self::RAM_03 => 'CAPACIDAD:8GB, TIPO:DDR4, VELOCIDAD:2666MHz, LATENCIA:CL16',
            self::RAM_04 => 'CAPACIDAD:8GB, TIPO:DDR4, VELOCIDAD:3200MHz, LATENCIA:CL16',
            self::RAM_05 => 'CAPACIDAD:8GB, TIPO:DDR5, VELOCIDAD:6000MHz, TEMPERATURA:0 °C A 85 °C',
            self::RAM_06 => 'CAPACIDAD:8GB, TIPO:DDR4, VELOCIDAD:3200MHz, ILUMINACIÓN:LED RGB',
            self::RAM_07 => 'CAPACIDAD:16GB, TIPO:DDR5, VELOCIDAD:5200MHz, TEMPERATURA:0 °C A 85 °C',
            self::RAM_08 => 'CAPACIDAD:8GB, TIPO:DDR4, VELOCIDAD:3200MHz, PINES:288 PINES',
            self::RAM_09 => 'CAPACIDAD:16GB, TIPO:DDR5, VELOCIDAD:5600MHz, TEMPERATURA:0 °C A 85 °C',
            self::RAM_10 => 'CAPACIDAD:8GB, TIPO:DDR4, VELOCIDAD:3200MHz, LATENCIA:CL-16',

            self::CASE_01 => 'PANEL:Vidrio templado,EXPANSION:8 Slots,FUENTE PODER:No Incluye,PLACA MADRE:E-ATX/ATX/M-ATX/ITX',            self::CASE_02 => 'PANEL:Vidrio templado,EXPANSION:7 Slots,FUENTE PODER:No Incluye,PLACA MADRE:ATX,M-ATX,ITX',
            self::CASE_03 => 'PANEL:Vidrio templado,EXPANSION:6 Slots,FUENTE PODER:No Incluye,PLACA MADRE:ATX/M-ATX/ITX',
            self::CASE_04 => 'PANEL:Vidrio templado,COOLER:Iluminación Led ARGB,FUENTE PODER:No Incluye,PLACA MADRE:Mini-ITX/Micro-ATX/ATX/E-ATX',
            self::CASE_05 => 'PANEL:Vidrio Templado,EXPANSION:8 Slots,FUENTE PODER:No Incluye,PLACA MADRE:ATX/Micro-ATX/Mini-ITX',
            self::CASE_06 => 'PANEL:Vidrio templado,COOLER:Iluminación ARGB,FUENTE PODER:No Incluye,PLACA MADRE:EATX (12"x10.9")/ATX/Micro-ATX/Mini-ITX',
            self::CASE_07 => 'PANEL:Vidrio templado,COOLER:Cooler RGB,FUENTE PODER:No Incluye,PLACA MADRE:Mini-ITX/Micro-ATX/ATX/E-ATX',
            self::CASE_08 => 'PANEL:Vidrio templado,COOLER:No Incluye,FUENTE PODER:No Incluye,PLACA MADRE:Mini-ITX/Micro-ATX/ATX',
            self::CASE_09 => 'PANEL:Vidrio templado,COOLER:Iluminación Led ARGB,FUENTE PODER:No Incluye,PLACA MADRE:Mini-ITX/Micro-ATX/ATX/E-ATX',
            self::CASE_10 => 'PANEL:Vidrio templado,COOLER:Cooler ARGB,FUENTE PODER:No Incluye,PLACA MADRE:ATX/M-ATX/ITX',
            self::TECL_01 => 'ILUMINACIÓN:Luz Led RGB,INTERRUPTOR:Mecánico,CONEXIÓN:Wired Usb,COMPATIBLE:Windows XP/VISTA/7/8/10/11',
            self::TECL_02 => 'ILUMINACIÓN:RGB,TECLADO:Mecánico,TIPO:Switch Red,CONEXIÓN:Wired Usb',
            self::TECL_03 => 'ILUMINACIÓN:Led RGB,INTERRUPTOR:Mecánico,SWITCH:Red,CONEXIÓN:Wired Usb',
            self::TECL_04 => 'ILUMINACIÓN:RGB,INTERRUPTOR:Mecánico,SWITCH:Outemou Crystal,CONEXIÓN:Cable Usb',
            self::TECL_05 => 'ILUMINACIÓN:RGB,INTERRUPTOR:Mecánico,SWITCH:Yellow,CONEXIÓN:Wireless 2.4G,Bluetooth,Cable Usb',

            self::MOUS_01 => 'VELOCIDAD:400 IPS,DPI:19,000 dpi,ILUMINACIÓN:AURA SYNC,CONEXIÓN:Wired USB & Wireless',
            self::MOUS_02 => 'VELOCIDAD:200 IPS,DPI:8,000 dpi,ILUMINACIÓN:AURA SYNC,CONEXIÓN:Wired USB 2.0',
            self::MOUS_03 => 'ILUMINACIÓN:Led RGB,DPI:26,000 dpi,SENSOR:PAW 3395,CONEXIÓN:Wired/2.4GHz Wireless/Bluetooth 5.1',
            self::MOUS_04 => 'VELOCIDAD:>400 IPS,DPI:25,600 dpi,SENSOR:Hero 25K,CONEXIÓN:Wired USB',
            self::MOUS_05 => 'ILUMINACIÓN:Led RGB,DPI:25,600 dpi,SENSOR:Hero,CONEXIÓN:Wired Usb',
            self::MEMO_01 => 'CAPACIDAD:2TB,INTERFAZ:SATA 6.0 Gb/s,CACHE:64MB,DIMENSIONES:10.16cm x 14.70cm x 2.61cm',
            self::MEMO_02 => 'CAPACIDAD:2TB,FACTOR:M.2 2280,INTERFACE:NVMe PCIe Gen4 x4,DIMENSIONES:3.15" x 0.92" x 0.35"',
            self::MEMO_03 => 'CAPACIDAD:500GB,FACTOR:M.2 2280,INTERFACE:NVMe PCIe 3.0 x4,DIMENSIONES:8.00 x 2.20 x 0.24 cm',
            self::MEMO_04 => 'CAPACIDAD:2TB,INTERFAZ:SATA 6.0 Gb/s,CACHE:64MB,DIMENSIONES:10.16cm x 14.69cm x 2.02cm',
            self::MEMO_05 => 'CAPACIDAD:1TB,FACTOR:M.2 2280,INTERFACE:NVMe PCIe 4.0 x4,DIMENSIONES:22 mm x 80 mm x 2,3 mm',

            self::DIS_01 => 'ILUMINACIÓN:Led ARGB,RADIADOR:Aluminio,COMPATIBLE:AMD AM5/AM4,Intel LGA1851/1700/1200/1151/1150/1155',
            self::DIS_02 => 'ILUMINACIÓN:Led ARGB,RADIADOR:Aluminio,COMPATIBLE:AMD AM5/AM4,Intel LGA 1851,1700,1200,115x',
            self::DIS_03 => 'ILUMINACIÓN:Led ARGB,RADIADOR:Aluminio,COMPATIBLE:AMD AM5/AM4,Intel LGA 1851,1700,1200,115x',
            self::DIS_04 => 'ILUMINACIÓN:Led ARGB,RADIADOR:Aluminio,COMPATIBLE:AMD AM5/AM4,Intel LGA1700,1151,1150,1156,1155,1200,2011',
            self::DIS_05 => 'PRESIÓN:8,14 mm-H2O,DIMENSIONES:120 x 120 x 32 mm,VELOCIDAD:0 - 3,000 RPM,CONECTOR:Enlace Nexus Tipo-M',
            self::DIS_06 => 'ILUMINACIÓN:Led QRGB,VENTILADOR:0 - 3.000 RPM,COMPATIBLE:AMD AM5/AM4/TR4,Intel LGA 1851/1700/1200/115X/2011*/2066*',
            self::DIS_07 => 'ILUMINACIÓN:ARGB,DIMENSIONES:120 x 120 x 25 mm,VELOCIDAD:500-1500 rpm ±10 %,TIPO:Rodamiento Hidráulico',
            self::DIS_08 => 'ILUMINACIÓN:ARGB,DIMENSIONES:120 x 120 x 25 mm (3),VELOCIDAD:1200 rpm ±10 %,TIPO:Rodamiento Rifle',
            self::DIS_09 => 'ILUMINACIÓN:ARGB,DIMENSIONES:120 x 120 x 28 mm,CONEXIÓN:Magnetica,HUB:Fan Hub Incluido 4',
            self::DIS_10 => 'ILUMINACIÓN:ARGB,DIMENSIONES:120 x 120 x 25 mm,VELOCIDAD:~ 1900 RPM±10%,TIPO:Rodamiento fluidodinámico',
          // AUDIFONOS ID = 12
            self::HEADPHONE_01 => 'TRANSDUCTOR: 40mm,FRECUENCIA: 20 Hz - 20 kHz, RESPUESTA:	100Hz-8KHz, RADIO: 10 metros mediante receptor USB',
            self::HEADPHONE_02 => 'TRANSDUCTOR: 40mm, FRECUENCIA:	20 Hz - 20 kHz, MICRÓFONO: -36 dB ± 3 dB, PATRÓN: Unidireccional',
            self::HEADPHONE_03 => 'TRANSDUCTOR: 40mm, FRECUENCIA: 20 Hz - 20 kHz, RESPUESTA: 100Hz-8KHz, RADIO: 10 metros mediante receptor USB',
            self::HEADPHONE_04 => 'TRANSDUCTOR: 50mm, FRECUENCIA: 12 Hz - 28 kHz, SONIDO: Envolvente, MICRÓFONO: Cardioide',
            self::HEADPHONE_05 => 'TRANSDUCTOR: 50mm, FRECUENCIA: 20 Hz - 20 kHz, MICRÓFONO: Unidireccional, ILUMINACIÓN: Led RGB',
        };
    }

    public function price(): float
    {
        return match ($this) {
            self::PLACA_01 => 1502.08,
            self::PLACA_02 => 2383.69,
            self::PLACA_03 => 2013.84,
            self::PLACA_04 => 271.36,
            self::PLACA_05 => 616.15,
            self::PLACA_06 => 1158.47,
            self::PLACA_07 => 296.49,
            self::PLACA_08 => 911.06,
            self::PLACA_09 => 506.58,
            self::PLACA_10 => 422.39,
            self::FUENTE_01 => 986.66,
            self::FUENTE_02 => 815.64,
            self::FUENTE_03 => 535.25,
            self::FUENTE_04 => 1044.58,
            self::FUENTE_05 => 431.38,
            self::FUENTE_06 => 129.39,
            self::FUENTE_07 => 223.84,
            self::FUENTE_08 => 922.85,
            self::FUENTE_09 => 459.07,
            self::FUENTE_10 => 231.69, 
            //PROCESADORES INTEL
            self::PRODUCT_05 => 1888.00,
            self::PRODUCT_06 => 1739.00,
            self::PRODUCT_07 => 1739.00,
            self::PRODUCT_08 => 729.00,
            self::PRODUCT_09 => 723.00,
            //PROCESADORES AMD  
            self::PRODUCT_10 => 2919.00,
            self::PRODUCT_11 => 1219.00,
            self::PRODUCT_12 => 1308.00,
            self::PRODUCT_13 => 811.00,
            self::PRODUCT_14 => 317.00,
            //MONITORES
            self::PRODUCT_15 => 258.00,
            self::PRODUCT_16 => 471.00,
            self::PRODUCT_17 => 619.00,
            self::PRODUCT_18 => 665.00,
            self::PRODUCT_19 => 1215.00,
            self::PRODUCT_20 => 566.00,
            self::PRODUCT_21 => 702.00,
            self::PRODUCT_22 => 661.00,
            self::PRODUCT_23 => 2048.00,
            self::PRODUCT_24 => 2879.00,
            self::GRAF_01 => 545.48,
            self::GRAF_02 => 948.09,
            self::GRAF_03 => 1104.50,
            self::GRAF_04 => 1230.46,
            self::GRAF_05 => 1054.68,
            self::GRAF_06 => 2350.70,
            self::GRAF_07 => 1161.27,
            self::GRAF_08 => 1496.94,
            self::GRAF_09 => 2891.02,
            self::GRAF_10 => 1815.77,
            //
            self::RAM_01 => 169.05,
            self::RAM_02 => 1830.99,
            self::RAM_03 => 97.24,
            self::RAM_04 => 77.79,
            self::RAM_05 => 190.74,
            self::RAM_06 => 100.98,
            self::RAM_07 => 280.50,
            self::RAM_08 => 97.24,
            self::RAM_09 => 284.24,
            self::RAM_10 => 86.02,
            self::CASE_01 => 425.99,
            self::CASE_02 => 205.70,
            self::CASE_03 => 224.40,
            self::CASE_04 => 385.22,
            self::CASE_05 => 527.34,
            self::CASE_06 => 708.73,
            self::CASE_07 => 723.69,
            self::CASE_08 => 785.40,
            self::CASE_09 => 391.65,
            self::CASE_10 => 317.64,
            self::TECL_01 => 178.59,
            self::TECL_02 => 197.70,
            self::TECL_03 => 486.16,
            self::TECL_04 => 296.81,
            self::TECL_05 => 688.16,
            self::MOUS_01 => 568.48,
            self::MOUS_02 => 111.83,
            self::MOUS_03 => 296.81,
            self::MOUS_04 => 523.30,
            self::MOUS_05 => 187.11,
            self::MEMO_01 => 252.50,
            self::MEMO_02 => 650.76,
            self::MEMO_03 => 127.12,
            self::MEMO_04 => 252.60,
            self::MEMO_05 => 226.27,
            self::DIS_01 => 756.56,
            self::DIS_02 => 1791.46,
            self::DIS_03 => 1791.46,
            self::DIS_04 => 531.08,
            self::DIS_05 => 323.62,
            self::DIS_06 => 1185.58,
            self::DIS_07 => 102.85,
            self::DIS_08 => 99.11,
            self::DIS_09 => 381.48,
            self::DIS_10 => 186.63,
            self::HEADPHONE_01 => 94.62,
            self::HEADPHONE_02 => 93.50,
            self::HEADPHONE_03 => 250.58,
            self::HEADPHONE_04 => 131.27,
            self::HEADPHONE_05 => 147.80,

        };
    }
    public function imgageUrl(): string
    {
        return match($this){
            self::PLACA_01 => 'https://computershopperu.com/4026-medium_default/placa-msi-mag-x870e-tomahawk-wifi-atx-ddr5-amd-am5-pn911-7e59-002.jpg',
            self::PLACA_02 => 'https://computershopperu.com/3996-medium_default/placa-msi-mpg-x870e-carbon-wifi-atx-ddr5-amd-am5-.jpg',
            self::PLACA_03 => 'https://computershopperu.com/2606-medium_default/placa-asus-rog-strix-z890-f-gaming-wifi-atx-ddr5-lga-1851-pn90mb1i40-m0eay0.jpg',
            self::PLACA_04 => 'https://computershopperu.com/1008-medium_default/placa-gigabyte-h470m-h-matx-ddr4-lga-1200-.jpg',
            self::PLACA_05 => 'https://computershopperu.com/650-medium_default/placa-asus-prime-b760m-a-ax-matx-ddr5-lga-1700-pn90mb1ei0-m0eay0.jpg',
            self::PLACA_06 => 'https://computershopperu.com/943-medium_default/placa-gigabyte-z790-gaming-x-ax-atx-ddr5-lga-1700-.jpg',
            self::PLACA_07 => 'https://computershopperu.com/1019-medium_default/placa-msi-b560m-pro-e-matx-ddr4-lga-1200-pn911-7d22-074.jpg',
            self::PLACA_08 => 'https://computershopperu.com/1952-medium_default/placa-b650-aorus-elite-ax-ice-atx-ddr5-amd-am5.jpg',
            self::PLACA_09 => 'https://computershopperu.com/2059-medium_default/placa-asrock-b650m-h-m2-matx-ddr5-amd-am5.jpg',
            self::PLACA_10 => 'https://computershopperu.com/979-medium_default/placa-msi-pro-b760m-p-matx-ddr4-lga-1700-pn911-7e02-006.jpg',
            self::FUENTE_01 => 'https://computershopperu.com/4043-medium_default/fuente-de-poder-msi-mag-a1250gl-pcie5-1250w-black-80-plus-gold-modular-.jpg',
            self::FUENTE_02 => 'https://computershopperu.com/4038-medium_default/fuente-de-poder-msi-mpg-a1000g-1000w-black-80-plus-gold-modular-pn306-7zp7c23-ce0.jpg',
            self::FUENTE_03 => 'https://computershopperu.com/4014-medium_default/fuente-de-poder-asus-rog-strix-750w-black-80-plus-gold-modular-pn90ye00a0-bmaa00.jpg',
            self::FUENTE_04 => 'https://computershopperu.com/3948-medium_default/fuente-de-poder-antec-hcg1200-pro-1200w-80-plus-platinum-modular-.jpg',
            self::FUENTE_05 => 'https://computershopperu.com/3958-medium_default/fuente-de-poder-asus-prime-750w-white-80-plus-gold-modular-pn90ye00u1-bvaa00.jpg',
            self::FUENTE_06 => 'https://computershopperu.com/3633-medium_default/fuente-de-poder-antryx-b600-v3-600w-atx-v231.jpg',
            self::FUENTE_07 => 'https://computershopperu.com/3320-medium_default/fuente-de-poder-cooler-master-mwe-550-v2-230v-550w-80-plus-bronze-.jpg',
            self::FUENTE_08 => 'https://computershopperu.com/3953-medium_default/fuente-de-poder-antec-hcg1000-pro-1000w-80-plus-platinum-modular-.jpg',
            self::FUENTE_09 => 'https://computershopperu.com/2088-medium_default/fuente-de-poder-cooler-master-gx-ii-850w-80-plus-gold-full-modular-pnmpx-8503-afag-2bus.jpg',
            self::FUENTE_10 => 'https://computershopperu.com/2107-medium_default/fuente-de-poder-thermalright-tb-650w-80-plus-bronze-pntr-tb650s.jpg',
            //PROCESADORES INTEL
            self::PRODUCT_05 => 'https://computershopperu.com/2504-large_default/procesador-intel-core-ultra-7-265k-390ghz-hasta-550ghz-30mb-20-core-lga1851-pnbx80768265k.jpg',
            self::PRODUCT_06 => 'https://computershopperu.com/1901-large_default/procesador-intel-core-i7-14700k-340ghz-hasta-560ghz-33mb-20-core-lga1700-pnbx8071514700k.jpg',
            self::PRODUCT_07 => 'https://computershopperu.com/2505-large_default/procesador-intel-core-ultra-5-245k-420ghz-hasta-520ghz-24mb-14-core-lga1851-pnbx80768245k.jpg',
            self::PRODUCT_08 => 'https://computershopperu.com/707-large_default/procesador-intel-core-i5-14400f-250ghz-hasta-470ghz-20mb-10-core-lga1700-pnbx8071514400f.jpg',
            self::PRODUCT_09 => 'https://computershopperu.com/1902-large_default/procesador-intel-core-i5-13400f-250ghz-hasta-460ghz-20mb-10-core-lga1700-pnbx8071513400f.jpg',
            //PROCESADORES AMD 
            self::PRODUCT_10 => 'https://computershopperu.com/2206-large_default/procesador-amd-ryzen-9-9950x-430ghz-hasta-570ghz-80mb-16-core-am5-pn100-100001277w0f.jpg',
            self::PRODUCT_11 => 'https://computershopperu.com/710-large_default/procesador-amd-ryzen-7-7700x-450ghz-hasta-540ghz-32mb-8-core-am5-pn100-100000591wof.jpg',
            self::PRODUCT_12 => 'https://computershopperu.com/708-large_default/procesador-amd-ryzen-7-8700g-420ghz-hasta-510ghz-16mb-8-core-am5-box-pn100-100001236box.jpg',
            self::PRODUCT_13 => 'https://computershopperu.com/1988-large_default/procesador-amd-ryzen-5-8600g-430ghz-hasta-500ghz-16mb-6-core-am5-pn100-100001237box.jpg',
            self::PRODUCT_14 => 'https://computershopperu.com/709-large_default/procesador-amd-ryzen-5-4500-360ghz-hasta-410ghz-8mb-6-core-am4-box-pn100-100000644box.jpg',
            //MONITORES  
            self::PRODUCT_15 => 'https://computershopperu.com/3766-large_default/monitor-teros-te-2401s-238-fhd-1920x1080100hz5msamd-radeon-freesync-.jpg',
            self::PRODUCT_16 => 'https://computershopperu.com/1874-large_default/monitor-xiaomi-gaming-g27i-27-fhd-1920x1080165hz1msfreesync-premium.jpg',
            self::PRODUCT_17 => 'https://computershopperu.com/1783-large_default/monitor-asus-tuf-gaming-vg249q1a-238-fhd-1920x1080165hz1msfreesync-premium-.jpg',
            self::PRODUCT_18 => 'https://computershopperu.com/2523-large_default/monitor-xiaomi-g27qi-27-qhd-2560x1440180hz1msamd-radeon-freesync.jpg',
            self::PRODUCT_19 => 'https://computershopperu.com/2728-large_default/monitor-gigabyte-m27aq-ice-27-qhd-2560x1440180hz1msamd-radeon-freesync-pn9dm27qaic-00-1awsa.jpg',
            self::PRODUCT_20 => 'https://computershopperu.com/3512-large_default/monitor-msi-mag-255xfv-245-fhd-1920x1080250hz05msadaptive-sync.jpg',
            self::PRODUCT_21 => 'https://computershopperu.com/3595-large_default/monitor-msi-mag-276cxf-27-fhd-1920x1080280hz05msadaptive-sync.jpg',
            self::PRODUCT_22 => 'https://computershopperu.com/2433-large_default/monitor-msi-g27c4x-curvo-27-fhd-1920x1080250hz1msfreesync-premium.jpg',
            self::PRODUCT_23 => 'https://computershopperu.com/615-large_default/monitor-asus-rog-strix-xg259qns-245-fhd-1920x1080380hz1msfreesync-premium-pn90lm09m0-b013b0.jpg',
            self::PRODUCT_24 => 'https://computershopperu.com/1850-large_default/monitor-asus-rog-strix-xg27aqmr-27-qhd-2560x1440300hz1msfreesync-premium-procompatible-nvidia-g-sync.jpg', 
            self::GRAF_01 => 'https://computershopperu.com/595-medium_default/tarjeta-de-video-msi-radeon-rx-6650-xt-4gb-gddr6-64bits-mech-2x-oc-pn912-v508-003.jpg',
            self::GRAF_02 => 'https://computershopperu.com/510-medium_default/tarjeta-de-video-msi-geforce-rtx-3050-8gb-gddr6-128bits-ventus-2x-oc-pn912-v809-4266.jpg',
            self::GRAF_03 => 'https://computershopperu.com/599-medium_default/tarjeta-de-video-msi-radeon-rx-6650-xt-8gb-gddr6-128bits-mech-2x-oc-pn912-v502-062.jpg',
            self::GRAF_04 => 'https://computershopperu.com/514-medium_default/tarjeta-de-video-msi-geforce-rtx-3060-12gb-gddr6-192bits-ventus-2x-oc-pn912-v397-664.jpg',
            self::GRAF_05 => 'https://computershopperu.com/1983-medium_default/tarjeta-de-video-xfx-speedster-swft-210-amd-radeon-rx-6650-xt-8gb-gddr6-128bits.jpg',
            self::GRAF_06 => 'https://computershopperu.com/3570-medium_default/tarjeta-de-video-xfx-speedster-qick-319-amd-radeon-rx-7800-xt-16gb-gddr6-256bits-core-edition.jpg',
            self::GRAF_07 => 'https://computershopperu.com/529-medium_default/tarjeta-de-video-asus-geforce-rtx-3060ti-8gb-gddr6-256bits-dual-oc-pn90yv0g1j-mvaa00.jpg',
            self::GRAF_08 => 'https://computershopperu.com/3769-medium_default/tarjeta-de-video-xfx-speedster-swft-210-amd-radeon-rx-7600-xt-16gb-gddr6-128bits.jpg',
            self::GRAF_09 => 'https://computershopperu.com/531-medium_default/tarjeta-de-video-asus-geforce-rtx-4070-12gb-gddr6x-192bits-tuf-gaming-pn90yv0iz1-m0aa00.jpg',
            self:: GRAF_10 => 'https://computershopperu.com/534-medium_default/tarjeta-de-video-asus-geforce-rtx-4060-8gb-gddr6-128bits-dual-evo-oc-pn90yv0jc7-mvaa00.jpg',
            //
            self::RAM_01 => 'https://computershopperu.com/800-medium_default/memoria-16gb-8gbx2-ddr4-gskill-aegis-black-bus-3200mhz-pnf4-3200c16d-16gis.jpg',
            self::RAM_02 => 'https://computershopperu.com/704-medium_default/memoria-96gb-48gbx2-ddr5-gskill-trident-z5-rgb-black-bus-6400mhz-pnf5-6400j3239f48gx2-tz5rk.jpg',
            self::RAM_03 => 'https://computershopperu.com/804-medium_default/memoria-8gb-ddr4-kingston-fury-beast-black-bus-2666mhz-pnkf426c16bb8.jpg',
            self::RAM_04 => 'https://computershopperu.com/807-medium_default/memoria-8gb-ddr4-kingston-fury-beast-rgb-black-bus-3200mhz-pnkf432c16bba8.jpg',
            self::RAM_05 => 'https://computershopperu.com/812-medium_default/memoria-8gb-ddr5-kingston-fury-beast-rgb-black-bus-6000mhz-pnkf560c40bba-8.jpg',
            self::RAM_06 => 'https://computershopperu.com/1989-medium_default/memoria-8gb-ddr4-corsair-vengeance-rgb-rs-bus-3200mhz-pncmg8x4m1e3200c16.jpg',
            self::RAM_07 => 'https://computershopperu.com/815-medium_default/memoria-16gb-ddr5-kingston-fury-beast-rgb-black-bus-5200mhz-pnkkf552c40bba-16.jpg',
            self::RAM_08 => 'https://computershopperu.com/1994-medium_default/memoria-8gb-ddr4-corsair-vengeance-lpx-bus-3200mhz-pncmk8gx4m1z3200c16.jpg',
            self::RAM_09 => 'https://computershopperu.com/819-medium_default/memoria-16gb-ddr5-kingston-fury-beast-rgb-black-bus-5600mhz-pnkf556c40bba-16.jpg',
            self::RAM_10 => 'https://computershopperu.com/1997-medium_default/memoria-8gb-ddr4-t-force-vulcan-z-gray-bus-3200mhz-pntlzgd48g3200hc16f01.jpg',
            self::CASE_01 => 'https://computershopperu.com/2577-large_default/case-antec-c8-constellation-black-sin-fuente-vidrio-templado-full-tower-pn0-761345-10019-9.jpg',
            self::CASE_02 => 'https://computershopperu.com/2562-large_default/case-antec-cx300-elite-white-rgb-sin-fuente-vidrio-templado-mid-tower-pn0-761345-10096-0.jpg',
            self::CASE_03 => 'https://computershopperu.com/2556-large_default/case-antec-cx800-elite-black-rgb-sin-fuente-vidrio-templado-mid-tower-pn0-761345-10058-8.jpg',
            self::CASE_04 => 'https://computershopperu.com/2424-large_default/case-deepcool-ch560-digital-white-argb-sin-fuente-vidrio-templado-mid-tower.jpg',
            self::CASE_05 => 'https://computershopperu.com/3195-large_default/case-msi-mag-pano-100l-pz-white-sin-fuente-vidrio-templado-mid-tower.jpg',
            self::CASE_06 => 'https://computershopperu.com/771-large_default/case-asus-tuf-gaming-gt302-argb-black-sin-fuente-vidrio-templado-mid-tower-pn90dc00i0-b18000.jpg',
            self::CASE_07 => 'https://computershopperu.com/1290-large_default/case-lian-li-011-dynamic-evo-black-rgb-sin-fuente-vidrio-templado-mid-tower-pn011dergbx.jpg',
            self::CASE_08 => 'https://computershopperu.com/3258-large_default/case-asus-tuf-gaming-gt502-white-sin-fuente-vidrio-templado-mid-tower-pngt502whttg.jpg',
            self::CASE_09 => 'https://computershopperu.com/1200-large_default/case-deepcool-matrexx-ck560-black-argb-sin-fuente-vidrio-templado-mid-tower-pnr-ck560-bkaae4-g-1-.jpg',
            self::CASE_10 => 'https://computershopperu.com/1325-large_default/case-antryx-fx730-black-argb-sin-fuente-vidrio-templado-mid-tower-pnac-fx730k.jpg',
            self::TECL_01 => 'https://computershopperu.com/2617-large_default/teclado-antryx-mk-zigra-evo-black-gray-mecanico-red-switch-wired-usb-pnamk-900kre-sp.jpg',
            self::TECL_02 => 'https://computershopperu.com/1037-large_default/teclado-redragon-mitra-black-rgb-mecanico-switch-red-wired-usb-pnk551rgb-1.jpg',
            self::TECL_03 => 'https://computershopperu.com/2928-large_default/teclado-asus-rog-strix-scope-rx-xa05-rgb-switch-red-mecanico-wired-usb-.jpg',
            self::TECL_04 => 'https://computershopperu.com/3426-large_default/teclado-machenike-k500f-b81-rgb-morado-switch-outemou-crystal-mecanico-wired-usb-.jpg',
            self::TECL_05 => 'https://computershopperu.com/3406-large_default/teclado-machenike-kt68-pro-rgb-smart-screen-black-north-pole-switch-yellow-mecanico-wirelessbluetoothwired-usb-.jpg',
            self::MOUS_01 => 'https://computershopperu.com/2229-large_default/mouse-asus-rog-p707-spatha-x-black-rgb-dpi-8000-conectividad-wired-usbwireless.jpg',
            self::MOUS_02 => 'https://computershopperu.com/2234-large_default/mouse-asus-tuf-gaming-p309-m3-gen-ii-rgb-dpi-8000-conectividad-wired-usb-.jpg',
            self::MOUS_03 => 'https://computershopperu.com/3483-large_default/mouse-machenike-l8-pro-rgb-black-dpi-26000-conectividad-wirelesswired-usb-base-de-carga.jpg',
            self::MOUS_04 => 'https://computershopperu.com/3552-large_default/mouse-logitech-g-g502-x-hero-black-dpi-25600-conectividad-usb-pn910-006136.jpg',
            self::MOUS_05 => 'https://computershopperu.com/3540-large_default/mouse-logitech-g-g502-hero-rgb-black-dpi-25600-conectividad-wired-usb-.jpg',
            self::MEMO_01 => 'https://computershopperu.com/3748-large_default/disco-duro-vigilancia-2tb-western-digital-purpura-64mb-5400rpm-formato-35-.jpg',
            self::MEMO_02 => 'https://computershopperu.com/3208-large_default/ssd-512gb-hiksemi-future-eco-nvme-m2-2280-pcie-gen-40x4-pnhs-ssd-future-eco-512g.jpg',
            self::MEMO_03 => 'https://computershopperu.com/3171-large_default/ssd-500gb-hp-nvme-m2-2280-pcie-30x4-pn2yy44aa-abb.jpg',
            self::MEMO_04 => 'https://computershopperu.com/3749-large_default/disco-duro-pc-2tb-seagate-barracuda-64mb-7200rpm-formato-35-pn1er164-021.jpg',
            self::MEMO_05 => 'https://computershopperu.com/2515-large_default/ssd-1tb-kingston-nv3-nvme-m2-2280-pcie-40-pnsnv3s1000g.jpg',
            self::DIS_01 => 'https://computershopperu.com/4120-large_default/deepcool-mystique-360-argb-black-cooler-cpu-refrigeracion-liquida-compatible-amdintel-pnr-lx750-bkadsnc-g-1.jpg',
            self::DIS_02 => 'https://computershopperu.com/4076-large_default/asus-rog-ryujin-iii-360-argb-extreme-black-cooler-cpu-refrigeracion-liquida-compatible-amdintel-pn90rc0131-m0aay0.jpg',
            self::DIS_03 => 'https://computershopperu.com/4084-large_default/asus-rog-ryujin-iii-360-argb-extreme-white-cooler-cpu-refrigeracion-liquida-compatible-amdintel-pn90rc0132-m0aay0.jpg',
            self::DIS_04 => 'https://computershopperu.com/4061-large_default/antryx-triton-vision-360p-black-argb-cooler-cpu-refrigeracion-liquida-compatible-amdintel-.jpg',
            self::DIS_05 => 'https://computershopperu.com/3870-large_default/cooler-para-case-hyte-thicc-fp12-120mm-packx3-pnfan-hyte-fp12-bw-3.jpg',
            self::DIS_06 => 'https://computershopperu.com/3865-large_default/hyte-thicc-q60-white-qrgb-cooler-cpu-refrigeracion-liquida-compatible-amdintel-pnfan-hyte-q60-bw.jpg',
            self::DIS_07 => 'https://computershopperu.com/3126-large_default/cooler-para-case-antryx-lynk-fan-lf120-white-argb-120mm-packx3-con-controlador-.jpg',
            self::DIS_08 => 'https://computershopperu.com/2186-large_default/kit-cooler-para-case-antryx-spectrum-310-white-argb-120mm-packx3-con-controlador-control-remoto.jpg',
            self::DIS_09 => 'https://computershopperu.com/2182-large_default/cooler-para-case-msi-mpg-ez120-black-argb-120mm-packx3-con-controlador-.jpg',
            self::DIS_10 => 'https://computershopperu.com/2365-large_default/cooler-para-case-lian-li-st-120-white-argb-120mm-packx3-con-controlador-pnst120-3w-.jpg',
            self::HEADPHONE_01 => 'https://computershopperu.com/1136-large_default/audifono-logitech-g-g435-lightspeed-azul-frambuesa-con-microfono-wireless-.jpg',
            self::HEADPHONE_02 => 'https://computershopperu.com/1121-large_default/audifono-msi-immerse-gh30-v2-black-con-microfono-conexion-35mm-pns3721001-sv1.jpg',
            self::HEADPHONE_03 => 'https://computershopperu.com/1141-large_default/audifono-logitech-g-g435-lightspeed-black-con-microfono-wireless-pn981-001049.jpg',
            self::HEADPHONE_04 => 'https://computershopperu.com/1948-large_default/audifono-razer-blackshark-v2-x-black-con-microfono-sonido-71-conexion-35mm-pnrz04-03240100-r3u1.jpg',
            self::HEADPHONE_05 => 'https://computershopperu.com/1130-large_default/audifono-redragon-pandora-black-rgb-con-microfono-sonido-71-conexion-usb-pnh350rgb.jpg',
        };
    }
    public function categoryId(): int
    {
        return match ($this) {
            self::PLACA_01 ,self::PLACA_02 ,self::PLACA_03 ,self::PLACA_04  ,self::PLACA_05,self::PLACA_06,self::PLACA_07,self::PLACA_08,self::PLACA_09,self::PLACA_10 =>4,             
            self::FUENTE_01,self::FUENTE_02,self::FUENTE_03,self::FUENTE_04,self::FUENTE_05,self::FUENTE_06,self::FUENTE_07,self::FUENTE_08,self::FUENTE_09,self::FUENTE_10 =>3,
            self::PRODUCT_15, self::PRODUCT_16, self::PRODUCT_17, self::PRODUCT_18, self::PRODUCT_19, self::PRODUCT_20, self::PRODUCT_21, self::PRODUCT_22, self::PRODUCT_23, self::PRODUCT_24 => 1,
            self::PRODUCT_05, self::PRODUCT_06, self::PRODUCT_07, self::PRODUCT_08, self::PRODUCT_09, self::PRODUCT_10, self::PRODUCT_11, self::PRODUCT_12, self::PRODUCT_13, self::PRODUCT_14 => 2, // Categoría de procesadore  // Categoría de tarjetas gráficas
            self::GRAF_01, self::GRAF_02, self::GRAF_03, self::GRAF_04, self::GRAF_05, self::GRAF_06, self::GRAF_07, self::GRAF_08, self::GRAF_09, self::GRAF_10=> 5, 
            self::RAM_01, self::RAM_02, self::RAM_03, self::RAM_04, self::RAM_05, self::RAM_06, self::RAM_07, self::RAM_08, self::RAM_09, self::RAM_10 => 6,
            self::CASE_01 => 9,
            self::CASE_02 => 9,
            self::CASE_03 => 9,
            self::CASE_04 => 9,
            self::CASE_05 => 9,
            self::CASE_06 => 9,
            self::CASE_07 => 9,
            self::CASE_08 => 9,
            self::CASE_09 => 9,
            self::CASE_10 => 9,
            self::TECL_01 => 10,
            self::TECL_02 => 10,
            self::TECL_03 => 10,
            self::TECL_04 => 10,
            self::TECL_05 => 10,
            self::MOUS_01 => 11,
            self::MOUS_02 => 11,
            self::MOUS_03 => 11,
            self::MOUS_04 => 11,
            self::MOUS_05 => 11,
            self::MEMO_01 => 7,
            self::MEMO_02 => 7,
            self::MEMO_03 => 7,
            self::MEMO_04 => 7,
            self::MEMO_05 => 7,
            self::DIS_01 => 8,
            self::DIS_02 => 8,
            self::DIS_03 => 8,
            self::DIS_04 => 8,
            self::DIS_05 => 8,
            self::DIS_06 => 8,
            self::DIS_07 => 8,
            self::DIS_08 => 8,
            self::DIS_09 => 8,
            self::DIS_10 => 8,
            self::HEADPHONE_01 => 12,
            self::HEADPHONE_02 => 12,
            self::HEADPHONE_03 => 12,
            self::HEADPHONE_04 => 12,
            self::HEADPHONE_05 => 12,  

        };
    }
}