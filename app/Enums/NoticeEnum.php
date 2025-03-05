<?php

namespace App\Enums;

enum NoticeEnum: string
{   
    
    case Notice_01 = 'MSI GeForce RTX™ Serie 50: Potencia para la IA del Futuro';
    case Notice_02 = 'Refrigeración Extrema con la Serie MAG CORELIQUID A13';
    case Notice_03 = 'MSI Serie Z890: Rendimiento Ilimitado para la Nueva Era de la IA';
    case Notice_04 = '¡Descubre la Mejor Experiencia en Teclados y Ratones Gaming!';
    case Notice_05 = '¡Las Mejores Ofertas en Componentes ASUS!';
    case Notice_06 = 'Xiaomi Mini LED G Pro 27" – Máximo Rendimiento Gamer';
    case Notice_07 = 'AMD Ryzen AI Serie 8000G – Potencia sin Límites';
    case Notice_08 = 'Más Juegos, Más Poder con AMD';
    case Notice_09 = 'ASUS TUF Gaming: Domina Cada Partida con Precisión';
    case Notice_10 = 'ASUS GeForce RTX™ Serie 50: Potencia Sin Límites';


    public function description(): string
    {
        return match($this){
            self::Notice_01 => 'Descubre el futuro del rendimiento con la nueva MSI GeForce RTX™ Serie 50, diseñada para llevar la inteligencia artificial, los videojuegos y la creación de contenido a un nivel superior. Con arquitectura avanzada, tecnología de vanguardia y una potencia sin precedentes, estas tarjetas gráficas están listas para redefinir lo que significa la aceleración gráfica. ¡Prepárate para una experiencia sin límites! ',
            self::Notice_02 => 'Descubre el poder de la refrigeración líquida con la nueva serie MAG CORELIQUID A13 de MSI. Diseñada para mantener tu procesador a temperaturas óptimas, esta línea de sistemas de enfriamiento AIO combina rendimiento, estilo y compatibilidad con los últimos sockets Intel LGA1851, LGA1700 y AMD AM5. Con ventiladores ARGB de alto rendimiento y un diseño elegante, el MAG CORELIQUID A13 360 garantiza una disipación de calor eficiente para que puedas llevar tu equipo al máximo sin preocupaciones. ¡Enfría sin límites y dale a tu PC el rendimiento que se merece!',
            self::Notice_03 => 'Descubre las placas madre MSI Serie Z890, diseñadas para ofrecer un rendimiento inigualable con los nuevos procesadores Intel® Core™ Ultra (Serie 2). Con una arquitectura optimizada para inteligencia artificial y compatibilidad con tecnologías de vanguardia, estas placas te brindan la potencia y estabilidad que necesitas para gaming, creación de contenido y tareas exigentes.',
            self::Notice_04 => 'Explora nuestra increíble colección de teclados mecánicos y ratones gaming diseñados para ofrecerte precisión, velocidad y estilo. Con iluminación RGB personalizable, diseños ergonómicos y tecnología inalámbrica, estos periféricos te llevarán al siguiente nivel en tus partidas.',
            self::Notice_05 => '¿Buscas potencia y rendimiento para tu PC? Aprovecha nuestras increíbles ofertas en tarjetas gráficas y placas base ASUS. ¡Equipa tu equipo con la mejor tecnología para gaming y alto rendimiento! ',
            self::Notice_06 => 'Sumérgete en una experiencia de juego sin igual con el nuevo Xiaomi Mini LED G Pro 27". Con resolución QHD (2560x1440), una tasa de refresco ultra rápida de 180Hz, 1ms de tiempo de respuesta y AMD FreeSync, disfrutarás de una imagen fluida y sin interrupciones. ¡Lleva tu setup gaming al siguiente nivel! ',
            self::Notice_07 => '¡La revolución ha comenzado! Experimenta el máximo rendimiento con los procesadores AMD Ryzen™ Serie 8000G con inteligencia artificial integrada, diseñados para jugar cualquier título sin necesidad de tarjeta gráfica. Eleva tu experiencia gaming y productividad con la potencia de AMD Ryzen AI.',
            self::Notice_08 => 'Equípate con la potencia de AMD Ryzen y Radeon y sumérgete en la acción de Monster Hunter Wilds™.Consigue el juego al adquirir productos AMD seleccionados y prepárate para una experiencia épica con el máximo rendimiento. ¡Es hora de jugar y ganar con AMD!',
            self::Notice_09 => 'Vive la experiencia definitiva con los monitores ASUS TUF Gaming. Diseñados para jugadores exigentes, ofrecen hasta 180Hz de refresco, 1ms de respuesta y tecnología Fast IPS para imágenes ultra fluidas. Con resolución Full HD (1920x1080) y un diseño ergonómico con soporte para cámara o micrófono, son la elección perfecta para gaming competitivo.',
            self::Notice_10 => 'Experimenta el máximo rendimiento con la nueva ASUS GeForce RTX™ Serie 50. Diseñada para gamers y creadores que buscan velocidad, eficiencia y calidad gráfica sin compromisos.',
        };
    }
    public function imageUrl(): string
    {
        return match($this){
            self::Notice_01 => 'https://storage-asset.msi.com/latam/picture/banner/banner_17383189118c1c7d90e981e2d27d774be7e534f4ac.jpeg',
            self::Notice_02 => 'https://storage-asset.msi.com/latam/picture/banner/banner_1738319523192abcb706bdc9e080366c0b6762ec03.jpeg',
            self::Notice_03 => 'https://storage-asset.msi.com/latam/picture/banner/banner_1728891113b6a7aa773a8dc34935245b626371673e.jpeg',
            self::Notice_04 => 'https://redragon.es/content/uploads/2024/09/banner-1-desktop.jpg',
            self::Notice_05 => 'https://media.lifeinformatica.com/cdn-cgi/image/sharpen=0.5,f=auto/contents/2024/11/CSP_Ofertas_Componentes_2024.jpg',
            self::Notice_06 => 'https://computershopperu.com/modules/zoneslideshow/views/img/slideImages/1738929482.png',
            self::Notice_07 => 'https://computactus.com.pe/web/publico/img_data/6960504484.webp',
            self::Notice_08 => 'https://ignitestore.mx/assets/uploads/sw_banner_monster_hunter_wilds.png?1740503295',
            self::Notice_09 => 'https://www.mipcparquecentral.com/cdn/shop/files/Monitores_ASUS_180GHZ.png?v=1737481855',
            self::Notice_10 => 'https://rog.asus.com/media/1736440453483.jpg',
        };
    }
}
