<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('producto')->insert(
            [
                [
                    'nombre' => 'Lynx Race 9.9',
                    'tipo' => 'Bicicleta de montaña',
                    'id_marca' => '7',
                    'id_proveedor' => '7',
                    'precio' => '9999.90',
                    'descripcion_corta' => 'La Lynx es la bicicleta que te hará llegar al podium de todas las carreras',
                    'descripcion_larga' => 'LIGEREZA                     Construida como todos los cuadros de alta gama de BH utilizando la tecnología de moldeado de carbono HCIM- Hollow Core Internal Molding que permite reducir al máximo el peso del cuadro y la bieleta. Con la mayor cantidad de fibras de alto módulo, EC Layup, para conseguir un peso de 1.850 gramos con amortiguador.
                    + RIGIDEZ                     Un nuevo eje principal de suspensión, sobredimensionado y con rodamientos autocentrados que aumenta la rigidez de torsión un 30%.
                    SPLIT PIVOT                     El sistema Split Pivot sigue siendo una referencia en la independencia entre las fuerzas del pedaleo y el funcionamiento de la suspensión. Y entre las fuerzas de la frenada y la propia suspensión. Con un funcionamiento muy progresivo ideal para sacar el máximo partido a cada milímetro disponible.
                    FAST INTERVENTION TOOL 
                    Nuestro sistema FIT integra todas las herramientas necesarias para poder volver a casa en caso de avería. Incluye H2.5/3/4/5/6, T25, tronchacadenas, adaptador CO2 y cierre rápido de cadena.',
                    'imagen' => 'lynx99.webp',
                ], [
                    'nombre' => 'Scarp Prime',
                    'tipo' => 'Bicicleta de montaña',
                    'id_marca' => '8',
                    'id_proveedor' => '5',
                    'precio' => '7899',
                    'descripcion_corta' => 'HACERTE UN LÍDER. El cuadro SCARP EVO II llevó a KTM hasta el podio de la Copa del Mundo.',
                    'descripcion_larga' => 'Impresionante bicicleta enfocada a competición, con ruedas crossmax de carbono, grupo XTR 1x12v, horquilla y amortiguador RockShox SID con bloqueo de ambos sistemas al manillar. Ligereza, rigidez y comodidad en un conjunto que pugna con las mejores bicicletas del mercado en dobles XC con el espectacular acabado Silver/Green Purple Flip + Grey

                    El Cuadro SCARP EVO II ha superado numerosas pruebas en todo el mundo. La horquilla y el amortiguador son de ROCK SHOX (SID SL ULTIMATE) con un recorrido de 100 mm/95 mm y, junto con el concepto STRAIGHT-LINE-LINK (SLL), garantizan un manejo óptimo.',
                    'imagen' => 'scarpPrime.webp',
                ], [
                    'nombre' => 'IZALCO MAX 8.9',
                    'tipo' => 'Bicicleta de carretera',
                    'id_marca' => '9',
                    'id_proveedor' => '6',
                    'precio' => '4799',
                    'descripcion_corta' => 'Las formas refinadas y aprobadas por el túnel de viento NACA (Comité Asesor Nacional de Aeronáutica) hacen que nuestro cuadro sea altamente aerodinámico.',
                    'descripcion_larga' => 'La Focus Izalco Max 8.9 presenta unas líneas totalmente renovadas siendo visible el trabajo de desarrollo e innovación en el túnel de viento, para este diseño Focus ha optando por un diseño Naca (Comité Asesor Nacional de Aeronáutica) en los tubos del cuadro se consigue de esta forma una aerodinámica superior que los tubos de tipo redondo y más rígidos y ligeros que los tubos de perfil plano presentes en las bicicletas aero, Focus afirma que en sus pruebas en el túnel de viento aplicando esta tecnología Naca, la cual es utilizada en las alas de los aviones, la bicicleta es 6,6 vatios más eficiente rodando a 45 km/h.

                    Siguiendo con las mejoras aerodinámicas se ha desarrollado un guiado totalmente interno de los latiguillos, una tija en forma de D y una pipa de dirección más minimalista, que ofrece más agilidad al conjunto de la bicicleta, permitiendo de esta forma disfruta más de las bajadas, la caja del pedalier también se ha rediseñado, aumentando su rigidez, que sumada a su pequeña longitud entre ejes la aceleración es instantánea, la horquilla también ha sido rediseñada minimizado la torsión lateral
                    
                    La Focus Izalco Max 8.7 viene montada con el nuevo Shimano 105 R7150 Di2, uno de los grupos más robustos y fiables como es el Shimano 105 Di2 R1750, un grupo de 12 velocidades lanzado recientemente al mercado, el cual cumple de sobra con cualquiera de las expectativas, 12 velocidades 3 modos de funcionamiento transmite unas sensaciones directas durante su funcionamiento, sumado a los frenos que proporcionan una frenada modular nos proporcionan un extra de seguridad en las bajadas más largas, deteniéndonos sin problema en las frenadas de emergencia que nos puedan surgir.',
                    'imagen' => 'izalcoMax89.webp',
                ], [
                    'nombre' => 'Ridley Noah Fast',
                    'tipo' => 'Bicicleta de carretera',
                    'id_marca' => '10',
                    'id_proveedor' => '8',
                    'precio' => '7999',
                    'descripcion_corta' => 'La Noah Fast es la bicicleta de carretera más rápida de Ridley',
                    'descripcion_larga' => 'La Noah Fast es la bicicleta de carretera más rápida de Ridley. Con un cuadro aerodinámico y un montaje de alta gama, esta bicicleta es la elección perfecta para los ciclistas más exigentes. La Noah Fast es la bicicleta de carretera más rápida de Ridley. Con un cuadro aerodinámico y un montaje de alta gama, esta bicicleta es la elección perfecta para los ciclistas más exigentes. La Noah Fast es la bicicleta de carretera más rápida de Ridley. Con un cuadro aerodinámico y un montaje de alta gama, esta bicicleta es la elección perfecta para los ciclistas más exigentes.',
                    'imagen' => 'noahFast.webp',
                ], [
                    'nombre' => 'SAM2 6.9',
                    'tipo' => 'Bicicleta eléctrica',
                    'id_marca' => '9',
                    'id_proveedor' => '6',
                    'precio' => '5999',
                    'descripcion_corta' => 'La SAM2 6.9 es la bicicleta eléctrica de montaña más polivalente de Focus',
                    'descripcion_larga' => 'La FOCUS SAM² es la MTB eléctrica más orientada al descenso de nuestra gama. Su geometría fácilmente ajustable está hecha para los senderos más difíciles. Con un recorrido de 180/170 mm y unas rápidas ruedas de 29", esta bicicleta de suspensión total está lista para destrozar. Está equipada de serie con horquilla de suspensión con barras de 38 mm. Además, la FOCUS SAM² está optimizada para un amortiguador de espiral.',
                    'imagen' => 'sam269.webp',
                ], [
                    'nombre' => 'Ridley Fenix SL',
                    'tipo' => 'Bicicleta de carretera',
                    'id_marca' => '10',
                    'id_proveedor' => '11',
                    'precio' => '1999',
                    'descripcion_corta' => 'La Fenix SL es la bicicleta de carretera más polivalente de Ridley',
                    'descripcion_larga' => 'La Fenix SL Disc es una bicicleta realmente resistente. Brilla en todo tipo de carreteras, cuesta arriba, en llanuras y cuesta abajo o sobre adoquines superdifíciles, para que disfrutes siempre de tu paseo, ¡dondequiera que te lleve la carretera!
                    La Fenix SL Disc comparte muchas cualidades de nuestro modelo superior, la bicicleta Fenix SLiC endurance, aunque un poquito más pesada. Incorpora un tubo descendente con forma de diamante que aporta dureza y rigidez a esta bicicleta todoterreno. También tiene soportes de sillín más finos y bajos, lo que aumenta considerablemente su nivel de confort. Su capacidad de respuesta también es inmejorable gracias a su amplio soporte inferior y al tubo delantero rígido.
                    En pocas palabras, es la mejor bicicleta de alta resistencia para alguien que busca un rendimiento que combine una potencia impresionante con un confort de lujo.',
                    'imagen' => 'fenixSL.webp',
                ], [
                    'nombre' => 'Ridley Helium SLX',
                    'tipo' => 'Bicicleta de carretera',
                    'id_marca' => '10',
                    'id_proveedor' => '11',
                    'precio' => '3999',
                    'descripcion_corta' => 'La Helium SLX es la bicicleta de carretera más ligera de Ridley',
                    'descripcion_larga' => 'La Helium SLX Disc es, sin duda, la bicicleta de carretera con el mejor rendimiento para cualquier reto que desee afrontar. Perfecta para quienes buscan la máquina ideal para conquistar cumbres como un auténtico profesional.

                    El cuadro de esta bicicleta increíblemente ligera y equipada con frenos de disco pesa solo 780 gramos (tamaño M). La bici completa puede estar fácilmente por debajo de los 7 kg.
                    
                    La Helium es increíblemente rígida, por lo que Thomas De Gendt, el maestro en cargas de 500 W de un minuto, ha conseguido repetidos éxitos montado en ella. El soporte de sillín ultrafino proporciona comodidad sin sacrificar un solo vatio de potencia.
                    
                    Gracias a la ingeniosa tecnología F-Steerer, que permite el enrutamiento de cables integrado, se ganan 15 vatios sin siquiera tener que pisar el pedal.',
                    'imagen' => 'heliumSLX.webp',
                ], [
                    'nombre' => 'Ridley Kanzo Fast',
                    'tipo' => 'Bicicleta de gravel',
                    'id_marca' => '10',
                    'id_proveedor' => '11',
                    'precio' => '7999',
                    'descripcion_corta' => 'La Kanzo Fast es la bicicleta de gravel más rápida de Ridley',
                    'descripcion_larga' => 'Las bicicletas para grava Kanzo Fast son ultrarrápidas sobre cualquier terreno. Su eficaz transferencia de potencia le ayuda a convertir cada vatio en la máxima velocidad. También son perfectas para cortar el viento y ofrecer comodidad, permitiéndole recorrer largas distancias con confianza. Toda una pieza de ingeniería que le hará volar, sin importar el terreno o las condiciones climáticas.
                    Diseñados pensando en la aerodinámica y la grava, cada tubo tiene un perfil NACA optimizado. Para garantizar que la aerodinámica sea la adecuada, las bicicletas han pasado multitud de pruebas en nuestro túnel de viento. Nuestros ingenieros también se aseguraron de mantener una gran comodidad. Las bicicletas para grava Kanzo Fast tienen un soporte de sillín más bajo garantizar la absorción vertical, una tija de sillín cómoda y una geometría perfecta para grava.',
                    'imagen' => 'kanzoFast.webp',
                ], [
                    'nombre' => 'S-Works Epic World Cup',
                    'tipo' => 'Bicicleta de montaña',
                    'id_marca' => '11',
                    'id_proveedor' => '3',
                    'precio' => '9999',
                    'descripcion_corta' => 'La S-Works Epic World Cup es la bicicleta de montaña más rápida de Specialized',
                    'descripcion_larga' => 'La Epic World Cup es la bicicleta de carreras XC más rápida del mundo en recorridos suaves a técnicos gracias a su inigualable combinación de eficiencia, control y ligereza. El campeón del mundo Christopher Blevins lo expresó así: "Esta bici me da todo lo que podría desear de una bicicleta rígida, además del control y la capacidad de la doble suspensión". Todo lo que se necesitó para crear esta máquina de competición fue un enfoque de desarrollo totalmente integrado, la creación de un nuevo concepto de amortiguador y cuatro décadas de experiencia en victorias en Cross-Country.

                    CUADRO DE REFERENCIA
                    Para ofrecer la máxima velocidad a través de una transferencia de potencia de una eficiencia sin precedentes y una conducción muy precisa, nuestro equipo de ingeniería estableció y alcanzó nuevos estándares en rigidez torsional y rigidez del eje de pedalier. Esta meta requirió un enfoque de desarrollo integrado que fusionó un diseño de doble diamante estructuralmente superior con su amortiguador acunado en el interior del tubo superior, y rematado con el laminado de carbono más sofisticado de la historia de Specialized.
                    
                    NACE UNA NUEVA FORMA DE SUSPENSIÓN
                    El equipo de Specialized Ride Dynamics concibió e inventó una revolucionaria tecnología de amortiguadores para la Epic World Cup que proporciona al ciclista la eficiencia y repuesta rápida de una bicicleta rígida MÁS el control, la capacidad y el impulso de una doble suspensión, todo ello con una sencilla configuración. Co-desarrollado con RockShox, el amortiguador SID Deluxe WCID utiliza unas cámaras de aire positivas y negativas ajustables de forma independiente para ofrecer el tan buscado "efecto" de una bicicleta rígida, combinado con una amortiguación que devora el terreno, y la capacidad de personalizar fácilmente la configuración para un recorrido específico o ajustarla a las preferencias y sensaciones del ciclista. Usa la configuración firme y rodará como una rígida, o utiliza la configuración más activa y absorberá cada bache sin perder eficiencia ni aceleración. Pero no solo estas limitado a "abierto y cerrado", la naturaleza simple de su configuración permite al ciclista ajustarla en todo el espectro entre firme y suave.
                    
                    SUPERANDO SU PROPIA CATEGORIA
                    Los 75mm de recorrido trasero de la Epic World Cup proporcionan el control y capacidad de una bicicleta de mayor recorrido. Debido a que está diseñado para funcionar con un sag muy reducido, ofrece el mismo recorrido efectivo que una bicicleta de 100mm con un 25% de sag. Para optimizar aún más el rendimiento de la suspensión, el equipo de Specialized Ride Dynamics ha ajustado el tarado de la cámara de aire para que sea relativamente lineal en la mitad de la suspensión y así absorber impactos grandes como una bici de mayor recorrido. Debido a su gran tamaño, el Mega Jounce Bumper es una "primicia en la industria" y juega un papel crucial en la absorción cuando haces tope con impactos fuertes.
                    
                    ¿HEMOS PERDIDO “LA CABEZA”?
                    Algo así: Mientras que el nuevo y revolucionario amortiguador SID Deluxe WCID proporciona la combinación única de suspensión y rigidez en la parte trasera, el BRAIN sigue vivito y coleando en la horquilla. Su tecnología Position-Sensitive hace que los primeros 15 mm de recorrido sean muy suaves para no perder tracción en pequeños baches mientras que el resto de la suspensión tiene un comportamiento más firme para no contaminar el pedaleo. Todo esto sin necesidad de un bloqueo remoto o palanca.',
                    'imagen' => 'epicWC.webp',
                ], [
                    'nombre' => 'Register MIPS XL',
                    'tipo' => 'Casco',
                    'id_marca' => '18',
                    'id_proveedor' => '2',
                    'precio' => '55',
                    'descripcion_corta' => 'El casco Register™ Mips® XL está diseñado para ciclistas que aprecian el estilo y el ajuste clásico de Giro',
                    'descripcion_larga' => 'Sistema de ajuste Roc Loc® Sport MIPS
                    Visera desmontable Snap Fit 2
                    Acolchado de secado rápido
                    Zonas reflectantes
                    Calota de policarbonato moldeado con forro EPS
                    Protección contra insectos en las entradas de aire frontales
                    El sistema de ajuste Roc Loc® Sport Fit System se maneja fácilmente con una sola mano y tiene un rango de ajuste de 7 cm. Con una comodidad similar a la del Roc Loc® 5 y compatibilidad con la cola de caballo, el Roc Loc® Sport Fit System lleva la funcionalidad superior al nivel de los cascos deportivos.
                    
                    Con la construcción en molde, la robusta calota exterior de policarbonato se une a la calota interior de EPS absorbente de impactos en un solo paso durante el proceso de espumado. Esto hace que el casco sea aún más resistente sin añadir peso. Este proceso de producción también permite moldear sistemas de ventilación y aberturas de ventilación significativamente mejores. En comparación con los cascos tradicionales, los cascos moldeados son más ligeros y tienen sistemas de ventilación mucho mejores.',
                    'imagen' => 'registerMips.webp',
                ], [
                    'nombre' => 'Aether Spherical',
                    'tipo' => 'Casco',
                    'id_marca' => '18',
                    'id_proveedor' => '2',
                    'precio' => '299.95',
                    'descripcion_corta' => 'El casco Aether Spherical es el casco más seguro de Giro',
                    'descripcion_larga' => 'El casco Aether Spherical es el casco más seguro de Giro. Con un diseño aerodinámico y un montaje de alta gama, este casco es la elección perfecta para los ciclistas más exigentes. El casco Aether Spherical es el casco más seguro de Giro. Con un diseño aerodinámico y un montaje de alta gama, este casco es la elección perfecta para los ciclistas más exigentes. El casco Aether Spherical es el casco más seguro de Giro. Con un diseño aerodinámico y un montaje de alta gama, este casco es la elección perfecta para los ciclistas más exigentes.',
                    'imagen' => 'AetherSpherical.webp',
                ], [
                    'nombre' => 'Gamechanger 2.0 Performance',
                    'tipo' => 'Casco',
                    'id_marca' => '19',
                    'id_proveedor' => '10',
                    'precio' => '249.95',
                    'descripcion_corta' => 'El casco Gamechanger 2.0 Performance es el casco más aerodinámico de Abus',
                    'descripcion_larga' => 'Asegúrate de tener la ventaja decisiva en la batalla por cada vatio: ¡con el GameChanger 2.0 puedes llevar tu experiencia en las carreras al siguiente nivel!
                    Su predecesor ya era considerado un absoluto especialista en aerodinámica y, como cada segundo cuenta, la regla es: ¡abajo la resistencia al aire! Aquí es donde entra en juego la parte trasera más ancha junto con la forma aerodinámica. El Aero Blade optimiza el flujo de aire con una estructura de rejilla especial y se adapta a diferentes velocidades, ángulos laterales e inclinaciones del casco. Así pues, el GameChanger 2.0 tiene una solución para cada situación de carrera. Incluso en las salidas más calurosas, mantendrás la cabeza fría gracias a la entrada de aire AirBoost y al sofisticado sistema de ventilación. Para que la comodidad no decaiga, puedes ajustar fácilmente el casco con el sistema de ajuste patentado por ABUS. ActiCage aumenta la estabilidad del casco de carretera, y un puerto para el sensor de impactos QUIN te ofrece una opción de protección adicional.
                    Más rápido hacia adelante con el GameChanger 2.0: Probado por atletas profesionales en el túnel de viento y en la carretera. ¡Adelante!',
                    'imagen' => 'gamechanger2.webp',
                ], [
                    'nombre' => 'S-PHYRE',
                    'tipo' => 'Gafas',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '199.90',
                    'descripcion_corta' => 'Diseño aerodinámico. Las S-Phyre incorporan unas lentes magnéticas para una óptica de nivel profesional.',
                    'descripcion_larga' => 'MONTURA
                    El borde superior recto reduce las distracciones y la resistencia al viento.
                    Cambia las lentes rápidamente con nuestro nuestro sistema magnético, seguro y fácil de usar.
                    Patillas redondeadas con dibujo antideslizante para un ajuste seguro y una mayor comodidad.
                    El puente nasal reversible incorpora diferente grosor delantero y trasero para un mejor ajuste.
                    Montura Grilamid® TR90 resistente, duradera y ligera.
                    Puntas de las patillas de TPE no tóxico con moldeado de doble inyección
                    LENTES
                    Lente de una pieza de cobertura completa para un campo de visión más amplio y mayor protección.
                    El sistema de lentas magnéticas reduce la distorsión de las lentes y proporciona un campo de visión más cómodo.
                    Lentes RIDESCAPE exclusivas para ciclismo y con un ajuste óptimo para ofrecer más contraste y calidad en cualquier circunstancia.
                    Lentes de poliamida (PA), extremadamente ligeras y resistentes a los impactos que mejoran la claridad.
                    Protección total UV400.
                    El revestimiento oleofóbico que mejora la repelencia al agua y reduce las manchas de huellas dactilares.
                    El tratamiento antirrayaduras es 3 veces más duradero que los revestimientos regulares.',
                    'imagen' => 'gafasSphyre.webp',
                ], [
                    'nombre' => 'Sutro',
                    'tipo' => 'Gafas',
                    'id_marca' => '17',
                    'id_proveedor' => '10',
                    'precio' => '149.95',
                    'descripcion_corta' => 'Las Sutro son unas gafas de sol de alto rendimiento con un diseño audaz y versátil.',
                    'descripcion_larga' => 'Las gafas Oakley Sutro Small Polished Black con lentes Prizm Jade son una versión discreta de las populares gafas de sol Sutro, que redefinen el look de las gafas de rendimiento deportivo tradicionales. Inspirada en la vida diaria de los ciclistas urbanos, la lente de grandes dimensiones crea un aspecto llamativo y versátil, protege de las inclemencias del tiempo y mejora la visión con la tecnología de lentes Prizm, a la vez que inspira a los deportistas a moverse con seguridad y fluidez a lo largo del día.

                    La lente de gran tamaño mejora la visión periférica y ofrece una protección completa, sus varillas finas se ajustan a gorras y cascos. Se encuentran disponibles con lentes Prizm diseñadas para mejorar la percepción del color y el contraste de modo que puedas ver más detalles. Una versión reducida de Sutro para caras más pequeñas con una curva de base ligeramente más ajustada.',
                    'imagen' => 'gafasSutro.webp',
                ], [
                    'nombre' => 'Radar EV Path',
                    'tipo' => 'Gafas',
                    'id_marca' => '17',
                    'id_proveedor' => '10',
                    'precio' => '199.95',
                    'descripcion_corta' => 'Las Radar EV Path son unas gafas de sol de alto rendimiento con un diseño audaz y versátil.',
                    'descripcion_larga' => 'Las gafas Oakley Radar EV Path con lentes Prizm Golf han sido creadas con los bordes de la parte inferior con la mejor forma para aquellos que sienten molestias en las mejillas, por lo que se mejora la forma de la lente y se amplía el campo de visión. Han sido diseñadas para facilitar el movimiento del aire y ofrecer una ventilación óptima. Estas gafas disponen de las gomas de Unobtainium del puente nasal y de las varillas, que aseguran una adherencia sin precedentes incrementando la sujeción a pesar del sudor. Además, el material ultra-ligero O-Matter proporciona resistencia y confort para todo el día. Incluye bolsa negra para guardar las gafas cómodamente, funda dura y cojinetes para la nariz en negro.',
                    'imagen' => 'gafasRadar.webp',
                ], [
                    'nombre' => 'Absolute 6.0 Java',
                    'tipo' => 'Culotte largo',
                    'id_marca' => '20',
                    'id_proveedor' => '4',
                    'precio' => '149.95',
                    'descripcion_corta' => 'Una profunda renovación del modelo de referencia para invierno, el más famoso y querido por ciclistas de todos los niveles y disciplinas.',
                    'descripcion_larga' => '
                    
                    Una profunda renovación de nuestro modelo de referencia para invierno, el más famoso y querido por ciclistas de todos los niveles y disciplinas. Mejoras técnicas y cualitativas que impulsa el rendimiento, especificaciones y materiales a niveles de auténtico producto premium.
                    
                    RAINLAB. Tejido con protección contra viento y lluvia ligera.
                    Cambio de patrón en la parte frontal para una estética depurada y minimalista.
                    Cintura más alta y confortable en neopreno texturizado.
                    Detalles reflectantes ampliados.',
                    'imagen' => 'gobikAbsolute.webp',
                ],
                [
                    'nombre' => 'Absolute 6.0 Neptune',
                    'tipo' => 'Culotte corto',
                    'id_marca' => '20',
                    'id_proveedor' => '3',
                    'precio' => '130',
                    'descripcion_corta' => 'Diseño visual minimalista, uniforme y de acabado mate para un culotte de una sujeción y compresión perfectas, ideado para mantenerse estable y cómodo en rutas de larga distancia. Versión Compact con longitud de pierna reducida (3 cm) ideal para aquellos usuarios que buscan una menor cobertura en las piernas. Tejido bielástico de compresión óptima, elevada cobertura y secado rápido.Tirantes de polipropileno, suaves, ligeros y transpirables. Inserciones verticales de silicona en muslos para una sujeción perfecta sin presión.',
                    'descripcion_larga' => 'Una profunda renovación de nuestro modelo de referencia para invierno, el más famoso y querido por ciclistas de todos los niveles y disciplinas. Mejoras técnicas y cualitativas que impulsa el rendimiento, especificaciones y materiales a niveles de auténtico producto premium.

                    RAINLAB. Tejido con protección contra viento y lluvia ligera.
                    Cambio de patrón en la parte frontal para una estética depurada y minimalista.
                    Cintura más alta y confortable en neopreno texturizado.
                    Detalles reflectantes ampliados.',
                    'imagen' => 'gobikAbsoluteNeptuno.webp',
                ],  [
                    'nombre' => 'Limited 5.0 Black',
                    'tipo' => 'Culotte corto',
                    'id_marca' => '20',
                    'id_proveedor' => '4',
                    'precio' => '130',
                    'descripcion_corta' => 'Diseño visual minimalista, uniforme y de acabado mate para un culotte de una sujeción y compresión perfectas, ideado para mantenerse estable y cómodo en rutas de larga distancia. Versión Compact con longitud de pierna reducida (3 cm) ideal para aquellos usuarios que buscan una menor cobertura en las piernas. Tejido bielástico de compresión óptima, elevada cobertura y secado rápido.Tirantes de polipropileno, suaves, ligeros y transpirables. Inserciones verticales de silicona en muslos para una sujeción perfecta sin presión.',
                    'descripcion_larga' => 'Para usuarios que buscan menor compresión muscular, manteniendo las prestaciones óptimas para entrenamientos y salidas de larga duración.

                    Lycra cómoda y ajustada de compresión muscular media.
                    Tirantes perforados, más anchos y ligeros.
                    Cinta de las piernas ampliada de 75 mm con corte láser.',
                    'imagen' => 'gobikLimited.webp',
                ], [
                    'nombre' => 'Stark Saltwater',
                    'tipo' => 'Maillot corto',
                    'id_marca' => '20',
                    'id_proveedor' => '4',
                    'precio' => '74',
                    'descripcion_corta' => 'De corte clásico, con un ajuste relajado que se adapta a todo tipo de complexiones',
                    'descripcion_larga' => 'De corte clásico, con un ajuste relajado que se adapta a todo tipo de complexiones y lo convierte en una opción de gran confort para el día a día.

                    Tejido ligero, suave y transpirable.
                    Mangas microperforadas.
                    3 bolsillos traseros con nuestro sistema patentado GRS.',
                    'imagen' => 'gobikStark.webp',
                ], [
                    'nombre' => 'CX PRO 2.0 Quetzal',
                    'tipo' => 'Maillot largo',
                    'id_marca' => '20',
                    'id_proveedor' => '4',
                    'precio' => '90',
                    'descripcion_corta' => 'Diseñado para ser la camiseta más aerodinámica para carreras de carretera, esta camiseta cuenta con un tejido extremadamente cómodo con alta elasticidad',
                    'descripcion_larga' => 'Versión manga larga del modelo de referencia en nuestra gama de verano, con el mejor equilibrio entre rendimiento y confort. Con el objetivo de mejorar su aerodinámica, se ha reformulado su estructura para que dirija el flujo de aire hacia la parte inferior de la espalda. Los paneles laterales, más afilados, quedan ahora en el interior de los bolsillos traseros, ofreciendo un aspecto más estilizado y minimalista.
                    Nuevo patrón más aerodinámico, estilizado y minimalista.
                    Puños aerodinámicos con tejido texturizado y corte láser.
                    Cremallera de nylon invertida y oculta de estética minimalista.
                    3 bolsillos traseros con nuestro sistema patentado GRS.',
                    'imagen' => 'gobikCX.webp',
                ], [
                    'nombre' => 'Attitude 2.0 Yreka Women',
                    'tipo' => 'Maillot corto',
                    'id_marca' => '20',
                    'id_proveedor' => '4',
                    'precio' => '80',
                    'descripcion_corta' => 'Diseñado para ser la camiseta más aerodinámica para carreras de carretera, esta camiseta cuenta con un tejido extremadamente cómodo con alta elasticidad',
                    'descripcion_larga' => 'La elegancia, la ingeniería de materiales y los procesos de confección más innovadores se combinan en una prenda única del más alto nivel, con un inconfundible estilo vanguardista que te hará destacar en las rutas de carretera más exigentes.

                    Confección mediante bonding (sin costura) para conseguir un peso ultraligero.
                    Mangas de línea premium con tejido acanalado en líneas satinadas y mates.
                    Cremallera vista completamente limpia que reduce las arrugas en el abdomen.
                    Cintura termosellada con silicona posterior e hilo reflectante integrado.',
                    'imagen' => 'gobikAttitude.webp'
                ], [
                    'nombre' => 'RC-9',
                    'tipo' => 'Zapatillas de carretera',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '369.99',
                    'descripcion_corta' => 'Las zapatillas RC9 son las zapatillas de carretera más ligeras y rígidas de Shimano',
                    'descripcion_larga' => 'Las zapatillas Shimano RC9 S-PHYRE son el modelo insignia de la id_marca para el ciclismo de carretera de alto rendimiento. Están diseñadas para la competición con una construcción ligera, muy cómoda y de líneas elegantes. El empeine envolvente de piel, con una construcción de microfibra, es muy ligero y transpirable para garantizar una comodidad duradera. Esta construcción envolvente, integrando el empeine y la entresuela sin costuras, combinada con los diales BOA Li2 es sinónimo de ajuste personalizado y preciso con un sólo movimiento de los dedos. La suela de competición está fabricada en carbono y cuenta con un índice de rigidez 12, consiguiendo una excelente transmisión de potencia al pedal.

                    CARACTERISTICAS:
                    
                    Uso: Carretera
                    El empeine de piel de microfibra ligera y transpirable proporciona un ajuste óptimo y una excelente comodidad
                    El refuerzo del talón con estabilización anti giro garantiza el posicionamiento óptimo del pie para una aceleración intensa
                    El estilizado patrón de cordones cruzados de perfil bajo fija con elegancia la parte delantera del pie
                    Empeine envolvente de 360º que crea un ajuste perfecto para todo tipo de ciclistas
                    Los diales BOA Li2 dobles de perfil bajo permiten micro ajustes rápidos y precisos
                    La construcción integrada del empeine y la entresuela sin costuras alcanza un nuevo nivel de ajuste, estabilidad y ligereza
                    Tipo de cala: SPD-SL
                    Pedal más adecuado: PD-R9100
                    Material empeine: Piel sintética + microfibra
                    Horma: Shimano Dynalast
                    Sistema de cierre: BOA Li2 (2 diales)
                    Material suela: Carbono
                    Índice de rigidez suela: 12
                    Peso: 225 g (Talla 42)',
                    'imagen' => 'rc9.webp'
                ], [
                    'nombre' => 'RX8 Twilight',
                    'tipo' => 'Zapatillas de montaña',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '166.95',
                    'descripcion_corta' => 'Las zapatillas RX8 son las zapatillas de gravel más ligeras y polivalentes de Shimano',
                    'descripcion_larga' => '
                    CARACTERISTICAS:
                    - Uso: Gravel, MTB
                    - Suela de composite de fibra de carbono ligera y superrígida
                    - Sistema diseñado con pedales SPD para la máxima eficiencia y estabilidad en el pedaleo
                    - Tacos de TPU ligeros y resistentes a la abrasión para conseguir el mejor equilibrio del rendimiento del pedaleo y de la capacidad de la bicicleta
                    - El patrón de empeine "envolvente" proporciona un equilibrio perfecto de potencia de sujeción y comodidad absoluta todo el día
                    - IP1 BOA con función de micro ajuste dual
                    - Plantilla: Plantilla con refuerzo de alta densidad con almohadillas adaptables en el arco
                    - Empeine: Piel sintética+Malla
                    - Pedal más adecuado: PD-M9100, PD-M8100
                    - Peso: 265 g
                    
                    Tecnologías:
                    - BOA IP-1
                    La nueva devanadera BOA IP-1 tiene una triple funcionalidad: para cerrar la zapatilla derecha se debe girar el rotor en sentido horario y para abrirlo se debe girar en sentido antihorario, lo contrario ocurre con la zapatilla izquierda. Levantar el rotor para abrir completamente la zapatilla. El nuevo rotor BOA IP1 tiene una forma hexagonal, lo cual, junto al acabado en goma hace que el agarre sea más eficaz y con un óptimo ajuste.',
                    'imagen' => 'rx8.webp'
                ], [
                    'nombre' => 'Imperial',
                    'tipo' => 'Zapatillas de carretera',
                    'id_marca' => '18',
                    'id_proveedor' => '2',
                    'precio' => '344.49',
                    'descripcion_corta' => 'Cableado para mayor velocidad. Con un peso de 215 gramos que desafía la gravedad, con el rendimiento y el rango de ajuste que necesitas para conquistar las rutas más empinadas',
                    'descripcion_larga' => 'Las zapatillas Giro Imperial son muy ligeras. Fabricadas con una construcción de eje Synchwire patentada de Giro, que consiste en nylon monofilamento ultraligero reforzado con elastómeros Teijin (TPU) soldados térmicamente. Esto le da al zapato una sujeción estructural óptima y por lo tanto causa una resistencia fuertemente aumentada, especialmente en las áreas neurálgicas. Incorpora el cierre Dual BOA IP1 con guía de encaje suave asegura un atado completamente uniforme, elimina los puntos de presión y se ajusta cómodamente al pie. La suela de carbono EC90 SLX2 de Easton proporciona el equilibrio perfecto entre peso y rigidez y, en combinación con el sistema de plantilla ajustable Super Natural Fit, una eficacia de pedaleo y un confort incomparables.
                    CARACTERISTICAS:
                    - Uso: Carretera
                    - Material exterior: parte superior de la zapatilla Synchwire de una sola pieza con elastómeros Teijin soldados térmicamente
                    - Sistema de fijación: Doble tapón de rosca BOA IP1 con hebillas Soft-Lace
                    - Fibra antimicrobiana XT2
                    - Incluye: Plantillas super naturales y bolsa de transporte
                    - Peso: 251 g (talla 42.5)',
                    'imagen' => 'giroImperial.webp'
                ],
                [
                    'nombre' => 'Scale RC SL TR 2024',
                    'tipo' => 'Bicicleta de montaña',
                    'id_marca' => '12',
                    'id_proveedor' => '12',
                    'precio' => '14240',
                    'descripcion_corta' => 'La bicicleta SCOTT de la gama Scale RC SL TR 2024 viene con el cuadro de carbono HMX con geometría para XC, transmisión electrónica SRAM XX Eagle AXS y ruedas de carbono Syncros Silverton entre otros componentes de gama alta.
                    ',
                    'descripcion_larga' => 'Scale Carbon HMX SL Frame
                    FOX 32SC Float Factory 100mm Fork
                    RideLoc 2 / 3-Position Remote
                    SRAM XX SL AXS TR, PWR Meter
                    Trickstuff Piccola Disc Brakes
                    Syncros Silverton SL2 CF Wheels
                    Maxxis Rekon Race Foldable Tires
                    Syncros Carbon Parts',
                    'imagen' => 'scale.webp'
                ],
                [
                    'nombre' => 'Thron2 6.8',
                    'tipo' => 'Bicicleta eléctrica',
                    'id_marca' => '9',
                    'id_proveedor' => '6',
                    'precio' => '4199',
                    'descripcion_corta' => 'Mas que simplemente disfrutar de los senderos',
                    'descripcion_larga' => 'MOTOR MUY POTENTE Y DINÁMICO CON BATERÍA INTEGRADA QUE ROMPE RÉCORDS DE AUTONOMÍA. 
                    El eficaz motor Bosch Performance CX (4ª gen.) te ofrece asistencia hasta los 25 km/h con unos potentes 85 Nm. El motor más potente de Bosch está perfectamente integrado, la THRON² tiene un comportamiento muy equilibrado. En modo eMTB, la asistencia del motor se ajusta automáticamente a tu potencia de pedaleo. La nueva batería (sistema Smart) de 750 Wh ofrece diversión sin fin en los senderos. La batería está integrada en el tubo diagonal, pero puede extraerse para cargarla. 
                    CINEMÁTICA OPTIMIZADA PARA UNA GRAN PROGRESIVIDAD 
                    Con la mejora de nuestra conocida cinemática F.O.L.D., tu THRON² 6.8 está lista para que te diviertas aún más en tus rutas. Hemos mantenido la muy apreciada sensibilidad F.O.L.D., pero hemos cambiado el posicionamiento de nuestra cinemática dentro del cuadro para una gran resistencia frente a los topes. Las CARACTERISTICAS son completamente progresivas, lo que resulta en un cuadro que ofrece mucha estabilidad dándote seguridad en cualquier terreno. Las bicis de montaña eléctricas se benefician especialmente de la mayor progresividad con el mayor peso de su motor y su batería. Esto te permite hacer frente a cualquier terreno, mientras que el cuadro sigue ofreciendo comodidad para sesiones largas. Además, la baja altura de la THRON² 6.8 te ofrece un mayor espacio para moverte en los senderos. 
                    USO VARIADO 
                    Desde viajes bikepacking, hasta excursiones por terreno alpino o tus desplazamientos urbanos diarios: todo es posible con la THRON². Con algunos cambios en el montaje, puedes añadir funciones a tu THRON² dependiendo de dónde te lleve tu excursión e-MTB. Además, el diseño C.I.S. (Cockpit Integration Solution) especialmente desarrollado garantiza un puesto de mando limpio y unos cambios y frenos de funcionamiento suave. Todos los cables van del manillar al cuadro por la potencia y la dirección. Por otro lado, un puerto USB C en el tubo superior te ofrece la posibilidad de cargar tus dispositivos.',
                    'imagen' => 'thron268.webp'
                ], [
                    'nombre' => 'Contessa Solace Gravel eRide 15',
                    'tipo' => 'Bicicleta eléctrica',
                    'id_marca' => '12',
                    'id_proveedor' => '12',
                    'precio' => '6499',
                    'descripcion_corta' => 'Amplía tus horizontes con la nueva Solace Gravel. ',
                    'descripcion_larga' => 'Desde jornadas épicas de todo el día a una escapada intensa el sábado por la mañana antes del mediodía: la Solace Gravel tiene una polivalencia increíble. Silenciosa, eficiente y con un motor montado en las bielas que apenas ofrece resistencia aerodinámica: la Solace cuenta con una batería interna de 360Wh con opción de ampliación de autonomía externa de 160Wh (se vende por separado) para que tu horizonte llegue un poquito más lejos. Viene con 3 niveles de apoyo para optimizar la batería o sacarle la máxima potencia, como tú prefieras en cada momento. El cableado interno permite un diseño limpio en el conjunto del manillar, perfecto para montar alforjas en el manillar y el cuadro cuando te llama la aventura.
                    Cuadro de carbono HMX Solace eRIDE Disc
                    Horquilla Solace eRIDE HMX
                    SRAM Rival 1 11 velociddes
                    Motor TQ Mid con 50 Nm de par motor máximo, 300 W
                    Ruedas Syncros Capital 2.0 Disc
                    Cubiertas Schwalbe G-One Overland EVO TL
                    Componentes de carbono/aleación Syncros',
                    'imagen' => 'contessa.webp'
                ],
                [
                    'nombre' => 'Atom SUV Pro',
                    'tipo' => 'Bicicleta eléctrica',
                    'id_marca' => '7',
                    'id_proveedor' => '7',
                    'precio' => '4199.90',
                    'descripcion_corta' => 'Ahora sabes cuánto tiempo tardas en llegar a cada lugar. Siempre y en cualquier condición. Una forma de vivir en la que el tráfico no domina tu ritmo.',
                    'descripcion_larga' => 'Las ebikes ATOMe incorporan el motor shimano ep6 ligero, silencioso y más compacto, con la misma baja resistencia al pedaleo que el ep801. idóneo para el uso en senderos o en terreno urbano, garantiza un pedaleo natural y un par máximo de 85nm. 
                    TS System 
                    El acceso a la batería por la parte superior del tubo diagonal proporciona una magnífica ergonomía. 155km de autonomía. La disposición de la batería en el tubo diagonal nos permite alojar hasta 720wh con la sección más reducida del mercado, ofreciendo una autonomía de 155 km. La batería se puede cargar directamente desde un puerto integrado en el cuadro o desde la propia batería, permitiendo una carga rápida con el 80% de la capacidad. 
                    GAMA SUV 
                    Las bicicletas urbanas ATOMe incorporan modelos SUV con periféricos de alta gama y de paso bajo para un fácil acceso. Ofrece al ciclista una posición ergonómica y confortable en la conducción.',
                    'imagen' => 'atom.webp'
                ],
                [
                    'nombre' => 'Atlas 8.9',
                    'tipo' => 'Bicicleta de gravel',
                    'id_marca' => '9',
                    'id_proveedor' => '6',
                    'precio' => '4499',
                    'descripcion_corta' => 'CUADRO DE CARBONO
                    GRUPO ELECTRÓNICO SRAM RIVAL ETAP AXS XPLR 1X12                    
                    RUEDAS DT SWISS GR1600',
                    'descripcion_larga' => 'CÓMODA Y ÁGIL EN CUALQUIER TERRENO
                    Esta ligera bicicleta de carbono pesa sólo 9,25 kg y está diseñada para tus rápidas escapadas sobre gravel. Debido a la combinación de un reach largo y la corta potencia, la ATLAS 8.9 es una bicicleta bastante larga, lo que resulta en una conducción realmente suave. La parte delantera proporciona confianza en los descensos. Las vainas súper cortas hacen que la bicicleta de gravel sea juguetona y ágil, lo que complacerá a todos los ciclistas a los que les gusta enfrentarse sin importar la superficie. Para asegurarte de que puedes manejar perfectamente esta rápida bicicleta, puedes ajustar la posición del manillar según tus necesidades. La potencia está disponible en seis longitudes diferentes, de 70 a 120 mm, y la altura del manillar puede modificarse con espaciadores especiales de dos piezas.

                    VARIAS OPCIONES PARA LLEVAR BOLSAS
                    El cuadro ATLAS 8.9 ofrece varias opciones para llevar cómodamente tus alforjas. Puedes acoplar fácilmente una bolsa a la barra, al sillín o al cuadro. La bicicleta de gravel viene con nuestra bolsa para el tubo superior en la que puedes guardar herramientas esenciales o tentempiés para comer mientras pedaleas. Para portabidones, el cuadro de la bicicleta ofrece otras tres opciones de montaje. Un portabidón puede atornillarse en el tubo del sillín y dos más en el tubo diagonal, uno por encima y otro por debajo. En la parte superior, los tres tornillos del lado izquierdo y derecho de la horquilla ofrecen dos puntos de montaje adicionales. Aquí se pueden instalar portaequipajes adicionales o portabidones. Con un peso máximo del sistema (bicicleta, ciclista y equipamiento) de 120 kg, esta ligera bicicleta gravel de carbono te permite llevar muchas cosas contigo.

                    HECHA PARA ESCAPADAS RÁPIDAS DE GRAVEL
                    Gracias al grupo con transmisión optimizada para gravel, la ATLAS 8.9 está hecha para acompañar tus aventuras en bicicleta. El manillar ancho de carbono con ensanchamiento y la tija de sillín de carbono proporcionan un control y una comodidad totales. La tecnología C.I.S. (Cockpit Integration Solution) garantiza un aspecto limpio sin cables de por medio cuando se acopla una bolsa de manillar. Ya sea en condiciones meteorológicas adversas o en superficies exigentes, cuando se sufre en subidas empinadas o se recorren distancias realmente largas: la ATLAS 8.9 soporta plenamente tus pedaleas, incluso hasta el fin del mundo.',
                    'imagen' => 'atlas89.webp'
                ], [
                    'nombre' => 'Atlas 6.7',
                    'tipo' => 'Bicicleta de gravel',
                    'id_marca' => '9',
                    'id_proveedor' => '6',
                    'precio' => '1999',
                    'descripcion_corta' => 'CUADRO DE ALUMINIO
                    GRUPO SHIMANO GRX400 2X10
                    BUJES NOVATEC Y LLANTAS WTB',
                    'descripcion_larga' => 'COMODIDAD Y CONTROL EN CUALQUIER TERRENO
                    Da igual si hace mal tiempo, el terreno es exigente, las cuestas son pronunciadas o las distancias largas – la robusta y cómoda bici gravel ofrece control total gracias a un cuadro con geometría adaptada, manillar ancho con ángulo de caída y frenos de disco. El cockpit limpio con cableado integrado desde el manillar directamente al tubo de dirección evita las molestias al instalar una bolsa de manillar. Para subir cualquier montaña, incluso llevando equipaje, el grupo de gravel tiene un agradable rango de marchas para todo el mundo.
                    PASO DE RUEDA MUY AMPLIO
                    La ATLAS 6.7 lleva ruedas de 700c y tiene espacio para neumáticos de hasta 47mm, pero también está preparada para llevar ruedas de 650b con neumáticos de hasta 53mm. Así, tienes muchas posibilidades para configurar adecuadamente tu ATLAS 6.7 para tu próxima aventura. Además, la tecnología Road Boost ofrece una gran estabilidad gracias a una mejor tensión de los radios y mayor paso de rueda, pero manteniendo unas vainas cortas. Sea cual sea el objetivo, la ATLAS 6.7 se adapta perfectamente a tu ruta aunque vayas al fin del mundo.
                    VARIAS OPCIONES PARA LLEVAR EQUIPAJE
                    Se pueden montar cinco portabidones: En el tubo de sillín, sobre el tubo diagonal, bajo el tubo diagonal y en cada lado de la horquilla. La posición del portabidón sobre el tubo diagonal es ajustable para poder llevar una bolsa en el cuadro. Además, es posible equipar la ATLAS 6.7 con varios extras, gracias a las muchas opciones de anclajes de montaje del cuadro de aluminio y la horquilla de carbono. Los puntos de anclaje de la horquilla están homologados para llevar 3kg a cada lado y también pueden usarse para llevar cualquier otro equipaje.',
                    'imagen' => 'atlas67.webp'
                ],
                [
                    'nombre' => 'GravelX Evo 3.0',
                    'tipo' => 'Bicicleta de gravel',
                    'id_marca' => '7',
                    'id_proveedor' => '7',
                    'precio' => '3299.90',
                    'descripcion_corta' => 'Bicicleta de gravel BH, con cuadro y horquilla de carbono, frenos Shimano GRX Hydra, y transmisión Shimano GRX, de 12 velocidades.',
                    'descripcion_larga' => 'Ligera para rendir al máximo en las Competiciones Gravel o devorar los máximos kilómetros en los más variados terrenos.

                    Cómoda, ligera y muy reactiva
                    Construido como todos los cuadros de alta gama de BH, utilizando la tecnología de Moldeado del Carbono HCIM-Hallow Core Internal Molding que nos permite reducir al máximo el peso del cuadro y conseguir un peso de 1050 gr en talla MD.
                    
                    Airbow Gravel fork
                    Incorpora la horquilla Air Bow, con su forma propia y maximizada para permitir un paso de ruedas para neumáticos de hasta 45mm.
                    
                    Sistema antivibraciones SRS
                    Con el objetivo de absorber las vibraciones del terreno, aunar confort y rendimiento, de una manera efectiva y sin contaminar en ningún momento el pedaleo.
                    
                    Compartimento integrado
                    Situado en la parte inferior del tubo diagonal, ideado para llevar una pequeña bomba de aire o cartucho CO2, e incluso se puede añadir una cámara plegable. De fácil apertura.',
                    'imagen' => 'gravelx3.webp'
                ], [
                    'nombre' => 'Airbreaker',
                    'tipo' => 'Casco',
                    'id_marca' => '19',
                    'id_proveedor' => '13',
                    'precio' => '199.95',
                    'descripcion_corta' => 'Su diseño aerodinámico y tecnología de última generación garantizan un rendimiento incomparable. ¡Protección, comodidad y estilo, todo en uno! No te conformes con menos, elige lo mejor para tus aventuras sobre ruedas.',
                    'descripcion_larga' => 'El casco Abus AirBreaker está optimizado para el ciclismo de carretera, ofreciendo un excelente rendimiento aerodinámico. Su construcción InMold hace de este casco un accesorio muy duradero y más robusto al fusionar la carcasa exterior con el forro de EPS en una sola estructura. El diseño Multi Speed dosifica la ventilación en el grado en que sea necesario, máxima ventilación en etapas lentas por puertos y aerodinámica óptima para etapas llanas y rápidas. Garantiza siempre la máxima aerodinámica, proporcionando al mismo tiempo la ventilación óptima.

                    CARACTERISTICAS:
                    - Uso: Carretera
                    - Proceso de fabricación InMold para una unión más robusta y duradera de la carcasa exterior y el material absorbente de impactos EPS
                    - Tecnología Forced Air Cooling: Sistema de ventilación concebido para mantener una temperatura ideal en la cabeza
                    - Buena ventilación con 11 entradas de aire y 13 de salida conectados por canales de aire internos
                    - Diseño Multi Speed: la estructura de panal del casco dosifica la ventilación en el grado en que sea necesario',
                    'imagen' => 'airbreaker.webp'
                ], [
                    'nombre' => 'Equinox',
                    'tipo' => 'Gafas',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '95.20',
                    'descripcion_corta' => 'Combinan las tecnologías y los estilos recientes, en unas gafas sorprendentemente versátiles.',
                    'descripcion_larga' => 'Las gafas Shimano Equinox combinan las tecnologías y los estilos recientes, en unas gafas sorprendentemente versátiles.

                    CARACTERISTICAS de la montura:
                    - La montura de medio aro rígida mantiene las lentes en la posición correcta.
                    - Patillas redondeadas con dibujo antideslizante para un ajuste seguro y una mayor comodidad
                    - El puente nasal reversible incorpora diferente grosor delantero y trasero para un mejor ajuste
                    - Resistente, duradera y ligera montura Grilamid TR90
                    - Puntas de patilla de TPE no tóxico con moldeado de doble inyección
                    - Peso: 26,6 g aprox
                    
                    CARACTERISTICAS de la lente:
                    - Lente de una pieza de cobertura completa para un campo de visión más amplio y mayor protección
                    - Lentes Ridescape exclusivas para ciclismo y con un ajuste óptimo para ofrecer más contraste y calidad en cualquier circunstancia
                    - Las lentes grises fotocromáticas opcionales con un rango más amplio de transmitancia de luz son óptimas para condiciones con cambios de luz
                    - Protección total UV400
                    - El revestimiento hidrófugo incrementa la repelencia al agua y mantiene las lentes más limpias
                    - Tratamiento especial antirrayaduras
                    - Lentes intercambiables
                    - Lentes de poliamida (PA) extremadamente ligeras y resistentes a los impactos que incrementan la claridad
                    - Transmisión de luz de las lentes 29%
                    - Tipo de lente: OR',
                    'imagen' => 'equinox.webp'
                ],
                [
                    'nombre' => 'Competizione',
                    'tipo' => 'Culotte corto',
                    'id_marca' => '21',
                    'id_proveedor' => '9',
                    'precio' => '99.95',
                    'descripcion_corta' => 'El culote Castelli Competizione es perfecto para las carreras ciclistas, pero garantiza un alto rendimiento en tus entrenamientos y salidas. Este culote está diseñado para ofrecer la misma comodidad que relaja los músculos, refresca la piel y absorbe el sudor. Recomendamos elegir una talla más.',
                    'descripcion_larga' => 'El culote Castelli Competizione es perfecto para las carreras de los fines de semana, pero garantiza altas prestaciones y máximo confort también cuando no compites. El tejido principal Vortex y la banda elástica GIRO4 en la terminación de la pierna, provienen del culote Free Aero Race 4, mientras que la badana Kiss Air2 ofrece el máximo confort. Tiene un gran ajuste que garantiza gracias al patrón desarrollado por el equipo de Castelli. Este culote corto ha sido diseñado con los mejores conocimientos que tiene Castelli en la fabricación de culotes confortables y de altas prestaciones, pero a un precio accesible.

                    Badana Kiss Air 2: Badana de alto rendimiento para todas las condiciones. Construcciones de una sola pieza con espesor infinitamente variable. Actualizada con más acolchado de apoyo y un tejido más suave y elástico junto a la piel. Ideal para largas distancias de más de 4/5 horas.
                    
                    CARACTERISTICAS:
                    Uso: Carretera
                    Badana Kiss Air2
                    Tejido Affinity Pro Lycra en el interior de la pierna para mayor elasticidad y sujeción muscular
                    Tejido Vortex BLC en la pierna para mayor aerodinámica
                    Banda elástica GIRO4 en la terminación de la pierna para mayor adherencia distribuida en una superficie más amplia 
                    Costuras planas
                    Detalles reflectantes en la parte trasera
                    Tirantes en tejido de rejilla para mayor confort y transpirabilidad
                    Peso: 173 g 
                    Rango de temperatura: 15ºC / 35ºC',
                    'imagen' => 'competizione.webp'
                ], [
                    'nombre' => 'Classifica',
                    'tipo' => 'Maillot corto',
                    'id_marca' => '20',
                    'id_proveedor' => '9',
                    'precio' => '89.95',
                    'descripcion_corta' => 'Diseñado con tecnología de vanguardia y materiales de alta calidad, este maillot te brindará comodidad y rendimiento excepcionales en cada pedalada. ',
                    'descripcion_larga' => 'El maillot Castelli Classifica de manga corta combina un estilo limpio con altas prestaciones para las salidas de larga distancia con altas temperaturas. El tejido de micropiqué garantiza elevado confort y un estilo sofisticado, que permite un excelente control de la humedad. El ajuste es semiceñido para mayor comodidad, pero sin comprimir totalmente la musculatura, y además la prenda dispone de un bolsillo con cremallera para los objetos de valor.

                    CARACTERISTICAS:
                    - Tejido de poliéster micropiqué que proporciona excelente control de la humedad y es suave al tacto
                    - Tejido teñido en los paneles laterales y en los hombros para conseguir un efecto de profundidad
                    - Cremallera YKK Vislon
                    - Triple bolsillo trasero
                    - Bolsillo con cremallera para objetos de valor
                    - Rango de temperatura: 16º / 35º C',
                    'imagen' => 'classifica.webp'
                ], [
                    'nombre' => 'Arenberg',
                    'tipo' => 'Guantes largos',
                    'id_marca' => '21',
                    'id_proveedor' => '9',
                    'precio' => '37.95',
                    'descripcion_corta' => 'Los guantes largos Castelli Arenberg Gel son la elección perfecta para los ciclistas que buscan comodidad y protección. Con su diseño ergonómico y acolchado de gel estratégicamente ubicado, estos guantes proporcionan un agarre seguro y reducen la vibración en terrenos irregulares. ',
                    'descripcion_larga' => 'Los guantes largos Castelli Arenberg Gel garantizan un confort sin igual cuando estás pedaleando sobre cualquier terreno, pero cubre totalmente los dedos de la mano. El Sistema Castelli Damping System protege los nervios de la mano tanto si pedaleas por gravel o por carreteras en mal estado.

                    CARACTERISTICAS:
                    - Uso: Carretera
                    - Palma con acolchado de gel e impresión de silicona para un excelente agarre
                    - Sistema Castelli Damping System (CDS) para proteger el nervio mediano
                    - Puño con cierre regulable
                    - Dorso de MicroMesh
                    - Panel de Microsuede en el pulgar
                    - Peso: 45 g',
                    'imagen' => 'arenberg.webp'
                ],
                [
                    'nombre' => 'Unlimited naranja',
                    'tipo' => 'Guantes largos',
                    'id_marca' => '21',
                    'id_proveedor' => '9',
                    'precio' => '29.95',
                    'descripcion_corta' => 'Este guante ha sido diseñado para aquellos días en los que necesitas un poco más de protección contra las temperaturas frescas de primera hora de la mañana o contra las vibraciones del gravel.',
                    'descripcion_larga' => 'Los guantes largos Castelli Unlimited ofrece confort y versatilidad. Los paneles laterales elásticos facilitan su colocación y es altamente compresible para poderlo guardar en un bolsillo del maillot cuando no lo necesitas.

                    CARACTERISTICAS:
                    - Uso: Carretera, Gravel
                    - El guante Unlimited es versátil, ideal para ciclismo gravel y ciclismo en carretera
                    - Construcción especial en la punta de los dedos para mayor durabilidad en los terrenos irregulares
                    - Sistema Castelli Damping System (CDS) para proteger el nervio mediano
                    - Material sintético en la palma con impresión antideslizante para mayor agarre
                    - Tecnología touchscreen en la punta de los dedos
                    - Lengüetas laterales para facilitar su colocación',
                    'imagen' => 'unlimitedorange.webp'
                ],
                [
                    'nombre' => 'Unlimited gold',
                    'tipo' => 'Guantes largos',
                    'id_marca' => '21',
                    'id_proveedor' => '9',
                    'precio' => '29.95',
                    'descripcion_corta' => 'Este guante ha sido diseñado para aquellos días en los que necesitas un poco más de protección contra las temperaturas frescas de primera hora de la mañana o contra las vibraciones del gravel.',
                    'descripcion_larga' => 'Los guantes largos Castelli Unlimited ofrece confort y versatilidad. Los paneles laterales elásticos facilitan su colocación y es altamente compresible para poderlo guardar en un bolsillo del maillot cuando no lo necesitas.

                    CARACTERISTICAS:
                    - Uso: Carretera, Gravel
                    - El guante Unlimited es versátil, ideal para ciclismo gravel y ciclismo en carretera
                    - Construcción especial en la punta de los dedos para mayor durabilidad en los terrenos irregulares
                    - Sistema Castelli Damping System (CDS) para proteger el nervio mediano
                    - Material sintético en la palma con impresión antideslizante para mayor agarre
                    - Tecnología touchscreen en la punta de los dedos
                    - Lengüetas laterales para facilitar su colocación',
                    'imagen' => 'unlimitedgold.webp'
                ],
                [
                    'nombre' => 'Soudal Quick-Step 2023 Competizione 2',
                    'tipo' => 'Guantes cortos',
                    'id_marca' => '21',
                    'id_proveedor' => '9',
                    'precio' => '26.95',
                    'descripcion_corta' => 'Los guantes Soudal Quick-Step 2023 Competizione 2 están diseñados para aquellos ciclistas que buscan accesorios de competición, con un excelente agarre y la cantidad justa de acolchado.',
                    'descripcion_larga' => 'La palma sintética cuenta con un acolchado de espuma de densidad media que, junto con el sistema Castelli Damping System, amortigua las vibraciones durante la ruta. El patrón de silicona, también situado en la palma, permite obtener un agarre excelente para controlar el manillar sin problemas.

                    CARACTERISTICAS:
                    Guantes cortos
                    Palma sintética con acolchado de espuma de densidad media
                    Patrón de agarre de silicona en la palma
                    Dorso de la mano elástico con gráfico impreso por sublimación',
                    'imagen' => 'soudalcompetizione.webp'
                ], [
                    'nombre' => 'RC-5',
                    'tipo' => 'Zapatillas de carretera',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '139',
                    'descripcion_corta' => 'LIGERAS ZAPATILLAS DE RENDIMIENTO PARA CARRETERA CON ADN S-PHYRE.',
                    'descripcion_larga' => 'Empeine cubierto de malla/TPU y material de piel sintética en zonas optimizadas para proporcionar un ajuste cómodo y un peso ligero.
                    La estructura de empeine envolvente reduce el solapamiento y proporciona un ajuste perfecto.
                    El diseño integrado de empeine y entresuela, sin costuras, id_marca un nuevo nivel de ajuste, estabilidad y ligereza.
                    El sistema de ajuste BOA® con Dial L6 en la correa en el empeine proporciona un excelente ajuste para una amplia gama de formas de pie. El sistema de ajuste BOA® ofrece un ajuste de precisión microajustable diseñado para ofrecer un excelente rendimiento en condiciones difíciles.
                    Entresuela de nailon reforzada con fibra de carbono para la transferencia de potencia.
                    La entresuela de altura de perfil bajo estabiliza el pie y maximiza la eficiencia de transferencia de potencia.',
                    'imagen' => 'rc5.webp'
                ], [
                    'nombre' => 'Imperial negro',
                    'tipo' => 'Zapatillas de carretera',
                    'id_marca' => '18',
                    'id_proveedor' => '2',
                    'precio' => '299.95',
                    'descripcion_corta' => 'Las zapatillas Giro Imperial son la elección perfecta para los ciclistas más exigentes. Con un diseño elegante y aerodinámico, estas zapatillas ofrecen una comodidad excepcional y un rendimiento inigualable.',
                    'descripcion_larga' => 'Las zapatillas Giro Imperial son muy ligeras. Fabricadas con una construcción de eje Synchwire patentada de Giro, que consiste en nylon monofilamento ultraligero reforzado con elastómeros Teijin (TPU) soldados térmicamente. Esto le da al zapato una sujeción estructural óptima y por lo tanto causa una resistencia fuertemente aumentada, especialmente en las áreas neurálgicas. Incorpora el cierre Dual BOA IP1 con guía de encaje suave asegura un atado completamente uniforme, elimina los puntos de presión y se ajusta cómodamente al pie. La suela de carbono EC90 SLX2 de Easton proporciona el equilibrio perfecto entre peso y rigidez y, en combinación con el sistema de plantilla ajustable Super Natural Fit, una eficacia de pedaleo y un confort incomparables.

                    CARACTERISTICAS:
                    - Uso: Carretera
                    - Material exterior: parte superior de la zapatilla Synchwire de una sola pieza con elastómeros Teijin soldados térmicamente
                    - Sistema de fijación: Doble tapón de rosca BOA IP1 con hebillas Soft-Lace
                    - Fibra antimicrobiana XT2
                    - Incluye: Plantillas super naturales y bolsa de transporte
                    - Peso: 251 g (talla 42.5)',
                    'imagen' => 'imperialnegro.webp'
                ], [
                    'nombre' => 'XC-7',
                    'tipo' => 'Zapatillas de montaña',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '165.95',
                    'descripcion_corta' => 'Diseñadas para los ciclistas más apasionados, estas zapatillas ofrecen un equilibrio perfecto entre comodidad, rendimiento y estilo. Su suela de carbono proporciona una máxima eficiencia de pedaleo, mientras que su sistema de cierre Boa asegura un ajuste perfecto. Conquista cualquier sendero con confianza y estilo gracias a estas zapatillas de alta calidad.',
                    'descripcion_larga' => 'Las zapatillas Shimano XC7 de MTB están optimizadas para la modalidad de XC - Cross Country, ofreciendo unas prestaciones de nivel competitivo. El empeine con inserciones de malla y TPU proporciona un ajuste cómodo y una ventilación adecuada durante la práctica deportiva. La suela de goma ultraligera Shimano ULTREAD XC proporciona un agarre de nivel de competición y un rendimiento duradero. El cierre con el dial BOA L6 permite un ajuste adecuado y preciso con un solo movimiento. La horma de Shimano Dynalast permite optimizar la eficiencia energética. La suela ultrarrígida y ligera de compuesto de fibra de carbono permite maximizar la transferencia de potencia a los pedales. El doble dial BOA L6 permite un ajuste muy preciso y sencillo.

                    CARACTERISTICAS:
                    - Uso: MTB, XC - Cross Country
                    - La suela de goma ultraligera SHIMANO ULTREAD XC proporciona un agarre de nivel de competición y un rendimiento duradero
                    - La estructura de empeine envolvente reduce el solapamiento y proporciona un ajuste perfecto
                    - Los tacos ajustables permiten a los ciclistas seleccionar y cambiar de tacos de acuerdo con su estilo de conducción y las condiciones
                    - Entresuela ultrarrígida y ligera reforzada con fibra de carbono
                    - La suave piel sintética perforada de alta densidad y la ligera combinación de malla/TPU proporcionan un excelente ajuste y comodidad
                    - Los diales dobles BOA L6 permiten rápidos micro ajustes de tensión
                    - La guía ajustable para los cordones Powerzone sujeta de forma segura la parte delantera del pie
                    - La entresuela de perfil bajo estabiliza el pie y maximiza la transferencia de potencia y la eficiencia
                    - Estabilizador del talón
                    - Compatibles con calas SPD
                    - Tipo de horma: Shimano Dynalast
                    - Pedal más adecuado: PD-M8100
                    - Cierre: 2 diales BOA L6, guías Powerzone
                    - Empeine: Piel sintética + malla
                    - Suela: SHIMANO ULTREAD XC, goma
                    - Entresuela: Nailon reforzado con fibra de vidrio
                    - Índice de rigidez: 9
                    - Plantilla estándar: Plantilla con refuerzo adaptable
                    - Peso: 320 g (Talla 42)',
                    'imagen' => 'xc7.webp'
                ], [
                    'nombre' => 'Cilinder verde oliva',
                    'tipo' => 'Zapatillas de montaña',
                    'id_marca' => '18',
                    'id_proveedor' => '2',
                    'precio' => '90.95',
                    'descripcion_corta' => 'Con su diseño de vanguardia, comodidad excepcional y tracción inigualable, estas zapatillas elevarán tu rendimiento a nuevos niveles.',
                    'descripcion_larga' => 'Las zapatillas Giro Cylinder II para MTB ofrecen un amplio confort con un rápido ajuste proporcionado por el cierre con dial BOA. La construcción sintética de la parte superior, estratégicamente perforada y con zonas de malla, proporciona una sujeción y transpiración óptimas, mientras que la suela con nylon y goma incluida provee una durabilidad excepcional con una tracción fiable sobre una amplia gama de superficies. El sistema de cierre de 1 dial BOA L6 ofrece un ajuste en incrementos de 1mm cuando se ata y una función de liberación macro para quitarse el calzado con un solo movimiento.

                    CARACTERISTICAS:
                    - Parte superior sintética, con perforaciones y zonas de malla
                    - Refuerzos de microfibra en las punteras y el talón
                    - Sistema de cierre BOA L6 con ajuste de 1mm y liberación macro
                    - Cierre inferior de tira de velcro
                    - Suela moldeada de nylon y goma de alta tracción incluida
                    - Protector de arañazos en la planta
                    - Tacos en la zona delantera
                    - Plantilla de EVA troquelada
                    - Peso: 315 g (talla 42)',
                    'imagen' => 'cilinder.webp'
                ], [
                    'nombre' => 'Deed',
                    'tipo' => 'Zapatillas de montaña',
                    'id_marca' => '18',
                    'id_proveedor' => '2',
                    'precio' => '104.20',
                    'descripcion_corta' => 'Con su diseño innovador, tracción impecable y comodidad sin igual, estas zapatillas te brindarán la confianza y el estilo que necesitas para conquistar cualquier sendero.',
                    'descripcion_larga' => 'Las zapatillas Giro Deed MTB ofrecen un rendimiento que está diseñado para un agarre impresionante en los pedales y comodidad durante todo el día. La parte superior está construida con paneles laterales textiles altamente resistentes a la abrasión y microfibra protectora en la puntera para una mayor cobertura y durabilidad donde cuenta. El ajuste está diseñado para una estrecha conexión con el pedal y la combinación de una suela exterior de goma Tack altamente elástica más una capa interna de Mute Foam proporciona un agarre excepcional, mientras que también amortigua la vibración para mantenerte plantado en los pedales cuando el terreno se vuelve irregular .

                    CARACTERISTICAS:
                    - Uso: MTB
                    - Tejido y microfibra de secado rápido
                    - Entresuela de espuma Mute
                    - Suela exterior de goma Tack
                    - Diseño de banda de rodadura Gamma optimizado para pasadores de pedal
                    - Compatibilidad de cala: Pedal plano solamente / sin cala
                    - Peso: 390 g',
                    'imagen' => 'deed.webp'
                ], [
                    'nombre' => 'XT 8100 12v',
                    'tipo' => 'Cambio',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '89.95',
                    'descripcion_corta' => 'Con una increíble precisión y durabilidad, este cambio te ofrece un rendimiento excepcional en terrenos difíciles.',
                    'descripcion_larga' => 'El cambio Shimano XT M8100 12v Shadow+ SGS Direct ofrece una transmisión de 12 velocidades de amplio rango con combinación de piñón inferior -10-51D.

                    CARACTERISTICAS:
                    - Uso: MTB
                    - Polea de 13D más grande
                    - Nuevo tope de amortiguación agregado a la caja de la polea del desviador trasero
                    - Disminución de la tensión en el desviador trasero y la cadena en marcha baja
                    - Rendimiento del cambio rápido y preciso, optimizado para encarar cualquier recorrido
                    - Transmisión silenciosa en todas las posiciones de marcha
                    - Transmisión estable en terreno accidentado',
                    'imagen' => 'xt810012v.webp'
                ], [
                    'nombre' => 'XX1 Eagle 12v 52',
                    'tipo' => 'Cambio',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '299.95',
                    'descripcion_corta' => 'Con un diseño innovador y una construcción de alta calidad, este cambio te brinda un rendimiento excepcional en cualquier terreno.',
                    'descripcion_larga' => 'El cambio SRAM XX1 Eagle para cambios de 12V representa una auténtica revolución ya que además de aumentar la cantidad de piñones hasta 12, permite montar un piñón grande de 52 dientes. Para lograr tal avance SRAM ha modificado completamente su estructura. Empezando por las roldanas montando una nueva polea inferior de 14 dientes (superior de 12). El muelle Type-3 Roller Bearing Clutch de la caja de poleas es más suave, ya que la modificación del dentado X-Sync 2 del plato ya no requiere de una gran tensión para mantenerla encajada. Esto a su vez, unido al tallado de la cadena, que favorece cambios rápidos silenciosos, permite añadir tensión al muelle principal (que es de titanio), para garantizar un cambio fiable en las peores condiciones climatológicas. Se ha reforzado la pletina interna de las poleas de cambio y se ha mejorado el tornillo de fijación al cuadro. Se le ha dotado de un rodamiento tipo casquillo de fricción, y por parte de contacto con la puntera, de un anillo de apoyo de acero estriado, de esta manera se garantiza una fijación firme, pero con suavidad de giro extrema, que finaliza en unos cambios más rápidos, suaves y precisos. La caja de poleas mantiene el bloqueo adelantado Cage Lock que facilita la extracción de la rueda. Además utiliza Carbono en algunas de sus partes como en la caja de las poleas.

                    Características:
                    - Caja larga
                    - Compatible con cassettes de 12 velocidades SRAM Eagle
                    - Piñón máximo 52 dientes y mínimo de 10 dientes
                    - Compatible con cadenas SRAM Eagle
                    - Peso: 290 g
                    - Compatible con cassettes SRAM 10-50 y 10-52',
                    'imagen' => 'xx1eagle.webp'
                ], [
                    'nombre' => 'XT 8100 12v',
                    'tipo' => 'Mando',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '61.95',
                    'descripcion_corta' => 'El mando de cambio derecho Shimano XT M8100 12V con abrazadera es imprescindible para los ciclistas exigentes que buscan un rendimiento óptimo en su bicicleta. Con su diseño innovador y su capacidad de cambio suave y preciso, este mando de cambio garantiza experiencias de conducción inigualables. No pierdas la oportunidad de mejorar tu ciclismo con este producto de alta calidad.',
                    'descripcion_larga' => 'El mando de cambio derecho Shimano XT M8100 12V con abrazadera es rápido y ligero.

                    Características:
                    - Uso: MTB
                    - 12 velocidades
                    - Rapidfire Plus es adecuado para el cambio rápido, y permite al ciclista reducir tres marchas de una vez
                    - Incluye abrazadera
                    - Peso: 117 g',
                    'imagen' => 'mandoXT8100.webp'
                ], [
                    'nombre' => 'XX1 Eagle Trigger 12v',
                    'tipo' => 'Mando',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '159.95',
                    'descripcion_corta' => 'SRAM llega con el primer grupo de 12 velocidades jamás creado. Sin duda un gran paso en la evolución de los cambios de marchas que SRAM pone al alcance de todos los riders después de una gran trabajo de investigación y desarrollo.',
                    'descripcion_larga' => 'El mando de cambio SRAM XX1 Eagle Trigger es la parte esencial del nuevo grupo de 12 velocidades Eagle. Para esta nueva versión se ha rediseñado totalmente el mecanismo de funcionamiento para favorecer unos cambios más suaves y precisos, lo que se suma a la tecnología Zero Loss, que inicia el desplazamiento del cambio en el instante de pulsar la palanca y a la tecnología X-Actuation que mejora notablemente la calidad de cambios en los grupos monoplato. Además cuenta con la abrazadera Matchmaker X y la palanca de tracción ajustable que permite una configuración personalizada. Destacar por ultimo que la tapa y el pulsador están fabricados en Carbono para reducir su peso.

                    Características:
                    - Mando trasero (derecho)
                    - 12 velocidades
                    - Peso: 122 g
                    - Compatibilidad: Cambio trasero SRAM XX1 Eagle y X01',
                    'imagen' => 'mandoXX1eagle.webp'
                ], [
                    'nombre' => 'Ultegra R8000',
                    'tipo' => 'Cambio',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '89.95',
                    'descripcion_corta' => 'El cambio Shimano Ultegra R8000 de 11 velocidades con caja corta es la elección perfecta para los ciclistas profesionales y entusiastas. Con su rendimiento excepcional, fiabilidad y tecnología de vanguardia, este cambio mejorará tu experiencia de ciclismo y te ayudará a alcanzar nuevas metas.',
                    'descripcion_larga' => 'El cambio Shimano Ultegra R8000 ha sido diseñado para reducir el esfuerzo de cambio en la palanca, siendo al mismo tiempo seguro, rápido y preciso. Gracias a la tecnología Shadow RD integrada, con su diseño de bajo perfil probado en carrera, el cambio es más compacto y encaja más cerca del bastidor, garantizando menos daño en caso de colisión. El R8000 tiene muchas de las características del desviador R9100. El cambio trasero R8000 ha incorporado totalmente el diseño Dura Ace Shadow, protección completa debajo del cassette.

                    Características:
                    - Caja corta
                    - Piñón máximo: 30 dientes
                    - Peso: 200 g',
                    'imagen' => 'ultegrar8000.webp'
                ], [
                    'nombre' => 'Force AXS 36D 12V',
                    'tipo' => 'Cambio',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '292.95',
                    'descripcion_corta' => 'El cambio SRAM Force AXS 36D 12V es la elección perfecta para los amantes de la carretera. Su versatilidad, precisión y diseño inalámbrico lo convierten en la opción más cool del mercado.',
                    'descripcion_larga' => 'El cambio SRAM Force AXS 36D 12V realmente lo hace todo y se ve bien haciéndolo. La longitud de jaula única funciona con cualquier tamaño de casete de 10-28T a 10-36T, en configuraciones 1x o 2x. Los cambios son rápidos y precisos, y el amortiguador Orbit fluid mantiene la cadena bajo control, tanto si el obstáculo es un bache como una raíz. Y los gráficos resaltan lo justo para recordarte que tienes la transmisión totalmente inalámbrica más chula del mercado.

                    Características:
                    
                    Uso: Carretera
                    La tecnología Orbit de gestión de la cadena mantiene la transmisión silenciosa y segura
                    Compatible con transmisiones 1x y 2x
                    Compatible con SRAM AXS, lo que permite una fácil personalización
                    El desviador 36T-max es compatible con cassettes con piñones grandes de 28T a 36T
                    Dientes: 36D
                    Velocidades: 12V
                    Material: Aluminio',
                    'imagen' => 'force36.webp'
                ], [
                    'nombre' => 'Force 22 Hydro Disco',
                    'tipo' => 'Mando',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '348',
                    'descripcion_corta' => 'El doblemando SRAM Force 22 Hydro ofrece un ajuste inigualable a tus marchas, al separarlos de la palanca de freno, reduciendo notablemente el peso, así como el tiempo y costes de mantenimiento.',
                    'descripcion_larga' => 'El doblemando SRAM Force 22 Hydro incorpora la tecnología 2015 HydroR que es capaz de ofrecer un mejor frenado, más control y un mejor rendimiento en todas las condiciones.

                    Características:
                    - Peso: 471 g por rueda (maneta, pinzas, caja y disco 160 mm Centerline)
                    - Compatibilidad: Desviador SRAM Red 22, Force 22 & Rival 22 Yaw / Cambio Exact Actuation / SRAM Red 22, Force 22 & Rival 22 HRR & HRD',
                    'imagen' => 'mandoforce.webp'
                ], [
                    'nombre' => 'Ultegra Di2 R8170',
                    'tipo' => 'Mando',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '349.95',
                    'descripcion_corta' => 'Descubre el poderoso freno de disco hidráulico Shimano Ultegra R8170 de 2 pistones. Con su diseño avanzado y tecnología de precisión, este freno te brindará un control total en cada frenada.',
                    'descripcion_larga' => 'El freno de disco hidráulico delantero Shimano Ultegra R8170 2 pistones está compuesto por:

                    La maneta de freno de disco hidráulico izquierda Shimano Ultegra Di2 R8170 2x12V tiene una ergonomía totalmente nueva, una modulación de los frenos aún más precisa y un cambio electrónico inalámbrico. Esta trifecta te permite concentrarte en el siguiente sprint, en el siguiente descenso o en la siguiente broma de tu compañero. Aportan una modulación y un control mejorados en cada trayecto gracias a la tecnología SERVO WAVE de Shimano, de eficacia probada. La nueva plataforma Di2, utilizada tanto en Dura-Ace como en Ultegra, libera los cambios al tiempo que ofrece el cambio inalámbrico más rápido y fiable del mundo.
                    
                    Características:
                    - Uso: Carretera
                    - Modelo: Shimano Ultegra Di2 R8170
                    - Velocidades: 2x12V
                    - Peso: 391 g (par)
                    - Maneta de freno: Pinza de freno recomendada BR-R8170
                    - Tipo de maneta de cambio DUAL CONTROL LEVER
                    - Diseño con ergonomía sin parangón mejorada con la opinión de profesionales
                    - Control optimizado de los frenos
                    - Acción de maneta más ligera y suave
                    - Modulación mejorada gracias a una zona de control de frenado ampliada
                    - Compatible con conexión con cable e inalámbrica
                    - Alta eficiencia energética electrónica
                    
                    Tecnologías:
                    - SERVO WAVE: Cuando se tira de una maneta de freno SERVOWAVE, el recorrido inicial de la pastilla es rápido, de manera que solo se necesita un leve movimiento de la maneta para que las pastillas entren en contacto con el disco de freno. El factor multiplicador de potencia aumenta luego rápidamente en el punto de contacto "pastilla/llanta", de manera que el recorrido de la maneta se utiliza para aplicar una mayor potencia de frenado con un mayor control.',
                    'imagen' => 'mandoultegra.webp'
                ], [
                    'nombre' => 'Dura-Ace FC-R9100P HOLLOWTECH II',
                    'tipo' => 'Bielas',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '1153.65',
                    'descripcion_corta' => 'Una de las grandes novedades que presenta el nuevo Dura-Ace de Shimano es la integración de un medidor de potencia con el que puedes obtener una medición exacta de tus datos de potencia en tiempo real, para analizar y medir tu rendimiento. El medidor de potencia permite una integración completa y un fácil montaje y sincronización con dispositivos de otros fabricantes permitiendo el análisis y la medición más exacta de tu rendimiento anatómico. Además de la medición en vatios, se puede obtener la medición separada de las dos piernas, así como la cadencia.',
                    'descripcion_larga' => 'Bielas con potenciómetro Shimano Dura-Ace FC-R9100P HOLLOWTECH II de diseño integrado con sistema eléctrico fiable y impermeable en cualquier condición. Precisión de +/- 2% de la potencia con galga de esfuerzo. Sistema de medición de potencia estable en las distintas posiciones de elevación. Mantenimiento sencillo con batería integrada recargable. Los platos se cambian fácilmente sin afectar al rendimiento del medidor de potencia. Sistema inalámbrico de actualización de firmware. Respuesta rápida y funcionamiento sin esfuerzo. Conexión Bluetooth y ANT+.

                    Características:
                    - Juego de bielas de 4 brazos
                    - BCD: 110 mm
                    - Platos NO incluidos
                    - Longitud: 170, 172.5, 175 mm
                    - Para sistemas de 11 velocidades
                    - No incluye cazoletas
                    - Construcción Hollowtech II
                    - Ejes de pedalier compatibles: BB-R9100, BB92-41B
                    - Sensor de potencia en ambas bielas',
                    'imagen' => 'bieladuraace.webp'
                ], [
                    'nombre' => 'Force AXS DUB 46/33 12V',
                    'tipo' => 'Bielas',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '330',
                    'descripcion_corta' => 'Prepárese para un espaciado constante de 13 dientes para cambios rápidos e impecables, además de la ventaja adicional de una precisión de +/-1,5 % que no se verá afectada por los cambios de temperatura.',
                    'descripcion_larga' => 'Las bielas SRAM Force AXS  DUB 46/33 12V es el centro de su filosofía de cambio X-Range. Con espacios estrechos de 13 dientes entre platos y cassettes de amplio rango, los ciclistas obtienen más rango mientras cambian con menos frecuencia y permanecen más tiempo en el plato grande. Hasta ahora sólo disponibles en RED, sus platos integrados son ligeros, rígidos e increíblemente duraderos. El acabado negro combinado con los deslumbrantes brazos de carbono brillante elevarán cualquier bicicleta.

                    La forma exclusiva del plato da como resultado unas bielas más ligeras, rígidas y duraderas. La tecnología de cambio X-Range te proporciona más rango y una progresión de marchas más suave, para que siempre estés en la marcha correcta. Los cambios delanteros son nítidos y precisos y sus bielas son de fibra de carbono para mayor ligereza y rigidez. El pedalier DUB añade durabilidad y simplicidad.
                    
                    Características:
                    
                    Uso: Carretera
                    Velocidades 12
                    Compatibilidad BB Todos los SRAM Road DUB BBs
                    Tamaño de plato 46/33
                    Longitud del brazo de biela: 170mm, 172.5mm, 175mm
                    Interfaz eje BB DUB
                    Material del plato: Aluminio
                    Diámetro del círculo de pernos (BCD) Direct Mount (DM)
                    Material del brazo de biela: Carbono',
                    'imagen' => 'bielasforce.webp'
                ], [
                    'nombre' => 'GOSSAMER Pro BB386 10/11V 50/34',
                    'tipo' => 'Bielas',
                    'id_marca' => '3',
                    'id_proveedor' => '3',
                    'precio' => '164.95',
                    'descripcion_corta' => 'Las Bielas FSA GOSSAMER Pro BB386 10/11V 50/34 son el complemento perfecto para los ciclistas más exigentes. Su diseño de calidad superior garantiza un rendimiento óptimo, y su compatibilidad con 10 y 11 velocidades las convierte en una elección versátil.',
                    'descripcion_larga' => 'Las bielas FSA GOSSAMER Pro BB386 10/11V 50/34 tienen una rigidez sobresaliente y un peso muy contenido.

                    Características:
                    - Uso: Carretera
                    - BCD: 170 mm
                    - Material: aluminio
                    - Medidas platos: 50x34
                    - 10/11 velocidades
                    - Longitud bielas: 170,172.5,175',
                    'imagen' => 'bielasfsa.webp'
                ], [
                    'nombre' => 'XX1 Eagle DUB BOOST Direct Mount 34D dorado',
                    'tipo' => 'Bielas',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '537.95',
                    'descripcion_corta' => 'DUB (Durable Unified Bottom bracket ) son las siglas del nuevo sistema de bielas y pedalier diseñado por SRAM, un concepto nuevo que presenta las mejores virtudes de los dos sistemas más utilizados actualmente: la rigidez del eje de acero de 24 mm de diámetro con la ligereza del eje de aluminio de 30 mm.',
                    'descripcion_larga' => 'Las bielas SRAM XX1 Eagle DUB BOOST están fabricadas en Fibra de Carbono y su interior está hueco, resultando perfectas para la modalidad de Cross Country. Están disponibles en las medidas de 170 y 175 mm y es compatible con los nuevos ejes SRAM DUB de 28.9 mm que llegan para ser el nuevo estándar. Además montan los nuevos platos Direct Mount (fijación directa) con el nuevo tallado X-Sync 2. Este nuevo tallado del plato ha sido ideado para mantener la cadena estable, reducir la fricción y evacuar el barro, aumentando su durabilidad, siendo específica para los grupos monoplato.

                    Características:
                    - Juego de bielas para platos Direct Mount
                    - Plato: 34 dientes (compatible con Eagle 30, 32, 34, 36 ,38)
                    - Peso: 422 g (175 mm, 32D)
                    - Longitud: 170, 175 mm
                    - Para sistemas de 12 velocidades
                    - No incluye cazoletas
                    - Línea de cadena: 52 mm
                    - Eje de pedalier compatible: DUB BSA, DUB PF92, DUB BB30, DUB PF30
                    - Compatibles con el eje trasero BOOST',
                    'imagen' => 'bielasXX1.webp'
                ], [
                    'nombre' => 'XX1 Eagle PowerLock 12v 126 eslabones multicolor',
                    'tipo' => 'Cadena',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '84.95',
                    'descripcion_corta' => 'La cadena de 12v multicolor',
                    'descripcion_larga' => 'La cadena SRAM Eagle X01 es la pieza clave para que todo el engranaje del cambio funcione a la perfección. Cuenta con las tecnologías Hard Chrome y el tratamiento Titanium Nitride que tienen como objetivo mantener la corrosión a raya y mantiene el eslabón rápido que de tantos líos nos ha sacado pero que en la versión Eagle se rediseña también para garantizar su eficacia. Dado que la distancia entre las coronas es menor, la cadena también sufre un ligero estrechamiento, por este motivo SRAM ha recurrido a nuevos métodos de fabricación: cada eslabón está realizado mediante una técnica progresiva de estampación sobre el metal en varias fases, que otorga una alta precisión.
                    Esta cadena tiene como única diferencia con respecto a su hermana mayor, la XX1, el color.
                    
                    Características:
                    - 126 eslabones
                    - Compatible con SRAM Eagle X01 y XX1
                    - Sólo válidas para sistema monoplato
                    - Única cadena compatible con los grupos SRAM Eagle
                    - Incluye eslabón conector PowerLock con tecnología Flow Link',
                    'imagen' => 'xx1rainbow.webp'
                ], [
                    'nombre' => 'XX1 Eagle PowerLock 12v 126 eslabones gold',
                    'tipo' => 'Cadena',
                    'id_marca' => '2',
                    'id_proveedor' => '5',
                    'precio' => '84.95',
                    'descripcion_corta' => 'La cadena de 12v en color oro',
                    'descripcion_larga' => 'La cadena SRAM Eagle X01 es la pieza clave para que todo el engranaje del cambio funcione a la perfección. Cuenta con las tecnologías Hard Chrome y el tratamiento Titanium Nitride que tienen como objetivo mantener la corrosión a raya y mantiene el eslabón rápido que de tantos líos nos ha sacado pero que en la versión Eagle se rediseña también para garantizar su eficacia. Dado que la distancia entre las coronas es menor, la cadena también sufre un ligero estrechamiento, por este motivo SRAM ha recurrido a nuevos métodos de fabricación: cada eslabón está realizado mediante una técnica progresiva de estampación sobre el metal en varias fases, que otorga una alta precisión.
                    
                    Características:
                    - 126 eslabones
                    - Compatible con SRAM Eagle X01 y XX1
                    - Sólo válidas para sistema monoplato
                    - Única cadena compatible con los grupos SRAM Eagle
                    - Incluye eslabón conector PowerLock con tecnología Flow Link',
                    'imagen' => 'xx1gold.webp'
                ], [
                    'nombre' => 'Dura-Ace/XTR 9100 12V/11VR 138 eslabones',
                    'tipo' => 'Cadena',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '53.95',
                    'descripcion_corta' => 'La cadena de Shimano presenta una placa de enlace interna extendida que se conecta perfectamente con las nuevas formas de dientes de platos que la id_marca presenta en este nuevo conjunto para MTB.',
                    'descripcion_larga' => 'La cadena Shimano para el grupo Dura-Ace/XTR 9100 CN-M9100 especialmente diseñada para los nuevos componentes de 12 velocidades de la id_marca. Incluye la tecnología Hyperglide +, se basa en un diseño distintivo donde se incorporan rampas de cambio y perfiles de dientes especialmente posicionados para un mejor control de la cadena durante el cambio. El resultado es un cambio fluido, rápido y sensible. Cuenta con una área más grande en el extremo de la pestaña interior que sostiene el diente en la parte delantera t el piñón del cassette. Montaje y cierre a partir de Quick-Link (SM-CN910-12) sin herramientas para las actuales cadenas Shimano de 11 y 12 velocidades, proporciona al usuario una gran comodidad. No reutilizable.

                    Beneficios para el ciclista:
                    - Conducción suave incluso en terrenos abruptos
                    - Compatible con la nueva generación de transmisión XTR
                    - Mejora significativamente el rendimiento del cambio
                    - Instalación fácil, cierre a través de Quick- Linck
                    
                    Características:
                    - Uso: MTB, Carretera, Gravel
                    - Tecnologías: Hyperglide + y Quick link
                    - 138 eslabones
                    - Placa de enlace y rodillo: SIL-TEC
                    - Acabado: cromado',
                    'imagen' => 'cadenaxtr.webp'
                ], [
                    'nombre' => 'Ekar 13V 118 eslabones gris plata',
                    'tipo' => 'Cadena',
                    'id_marca' => '4',
                    'id_proveedor' => '2',
                    'precio' => '34.95',
                    'descripcion_corta' => 'Descubre la innovadora Cadena Campagnolo Ekar 13V 118 eslabones, diseñada para brindarte un rendimiento impecable y durabilidad incomparable en tus aventuras fuera de carretera. ¡Agrega potencia y precisión a tus recorridos con esta cadena de alto rendimiento!',
                    'descripcion_larga' => 'La cadena Campagnolo Ekar 13V 118 eslabones proporciona una conducción eficiente, en la conducción sobre grava, una cadena debe funcionar perfectamente para contribuir a que el desviador realice cambios de marcha rápidos y suaves, y permanezca siempre segura. También debe ser fuerte y duradera, y la cadena Ekar ofrece resultados impresionantes en todos los frentes. Con solo 4,9 mm de ancho, la cadena es 0,25 mm más estrecha que la cadena Campagnolo de 12 velocidades altamente eficiente, pero ofrece exactamente el mismo alto rendimiento y durabilidad por los que son conocidas las cadenas Campagnolo. Se acopla de manera efectiva con el diseño de dientes anchos y estrechos de los platos y piñones de cassette de 1x13 velocidades de Ekar para una transmisión positiva, eficiente y de baja fricción, y se beneficia de una alta seguridad.

                    Características:
                    - Uso: Gravel
                    - 13 velocidades
                    - 118 eslabones
                    - Peso: 242 g
                    - Desarrollada específicamente para el sistema de grava Ekar de 1x13 velocidades
                    - Eslabones fuertes y duraderos, con diferentes grados de acero y recubrimientos para mayor resistencia y resistencia al desgaste',
                    'imagen' => 'cadenacampagnolo.webp'
                ], [
                    'nombre' => 'Ultegra Di2 12v',
                    'tipo' => 'Grupo',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '2050',
                    'descripcion_corta' => 'Un kit novedoso e ideal para poner tu bicicleta a punto para tus rutas más largas.',
                    'descripcion_larga' => 'El kit Shimano Ultegra Di2 12V está compuesto por:

                    La maneta de freno de disco hidráulico izquierda Shimano Ultegra Di2 R8170 2x12V tiene una ergonomía totalmente nueva, una modulación de los frenos aún más precisa y un cambio electrónico inalámbrico. Esta trifecta te permite concentrarte en el siguiente sprint, en el siguiente descenso o en la siguiente broma de tu compañero. Aportan una modulación y un control mejorados en cada trayecto gracias a la tecnología SERVO WAVE de Shimano, de eficacia probada. La nueva plataforma Di2, utilizada tanto en Dura-Ace como en Ultegra, libera los cambios al tiempo que ofrece el cambio inalámbrico más rápido y fiable del mundo.
                    
                    La pinza de freno hidráulica delantera Shimano Ultegra R8170 2 pistones ofrece una modulación mejorada, un sistema de frenos más silencioso y un proceso de purga más fácil que nunca. La pinza de freno de disco  aporta un nuevo nivel de control al mundo del ciclismo de carretera con una modulación mejorada y un punto de frenado inicial más rápido. A pesar de su construcción más pequeña, el sistema es más silencioso que nunca y su mantenimiento es más sencillo.
                    
                    El freno de disco hidráulico trasero Shimano Ultegra Di2 2x12V están rediseñadas y tienen una ergonomía totalmente nueva, una modulación de los frenos aún más precisa y un cambio electrónico inalámbrico. Esta trifecta te permite concentrarte en el siguiente sprint, en el siguiente descenso o en la siguiente broma de tu compañero. Las nuevas manetas de freno de Shimano aportan una modulación y un control mejorados en cada trayecto gracias a la tecnología SERVO WAVE de Shimano, de eficacia probada. La nueva plataforma Di2, utilizada tanto en Dura-Ace como en Ultegra, libera los cambios al tiempo que ofrece su cambio inalámbrico más rápido y fiable. Tu tiempo en la bicicleta es precioso, deja que Shimano lo haga aún mejor.
                    
                    El desviador Shimano Ultegra Di2 R8150 2x12V es más compacto y rápido que nunca, el desviador realiza cambios delanteros con precisión digital en cualquier circunstancia. Combinando la nueva plataforma Di2 de Shimano y la encarnación para carretera de HYPERGLIDE+, el desviador cambia entre platos con la acción más rápida y perfecta del mercado.

                    El cambio Shimano Ultegra Di2 R8150 12V cuenta con la función Synchronized Shift. Esto permite simplificar el control de los piñones, los cambios sincronizados permiten al ciclista trabajar solamente con la maneta derecha "Full Synchro Shift". Con esta tecnología, un simple cambio de piñón en el cassette determina de forma automática la selección del plato delantero, para mantener la línea de cadena y la cadencia. El modo "Semi Synchro Shift" también está disponible y con la que controlarás solo el mando de los platos: la cadena se alinea de forma automática en el mejor desarrollo posible en el cassette.
                    
                    ',
                    'imagen' => 'gruposhimanoultegradi2.webp'
                ], [
                    'nombre' => 'XX Eagle AXS 36D',
                    'tipo' => 'Grupo',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '2000',
                    'descripcion_corta' => 'El grupo completo SRAM XX T-T Eagle AXS 165 mm 36D es la elección perfecta para los ciclistas de enduro que buscan un equilibrio entre robustez y peso. Su sistema sincronizado y la tecnología X-SYNC garantizan cambios fluidos y precisos, mientras que su diseño elegante y sus múltiples características lo hacen una opción superior. ¡No te pierdas la oportunidad de experimentar la potencia de este grupo completo!',
                    'descripcion_larga' => 'Con el equilibrio perfecto entre robustez y ahorro de peso, el grupo XX Eagle AXS E-Bike Transmission tiene la fuerza necesaria para afrontar grandes jornadas de enduro con el peso necesario para hacerlo manejable. Sus nuevas transmisiones adoptan un enfoque holístico del cambio de una bicicleta, todo un sistema sincronizado, proporcionándole una experiencia de conducción superior. El cambio bajo carga es posible en el cassette XX gracias a la combinación de la tecnología X-SYNC y el mapeado del cassette, creando cambios fluidos incluso durante tus salidas de mayor potencia. Las bielas XX ISIS están disponibles tanto para sistemas Bosch como Brose y se basan en nuestro probado diseño de años anteriores. Incorporan nuestros nuevos platos T-Type y vienen con un protector de clip. Específicamente diseñada para optimizar la transmisión Eagle, la cadena XX Eagle Transmission Flattop cuenta con una parte superior plana única. Esta forma no sólo maximiza el rendimiento del cambio y la robustez, sino que también contemporiza el aspecto de su superbike. Con un diseño de dos botones "click and fire", el AXS Pod Ultimate transforma el acto crucial de las entradas del ciclista en una experiencia mucho más personal para todos sus controles AXS.

                    Características:
                    
                    Variantes Bosch y Brose
                    Disponible con biela de 165mm y plato de 36T
                    Incluye protector de clip
                    Compatible con Bashguard
                    Desviador XX Eagle Transmission
                    Casete 10-52T XX Eagle Transmission
                    Cadena Flattop XX Transmission
                    Controlador Pod Ultimate
                    Variante de medidor de potencia disponible
                    Batería/cargador AXS',
                    'imagen' => 'grupoaxs.webp'
                ], [
                    'nombre' => 'Rival AXS 12V',
                    'tipo' => 'Grupo',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '1450',
                    'descripcion_corta' => 'El kit SRAM Rival AXS 12V es la elección perfecta para los ciclistas que buscan un rendimiento excepcional. Con su amplio rango, cambio suave y lógica de cambio eTap, siempre estarás en la marcha correcta. Además, la tecnología Orbit garantiza una gestión de cadena de nivel siguiente, mientras que los frenos de disco de la plataforma HRD de SRAM ofrecen un rendimiento excepcional. Con el sistema Rival Etap AXS, cambiarás más rápido y con menos esfuerzo.',
                    'descripcion_larga' => 'El kit SRAM Rival AXS 12V ofrece todos los avances disponibles, incluido un mayor rango y una progresión de marcha más suave y la simplicidad de la lógica de cambio eTap, para que siempre esté en la marcha correcta. AXS le permite personalizar fácilmente el grupo desde su teléfono y habilitar sus opciones mientras conduce. La tecnología Orbit ofrece una gestión de la cadena de nivel siguiente para todos los lugares a los que puede ir una bicicleta con barra desplegable. Agregue un rendimiento excepcional de frenos de disco de la galardonada plataforma HRD de SRAM y su verdadera innovación para un verdadero avance.

                    Con el sistema Rival Etap AXS al alcance de su mano, cambiará más, con menos esfuerzo y dedicará menos tiempo a hacerlo. Las palancas de carbono ErgoBlade y las grandes palancas de cambio SRAM eTap más texturizadas proporcionan controles positivos para la entrada del jinete. Además, los controles ErgoFit están equipados con capuchas texturizadas para una mejor sensación. Finalmente, cada palanca cuenta con dos puertos para desplazadores Blips (no incluidos) y tecnología Bleeding Edge para una purga de frenos fácil y limpia. 
                    
                    Este kit incluye:
                    Batería SRAM para Red eTap/AXS
                    Cargador SRAM para Red eTap
                    Freno de disco hidráulico trasero SRAM Rival eTap AXS
                    Freno de disco hidráulico delantero SRAM Rival eTap AXS
                    Cambio SRAM Rival eTap AXS 12V
                    Desviador SRAM Rival eTap AXS 2x12V
                    Cassette SRAM Rival AXS XG-1250 12V 10-30
                    Cadena SRAM Rival AXS 12V 120 eslabones',
                    'imagen' => 'gruporival.webp'
                ], [
                    'nombre' => 'GX Eagle DUB 32D',
                    'tipo' => 'Grupo',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '385',
                    'descripcion_corta' => 'El grupo SRAM GX Eagle pone al alcance de todos los riders el popular cambio de 12 velocidades con un precio asequible a cualquier bolsillo.',
                    'descripcion_larga' => 'El grupo completo SRAM GX Eagle 1x12v está formado por los siguientes componentes:

                        - Bielas GX Eagle DUB BOOST de 170 o 175 mm
                        - Mando de cambio derecho GX Eagle Trigger
                        - Cambio trasero GX Eagle
                        - Cadena GX Eagle
                        - Cassette GX Eagle XG-1275 10-52',
                    'imagen' => 'grupogx.webp'
                ], [
                    'nombre' => 'Hope Tech 3 Duo negro derecha',
                    'tipo' => 'Maneta',
                    'id_marca' => '6',
                    'id_proveedor' => '2',
                    'precio' => '240',
                    'descripcion_corta' => 'Hope es uno de los líderes mundiales en la ingeniería de componentes para bicicletas.',
                    'descripcion_larga' => 'La palanca de freno derecha Hope Tech 3 Duo está dirigido a personas que desean operar individualmente 2 pinzas de una sola mano. El freno maestro se combina con las pinzas X2 o E4 que se adaptan a cualquier conducción de XC a Enduro / All mountain. El diseño se deriva del probado cilindro maestro Tech 3 y con el alcance de los dedos y los ajustes del punto de mordida en cada palanca, puede estar seguro de que las palancas se sentirán cómodas y se adaptarán a su estilo de conducción.

                    Características:
                    - Palanca Duo compatible con pinzas X2, E4 y V4
                    - La palanca Tech 3 ofrece un genuino punto de mordida y ajuste de alcance sin herramientas
                    - CNC mecanizado a partir de aleación de aluminio T6 2014
                    - Montaje de conector de manguera gran angular
                    - Accesorio de entrada superior
                    - Anodizado para mayor durabilidad
                    - CNC mecanizado a partir de aleación de aluminio T6 2014
                    - Compatible con una amplia gama de discos de 160mm a 220mm',
                    'imagen' => 'manetahopetech3.webp'
                ], [
                    'nombre' => 'Level Ultimate G2',
                    'tipo' => 'Maneta',
                    'id_marca' => '2',
                    'id_proveedor' => '2',
                    'precio' => '139',
                    'descripcion_corta' => 'La gama Level de SRAM es una potente línea de frenos compuesta por 5 versiones en función de la calidad de los componentes, y se orientan inicialmente para las modalidades XC y trail.',
                    'descripcion_larga' => 'Maneta de freno SRAM Level Ultimate G2 completa consta con un diseño de pinza de 2 pistones, con función Flip- Flop que permite la instalación tanto en la maneta izquierda como derecha. La palanca esta fabricada en carbono. No incluye manguera ni accesorios para su montaje. Compatible con los frenos Trail de Avid y con MMX.',
                    'imagen' => 'manetalevel.webp'
                ], [
                    'nombre' => 'Alivio T4010',
                    'tipo' => 'Maneta',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '12.99',
                    'descripcion_corta' => 'Descubre la Maneta de freno izquierda Shimano Alivio T4010, una elección perfecta para mejorar tu experiencia ciclista. Con su diseño ergonómico y materiales de alta calidad, esta maneta te brinda un control preciso y seguro en cada frenada.',
                    'descripcion_larga' => 'Características:
                    - Uso: MTB
                    - Modelo: Alivio T4010
                    - Lado izquierdo',
                    'imagen' => 'manetaalivio.webp'
                ], [
                    'nombre' => 'Ergopower Centaur 11V negro',
                    'tipo' => 'Maneta',
                    'id_marca' => '4',
                    'id_proveedor' => '3',
                    'precio' => '150',
                    'descripcion_corta' => '',
                    'descripcion_larga' => '',
                    'imagen' => 'manetacentaur.webp'
                ], [
                    'nombre' => 'XT M8100 izquierda',
                    'tipo' => 'Maneta',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '57.99',
                    'descripcion_corta' => 'La palanca de freno izquierda Shimano XT M8100 es la elección perfecta para los ciclistas apasionados que buscan el máximo rendimiento en sus aventuras. Con su diseño de alta calidad, durabilidad excepcional y funcionalidad impecable, esta palanca de freno mejorará tu experiencia en bicicleta y te brindará la confianza necesaria para conquistar cualquier sendero. ',
                    'descripcion_larga' => 'La palanca de freno izquierda Shimano XT M8100 está diseñada para frenos de disco hidráulicos.

                    Características:
                    - Maneta de freno de disco hidráulico
                    - Posición optimizada del eje de la maneta con un punto de contacto adicional y ergonomía mejorada
                    - La disposición del cockpit es más flexible y más optimizada para el accionamiento
                    - Un 10 % más rígida que M8000 incluso a altas temperaturas
                    - Aplicación de los frenos más rápida con recorrido libre más corto
                    - Ajuste de alcance sin herramientas
                    - Ajuste de recorrido libre
                    - El frenado intuitivo y versátil mantiene su concentración sobre el recorrido
                    - Alta rigidez
                    - Ajuste adaptado al ciclista
                    - Pinza de freno recomendada: BR-M8100, BR-M8120
                    - Palanca para 2 dedos
                    - Ajuste de alcance: Sin herramienta',
                    'imagen' => 'manetashimanoxt8100.webp'
                ], [
                    'nombre' => 'Ultegra R8070 trasera',
                    'tipo' => 'Pinza',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '86.99',
                    'descripcion_corta' => 'Máxima potencia y cualidad de frenado con las Shimano R8070 específicas para bicicletas de carretera.',
                    'descripcion_larga' => 'La pinza de freno Shimano Ultegra R8070 para freno hidráulico ofrece un mayor control de la frenada en cualquier condición. Gracias al diseño estrecho resulta perfecto para bicicletas de carretera aero y está diseñado para integrarse sin rupturas en el perfil de una bicicleta de carretera.

                    Características:
                    - Tipo: hidráulico Flat Mount
                    - Mejor dispersión del calor
                    - Tecnología Ice-Tech
                    - Peso: 280 g (PAR)
                    - Compatible con disco de 140 y 160 mm',
                    'imagen' => 'pinzaultegratrasera.webp'
                ], [
                    'nombre' => 'Ultegra R8000 tuercas surtidas',
                    'tipo' => 'Pinza',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '159.99',
                    'descripcion_corta' => 'Este juego de puentes de freno Shimano Ultegra R8000 con tuercas surtidas es la elección perfecta para mejorar el rendimiento de tu bicicleta. Diseñados con la calidad superior de Shimano, estos puentes proporcionan un frenado excepcional y una mayor durabilidad.',
                    'descripcion_larga' => 'El juego de puentes de freno Shimano Ultegra R8000 ofrece un diseño muy compacto, con espacios más estrechos entre los brazos. La holgura más amplia lo hace compatible con cubiertas de tamaños mayores (hasta 28C). El estabilizador entre los ejes reduce la deformación y mejora la eficiencia de frenado, ofreciendo una sensación de contacto clara con rigidez equilibrada, peso y gran poder de frenado.

                    Características:
                    - Puentes de freno de doble pivote (Dual Pivot)
                    - Equilibrio perfecto entre rigidez, potencia de frenado y peso reducido
                    - Un estabilizador entre brazos reduce la flexión y aumenta la eficacia del frenado
                    - Potencia de frenado lineal y precisa
                    - Puente más compacto y seguro
                    - Mayor distancia entre cubierta y cuerpo del freno
                    - Compatible con cubiertas de hasta 28 mm',
                    'imagen' => 'puentesultegra.webp'
                ], [
                    'nombre' => 'XT M8120 Post Mount',
                    'tipo' => 'Pinza',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '116.99',
                    'descripcion_corta' => 'La Pinza de freno Shimano XT M8120 Post Mount es la elección perfecta para los amantes del mountain bike que buscan un rendimiento excepcional. Con su diseño robusto y tecnología avanzada, garantiza una potencia de frenado superior y una respuesta precisa en cada terreno. ¡Aumenta tu confianza en las frenadas y disfruta de la máxima seguridad en tus aventuras!',
                    'descripcion_larga' => 'La pinza de freno Shimano XT M8120 Post Mount proporciona una gran frenada y control de la bicicleta.

                    Características:
                    - Puente de freno de disco hidráulico
                    - Retracción de pistones más rápida
                    - Reduce el ruido de bamboleo del rotor del freno de disco e incrementa la potencia de frenado en un 10 % (comparado con M8000)
                    - Cuatro pistones
                    - Conexión tipo banjo y tendido interno de los latiguillos
                    - La modulación superior le brinda mayor control
                    - Manguito de freno (kit): SM-BH90-SBM
                    - Tipo de freno: Hydraulic disc brake
                    - Perno de fijación de la pinza Método antiaflojamiento: Snap ring
                    - Perno de fijación de la pinza Tamaño de herramienta: 5 mm
                    - Unión de manguitos: Banjo
                    - Especificación J-Kit (para fabricantes de equipos originales)
                    - Tipo de soporte (disponible para soporte IS con adaptador): Post-type
                    - Aceite: Shimano Mineral
                    - Pastilla Opción: D03S Resin (w/o fin), D02S Metal (w/o fin)
                    - Pastilla Estándar: N03A Resin (w/ fin), N04C Metal (w/ fin)
                    - Soporte de pastilla: Pad axle
                    - Maneta de freno recomendada: BL-M8100
                    - Disco de freno recomendado: RT-MT800
                    - Pinza compatible con pastillas Ice Technology
                    - La elevada potencia de frenado incorpora mayor confianza y control al bajar cuestas
                    - Montaje rápido y sencillo',
                    'imagen' => 'pinzaxt.webp'
                ], [
                    'nombre' => 'Campagnolo Chorus Standard Dual Pivot',
                    'tipo' => 'Pinza',
                    'id_marca' => '4',
                    'id_proveedor' => '3',
                    'precio' => '97',
                    'descripcion_corta' => 'Ofrece un rendimiento de frenado potente pero modular, lo que garantiza un excelente nivel de control.',
                    'descripcion_larga' => 'El juego puentes de freno Campagnolo Chorus Standard Dual Pivot ofrece un rendimiento de frenado potente pero modular, lo que garantiza un excelente nivel de control.

                    Características:
                    - Uso: Carretera
                    - Juego delantero y trasero
                    - Tipo de montaje de freno : pinza de corto alcance (39 mm - 49 mm)
                    - Grupo Campagnolo Chorus de 2 x 12 velocidades
                    - Peso: 330 g
                    - El diseño de doble pivote garantiza un frenado más potente que un solo pivote, especialmente cuando las pastillas están cerca de la superficie de frenado
                    - Los brazos de esqueleto de aleación forjada son ligeros y rígidos
                    - Los soportes de almohadilla ajustables permiten un micro ajuste
                    - Sistema de acoplamiento / desacoplamiento de pastillas para un reemplazo rápido y seguro de las pastillas',
                    'imagen' => 'pinzachorus.webp'
                ], [
                    'nombre' => 'XTR 9100 Center Lock 160/140mm T Freeza',
                    'tipo' => 'Disco',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '90',
                    'descripcion_corta' => 'La construcción Ice-Technologies Freeza del rotor aumenta la disipación de calor en 20 grados centígrados gracias a una pintura que disipa el calor en los segmentos expuestos de la capa de aluminio',
                    'descripcion_larga' => 'El disco de freno Shimano XTR 9100 Center Lock cuenta con una construcción renovada ICE- TECHNOLOGIES FREEZA. Esta tecnología aplicada por Shimano utiliza una pala de rotor revestida junto con una estructura en forma de sándwich de 3 capas de acero inoxidable, aluminio y acero inoxidable proporcionando un mejor rendimiento de radiación alcanzando temperaturas de 300 a 400 grados. Gracias a esta estructura y el revestimiento permite un enfriamiento óptimo para un rendimiento constante incluso en largos tramos de bajada. Se ha reducido 10g el peso total del componente en comparación con el anterior disco hidráulico de la id_marca RT99. Su instalación a partir de el sistema Center Lock, se facilita a través de un montaje a partir de un anillo central de seguridad anclado directamente al buje con la montura spline dentada, mejorando la precisión y la rigidez a la vez que mejora la eficacia de la frenada.

                    Beneficios para el ciclista:
                    - Alto rendimiento constante del frenado
                    - Nueva construcción ICE TECHNOLOGIES FREEZA para aumentar la disipación del calor
                    - Rendimiento de frenado estable y versátil en las condiciones más exigentes
                    - Diferentes tamaños de rotor para una mayor adecuación del componente
                    
                    Características:
                    - Peso: 108 g -160 mm/ 90 g - 140 mm
                    - Uso: MTB
                    - Tamaño discos: 160, 140 mm
                    - Fijación Center Lock
                    - Compatible con pastillas de resina',
                    'imagen' => 'discoxtr.webp'
                ], [
                    'nombre' => 'Wave 160 mm de UNIV 6T',
                    'tipo' => 'Disco',
                    'id_marca' => '5',
                    'id_proveedor' => '15',
                    'precio' => '34',
                    'descripcion_corta' => 'Sus características innovadoras garantizan una mayor potencia de frenado y una disipación eficiente del calor, brindando una experiencia de conducción segura y emocionante.',
                    'descripcion_larga' => 'l disco de freno Wave de Galfer está fabricado en acero inoxidable de alto contenido en carbono AISI 420. Galfer ha creado la id_marca registrada DISC WAVE para diferenciar este nuevo disco de freno que ofrece las máximas prestaciones.

                    Características:
                    - Menor peso
                    - Mayor potencia de frenada
                    - Mayor capacidad de disipación del calor
                    - Menor temperatura de trabajo
                    - Menor tendencia a la deformación
                    - Excelente resistencia a la corrosión
                    - Peso: 79 g',
                    'imagen' => 'discogalfer160.webp'
                ], [
                    'nombre' => 'Shark DB024W 203 mm',
                    'tipo' => 'Disco',
                    'id_marca' => '5',
                    'id_proveedor' => '15',
                    'precio' => '101.90',
                    'descripcion_corta' => 'Con su diseño de última generación y materiales de alta calidad, garantiza un frenado seguro y eficiente en cualquier terreno. ',
                    'descripcion_larga' => 'El disco de freno Galfer Shark DB024W 203 mm es un modelo de gran eficacia con una frenada potente y controlada para las E-Bike. Tiene un diseño de alta calidad y está fabricado con acero inoxidable hi-ten, de alto tenor de carbono, y con tratamiento anticorrosión. Es muy silencioso y reduce las vibraciones en gran medida. Resiste a las temperaturas más altas y mantiene sus condiciones intactas en condiciones de lluvia o de seco.

                    Características:
                    
                    Uso: MTB, E-Bike
                    Diámetro del disco: 203mm
                    Grosor disco: 2mm
                    Fijación disco: 6 Tornillos
                    Tipo de Disco: Normal',
                    'imagen' => 'discogalfershark203.webp'
                ], [
                    'nombre' => 'Hope Disc IS 6-bolt 160 mm azul',
                    'tipo' => 'Disco',
                    'id_marca' => '6',
                    'id_proveedor' => '2',
                    'precio' => '55',
                    'descripcion_corta' => 'Con su diseño de 6 pernos y su tamaño ideal, este disco ofrece una increíble capacidad de frenado y durabilidad superior. ',
                    'descripcion_larga' => 'El disco de freno Hope Disc IS 6-bolt 160 mm permite una mejor gestión del calor y tienen un radio mecanizado en cada borde del rotor del freno. Tiene una superficie de fricción más grande que el modelo anterior, lo que lo hace más compatible con otros fabricantes de frenos. Apto para todas las pastillas de freno.

                    Características:
                    - Disco de freno
                    - Uso: Enduro
                    - Tamaño del rotor de disco : 160 mm
                    - Compatibilidad con: Disc IS 6-bolt
                    - Superficie de frenado de acero inoxidable cortada con láser
                    - Incluye tornillos de rotor
                    - Peso: 115 g',
                    'imagen' => 'discohope.webp'
                ], [
                    'nombre' => 'XT M8100',
                    'tipo' => 'Kit de frenos',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '210',
                    'descripcion_corta' => 'Este kit de freno de disco hidráulico trasero y delantero Shimano XT M8100 es la elección perfecta para los ciclistas de montaña que buscan potencia de frenado y ligereza. Con tecnologías como SERVOWAVE ACTION, Reach Adjust, I-SPEC EV y Free Stroke, este kit garantiza la seguridad y el control del ciclista. Además, la pinza Shimano Deore XT M8100 ofrece un funcionamiento fiable y un sistema de purgado fácil y limpio con la tecnología ONE WAY BLEEDING.',
                    'descripcion_larga' => 'El freno de disco hidráulico Shimano XT M8100 trasero incluye maneta de freno con latiguillo de 1700 mm y pinza de freno con pastillas, se entrega sin purgar. Centrada en la reducción del peso y una potencia del frenado acorde con el ciclismo de montaña, la maneta proporciona una modulación intuitiva que permite al ciclista explorar sus límites con confianza.
                    
                    El freno de disco hidráulico Shimano XT M8100 delantero incluye maneta de freno con latiguillo de 1000 mm y pinza de freno con pastillas, se entrega sin purgar. Centrada en la reducción del peso y una potencia del frenado acorde con el ciclismo de montaña, la maneta proporciona una modulación intuitiva que permite al ciclista explorar sus límites con confianza.',
                    'imagen' => 'kitfrenoshimanoxt.webp'
                ], [
                    'nombre' => 'XT M8120 + Discos Center Lock',
                    'tipo' => 'Kit de frenos',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '449',
                    'descripcion_corta' => 'Opción imprescindible para los amantes del ciclismo, kit de frenos completos y discos',
                    'descripcion_larga' => 'El Kit de frenos de disco hidráulico Shimano XT M8120 + Discos Center Lock está compuesto por:

                    Freno de disco hidráulico trasero Shimano XT M8100
                    Freno de disco hidráulico delantero Shimano XT M8100
                    Disco de freno Shimano Ultegra CL800 Disc Center Lock interno
                    Disco de freno Shimano Ultegra RT-CL800 CENTER LOCK 160 mm',
                    'imagen' => 'kitfrenoshimanoxt8120.webp'
                ], [
                    'nombre' => 'Dura-Ace R9270',
                    'tipo' => 'Kit de frenos',
                    'id_marca' => '1',
                    'id_proveedor' => '2',
                    'precio' => '1420',
                    'descripcion_corta' => 'El kit freno de disco hidráulico Shimano Dura-Ace R9270 es perfecto para los ciclistas de carretera exigentes. Con características como la separación adicional de las pastillas que reduce el ruido, el sencillo proceso de purga y el peso ligero de 123 g, este kit te proporcionará un control de frenado excepcional. La maneta de freno cuenta con un diseño ergonómico mejorado y una acción más ligera y suave, mientras que la pinza de freno utiliza tecnología como Servo Wave y Reach Adjust para aumentar la potencia de frenado y adaptarse a cualquier tamaño de mano o preferencia de ciclismo.',
                    'descripcion_larga' => 'El kit freno de disco hidráulico Shimano Dura-Ace R9270 está compuesto por:

                    Freno de disco hidráulico trasero Shimano Dura-Ace R9270
                    Freno de disco hidráulico trasero derecho Shimano Dura-Ace R9270
                    
                    Características de la pinza:
                    
                    - Uso: Carretera
                    
                    - El 10% de separación adicional de las pastillas reduce el ruido del freno
                    
                    - Sencillo proceso de purga
                    
                    - Peso: 123 g
                    
                    - Aceite mineral Shimano
                    

                    Características de la maneta:
                    
                    - Uso: Carretera
                    
                    - Panel de visualización despejado: la conexión inalámbrica mejora el efecto aerodinámico y permite un mantenimiento sencillo
                    
                    - Diseño con ergonomía sin parangón mejorada con la opinión de profesionales
                    
                    - El pico elevado de la maneta mejora la ergonomía
                    
                    - Control optimizado de los frenos
                    
                    - Acción de maneta más ligera y suave
                    
                    - Modulación mejorada gracias a una zona de control de frenado ampliada
                    
                    - Compatible con conexión con cable e inalámbrica
                    
                    - Disponible para manetas de cambio satélite adicionales
                    
                    - Alta eficiencia energética electrónica
                    
                    - 1,5 a 2 de vida útil de la batería con baterías de maneta de cambio CR1632 fáciles de cambiar
                    
                    
                    Tecnologías:
                    - Servo Wave: El factor multiplicador de potencia aumenta luego rápidamente en el punto de contacto “pastilla/llanta”, de manera que el recorrido de la maneta se utiliza para aplicar una mayor potencia de frenado con un mayor control.
                    - Reach adjust: La maneta de freno está equipada con un mecanismo de ajuste de alcance. Se puede ajustar la distancia entre el puño de manillar y la maneta para adaptarla a cualquier tamaño de mano o tipo de ciclismo, así como a las preferencias individuales del ciclista.
                    - DCL: DCL significa DUAL CONTROL LEVER. Incorpora las funciones de freno y cambio en el sistema y permite una fácil utilización.',
                    'imagen' => 'kitfrenosduraace.webp'
                ], [
                    'nombre' => 'MT501 4 Pistones + Discos Center Lock',
                    'tipo' => 'Kit de frenos',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '280',
                    'descripcion_corta' => 'Frenos Shimano excelentes para cualquier modalidad de MTB. E-Bike y Enduro. Te proporcionaran una gran seguridad de frenado.',
                    'descripcion_larga' => 'El kit de frenos de disco hidráulico Shimano MT501 4 Pistones incluye la maneta de freno delantera con latiguillo de 1000 mm, la maneta de freno trasera con latiguillo de 1700 mm, las pinzas de freno con pastillas y los discos de freno con sistema Center Lock de 140,180 y 203 mm. Se entrega sin purgar. La maneta de freno MT500 facilita un ciclismo de montaña de alta potencia y con un buen rendimiento gracias a la tecnología SERVOWAVE ACTION y su compatibilidad con I-spec II.

                    Las manetas Shimano Deore MT501 adaptan una amplia variedad de tecnologías con el objetivo de garantizar la seguridad del ciclista:
                    
                    - SERVOWAVE ACTION: Al accionar la maneta, el recorrido inicial de la pastilla es más rápido, de manera que solo se necesita un leve movimiento de la maneta para que las pastillas entren en contacto con el disco de freno. El factor multiplicador de potencia aumenta luego rápidamente en el punto de contacto pastillas/disco, de manera que el recorrido de la maneta se utiliza para aplicar una mayor potencia de frenado con un mayor control.
                    - I-spec II: La tecnología I-spec II proporciona una estructura sencilla con abrazadera de la maneta de freno estrecha. Esto permite al ciclista tener más espacio en el manillar y un aspecto más limpio.
                    La pinza Shimano MT520 con un nuevo diseño de 4 pistones, el freno de disco hidráulico MT520 multiplica la confianza y la diversión del ciclista.
                    
                    Características técnicas:
                    - Longitud del latiguillo: 1000 mm y 1700 mm
                    - Pastillas de freno estándar: D03S resina, D02S metal
                    - Tipo de freno: Freno de disco hidráulico
                    - Tamaño de la maneta (dedo): 2 dedos
                    - Soporte de maneta de cambio compatible: I-spec II
                    - Tipo de aceite: Mineral
                    - Soporte de pastilla: Horquilla
                    - Pistón: 4
                    - Método antiaflojamiento: Anillo elástico
                    - Perno de fijación de la pinza: 5 mm
                    - Unión de manguitos: Recto
                    - Tipo de soporte (disponible para soporte IS con adaptador): Tipo de montaje en tija
                    - Maneta de freno recomendada: BL-MT501
                    - Pinza de freno recomendada: BR-MT500, BR-MT520
                    - Disco de freno recomendado: SM-RT70
                    - Medidas de disco de freno: 140 , 180 y 203 mm
                    - Sistema de fijación de freno: Center Lock
                    - Color: Negro',
                    'imagen' => 'kitfrenosmt501.webp'
                ],[
                    'nombre' => 'DT Swiss M 1900 Spline 30 mm 29" ',
                    'tipo' => 'Ruedas de montaña',
                    'id_marca' => '14',
                    'id_proveedor' => '16',
                    'precio' => '415',
                    'descripcion_corta' => 'Una llanta de aluminio contrastada, un sistema de piñón libre Ratchet LN y radios de acero entrelazados a mano proporcionan la fiabilidad que esperas de una rueda de enduro.',
                    'descripcion_larga' => 'El par de ruedas DT Swiss MTB M 1900 Spline 30 mm 29" Disc Center Lock Eje delantero 15x110 mm - Trasero 12x148 mm BOOST son unas llantas desarrolladas con un equilibrio óptimo entre durabilidad y peso te brinda eficientes características de escalada, así como resistencia a los impactos en las rutas estrechas. Gracias al nuevo sistema Ratchet LN y a una construcción experta a mano, esta rueda es una compañera fiable para sacar partido de los momentos de rueda libre en la montaña.

                    Características:
                    - Uso: MTB, Enduro
                    - Material: Aluminio
                    - Medida: 29"
                    - Anchura interior: 30 mm
                    - Anchura exterior: 35 mm
                    - Sistema de freno: Disc Center Lock
                    - Eje: Eje pasante 15x110 mm BOOST, 12x148 mm BOOST
                    - Incluye: Fondo de llanta Tubeless Ready, válvula Tubeless y adaptador IS
                    - Compatibilidad con: Shimano 11V, SRAM XD, Shimano 12V
                    
                    Tecnologías:
                    
                    - Tubeless Ready: Todas las ruedas DT Swiss son compatibles con neumáticos tubeless. También las versiones ASM son "tubeless ready", porque ya están equipadas con la cinta y llevan incluidas las válvulas tubeless.
                    
                    - Ángulo de enganche: El ángulo de enganche es el máximo grado en que la estructura del casete puede rotar hasta que los dientes del sistema de piñón libre se enganchan por completo entre ellos y aceleran el buje. Es posible calcular este ángulo dividiendo entre 360º el número de puntos de enganche del sistema de piñón libre.
                    
                    - Prolock: es un proceso mediante el cual se inyecta un líquido adhesivo de doble compuesto patentado en la rosca de la cabecilla, favoreciendo unas construcciones de rueda extremadamente duraderas. Al enroscar la cabecilla en el radio, se activa el adhesivo y este empieza a endurecerse.',
                    'imagen' => 'ruedasdt1900.webp'
                ],[
                    'nombre' => 'Fulcrum E-Metal 3 ',
                    'tipo' => 'Ruedas de montaña',
                    'id_marca' => '15',
                    'id_proveedor' => '3',
                    'precio' => '525.15',
                    'descripcion_corta' => 'Diseñadas con un eje delantero de 15/110 mm y trasero de 12/148 mm BOOST, estas ruedas te ofrecen un rendimiento superior y durabilidad excepcional. ',
                    'descripcion_larga' => 'El par de ruedas Fulcrum E-Metal 3 6-Bolts Eje delantero 15/110mm - Trasero 12/148 mm BOOST tienen el perfil diferenciado y asimétrico, los radios afinados de perfil variable, el buje reforzado con brida de disco pensada expresamente para los discos de diámetro mayor, necesarios para ralentizar el ímpetu de una E-Mtb.

                    Características:
                    - Tipo de cubierta: 2-Way Fit ready (Con cámara y Tubeless Ready)
                    - Diámetro: 27,5" y 29"
                    - Uso: MTB / Enduro
                    - Peso: 1990 gr
                    - Material de la rueda: Aluminio
                    - Detalle de la llanta: Aluminio, soldado
                    - Altura de la llanta delantera: 23 mm / trasera: 18 mm
                    - Anchura de la llanta 35 mm
                    - Ancho interno del canal 30 mm
                    - Sistema de frenado: Freno de disco
                    - Superficie de frenado: 6-Bolts
                    - Eje delantero: Eje pasante 15-110 mm BOOST
                    - Eje trasero: Eje pasante 12-148 mm BOOST
                    - Radios delanteros: 28, Izquierda 14 - Derecha 14 de acero bruñido
                    - Radios traseros: 28, Izquierda 14 - Derecha 14 de acero bruñido
                    - Cabecillas de aluminio, auto-bloqueo
                    - Buje delantero: Aluminio, bridas de aluminio
                    - Buje trasero: Aluminio, bridas de aluminio, Shimano
                    - Rodamientos de cartucho sellados
                    - Límite de peso: 150 kg',
                    'imagen' => 'ruedasfulcrummetal.webp'
                ],[
                    'nombre' => 'Speedsix Earth XTRA 29 ISO BOOST',
                    'tipo' => 'Ruedas de montaña',
                    'id_marca' => '27',
                    'id_proveedor' => '2',
                    'precio' => '1495',
                    'descripcion_corta' => 'La nueva Earth Xtra es la mejor opción para los amantes del Mtb. Ya no te importará a que tipo de terreno te enfrentas o los kilómetros de tus salidas, por fin dispones de ruedas de carbono anchas para mtb que, al no penalizarte en peso, se convierten en tus llantas de carbono perfectas para cualquier disciplina en Mountain Bike.',
                    'descripcion_larga' => 'El par de ruedas Speedsix Earth XTRA 29 ISO BOOST se convertirán en tus ruedas de carbono mtb PARA TODO, ofreciéndote siempre una conducción segura, estable y con un extra de grip.

                    Para las nuevas Speedsix Earth Xtra han incorporado el uso de las Nanoresinas Hitech a la estructura del aro, con lo que conseguieron un extra de dureza respecto a su antecesora Speedsix Earth y disminuimos su peso hasta 1370gr. aun teniendo 3mm más de ancho. De este modo, podrás experimentar y superar cualquier reto, competición u objetivo en MTB, sintiendo seguro/a, capaz y orgulloso/a de tu evolución como ciclista.
                    
                    La nueva Earth Xtra es la mejor opción para los amantes del Mtb. Ya no te importará a que tipo de terreno te enfrentas o los kilómetros de tus salidas, por fin dispones de ruedas de carbono anchas para mtb que, al no penalizarte en peso, se convierten en tus llantas de carbono perfectas para cualquier disciplina en Mountain Bike.
                    
                    Características:
                    Uso: MTB
                    Material del aro: Carbono
                    Sistema de freno: ISO
                    Perfil del aro: 23 mm
                    Ancho externo: 36 mm
                    Ancho interno: 30 mm
                    Número de radios: 28
                    Cabecillas: Sapim Secure Lock
                    Buje: Ratchey System
                    Núcleo: Shimano-MicroSpline,Shimano-SRAM,SRAM-XD
                    Cojinetes: Sellados Japonés
                    Tipo de cubierta: Cámara, Tubeless
                    Peso: 1370 g aprox
                    Peso máximo del ciclista: A partir de 110 kg consultar
                    Método de montaje: A mano',
                    'imagen' => 'ruedasspeedsixearth.webp'
                ],[
                    'nombre' => 'Crankbrothers Cobalt 3 29" Disc',
                    'tipo' => 'Ruedas de montaña',
                    'id_marca' => '28',
                    'id_proveedor' => '2',
                    'precio' => '640',
                    'descripcion_corta' => 'Descubre la combinación perfecta de rendimiento y estilo con el Par de ruedas Crankbrothers Cobalt 3 29". Su eje delantero de 15x110 mm y el trasero de 12x148 mm BOOST proporcionan una estabilidad incomparable. ',
                    'descripcion_larga' => 'El par de ruedas Crankbrothers Cobalt 3 29" Disc Brake Eje delantero 15x110 mm - Trasero 12x148 mm BOOST núcleo Shimano 10V está diseñado para XC y E-Bike. Es sencillo y hermoso, su diseño exclusivo de ruedas se basa en principios de resistencia, rigidez y aceleración. El diseño único de la rueda distribuye la masa más cerca del buje para acelerar y desacelerar. Su tecnología de radios de par doble está diseñada con la forma más fuerte en la construcción para maximizar la resistencia y la rigidez. No se requiere fondo de llanta para la configuración tubeless.

                    Características:
                    - Uso: XC, E-Bike, MTB
                    - Medida: 29"
                    - Material: Aluminio
                    - Neumático compatible para Tubeless
                    - Eje: 15x110 mm BOOST, 12x148 mm BOOST
                    - Tipo de freno: Disc Brake
                    - Ancho interno de la llanta: 23 mm
                    - Material de los radios: aleación
                    - Dimensión (ETRTO): 29" (622 mm)
                    - Peso: 29" (1735 g)
                    - Compatibilidad de rueda libre: Shimano (10 velocidades)',
                    'imagen' => 'ruedascrankbrotherscobalt.webp'
                ]
                ,[
                    'nombre' => 'Dura-Ace R9270-C50 Carbon Disc tubeless',
                    'tipo' => 'Ruedas de carretera',
                    'id_marca' => '1',
                    'id_proveedor' => '1',
                    'precio' => '2185',
                    'descripcion_corta' => 'Comodidad y seguridad sin sacrificar el rendimiento y es liviano sin comprometer la resistencia o durabilidad.',
                    'descripcion_larga' => 'El par de ruedas Shimano Dura-Ace R9270-C50 Carbon Disc para tubeless están diseñadas para las exigencias de las carreras profesionales. Prioriza la eficiencia aerodinámica y la rigidez lateral. Para las situaciones de mayor velocidad y los esfuerzos más potentes, la rediseñada rueda combina una llanta tubeless de sección profunda, totalmente de carbono, con un diseño de buje totalmente nuevo que reduce el peso a la vez que mejora la rigidez de la transmisión. La construcción de la C50 pone un mayor énfasis en la rigidez lateral, lo que la convierte en el sueño de cualquier velocista.

                    Características:
                    - Uso: Carretera, Triatlón
                    - Tipo de cubierta: Para Tubeless Ready
                    - Tipo de llanta: Tubeless
                    - Ancho de la llanta (mm): 28 mm
                    - Altura de la llanta (mm): 50 mm
                    - Tipo de freno: Freno de disco
                    - Radios: 16
                    - Método de fijación del eje: E-THRU
                    - Material: Carbono
                    - Modelo: R9270-C50
                    - Compatible sólo con piñones Shimano de cassette de carretera de 12 velocidades
                    
                    Tecnologías:
                    - Center Lock: El sistema CENTER LOCK hace posible una fácil instalación del disco con montaje de ranura y un anillo de cierre. El sistema de montaje del anillo de cierre reduce las horas de trabajo disminuyendo la cantidad de tiempo tanto de instalación como de desmontaje. Además, la fijación de seguridad con el montaje de ranura aumenta la precisión y la rigidez a la vez que mejora la eficiencia del frenado.
                    
                    - D2: La dirección del viento afecta al rendimiento aerodinámico. Para crear la llanta D2, los ingenieros de Shimano consideraron los vientos de frente y de lado, con el objetivo de lograr un rendimiento óptimo en condiciones de ciclismo real. Las amplias pruebas con prototipos, en el túnel del viento y en carretera, demostraron que una llanta ancha con un aro de cubierta profundo proporciona mejores resultados en una amplia variedad de condiciones. En ángulos de virajes entre 0 y 15 grados, el perfil de la llanta Shimano D2 reduce la resistencia al aire mejor que cualquier otra llanta aerodinámica. Este diseño de la llanta también mejora la rigidez lateral de la rueda y ofrecer un mejor comportamiento vertical para mejorar el control, el confort y la durabilidad en carretera.
                    
                    - E-THRU: El sistema de cierre rápido de eje pasante sin herramientas optimiza el equilibrio del peso y la rigidez y permite una fácil utilización con un mecanismo de levas interno fiable. El sistema de eje pasante de 15 mm tiene una rigidez un 15 % superior torsionalmente y un 25 % mayor en corte transversal en comparación con un sistema de eje delantero de liberación rápida de 9 mm tradicional.
                    
                    - Optbal: El sistema de ruedas traseras Optbal incorpora 21 radios con 14 radios en el lado de transmisión y 7 en el lado opuesto a la transmisión. La separación del cassette en las ruedas de hoy en día produce una tensión desequilibrada en los tradicionales sistemas de radios 1:1.',
                    'imagen' => 'ruedasduraace.webp'
                ]
                ,[
                    'nombre' => 'Zipp 303 Firecrest Disc Carbon tubeless',
                    'tipo' => 'Ruedas de carretera',
                    'id_marca' => '29',
                    'id_proveedor' => '2',
                    'precio' => '1800',
                    'descripcion_corta' => 'La combinación de llanta más ancha, mayor volumen de llanta y menor presión de llanta ayuda a reducir la fatiga del ciclista al suavizar la conducción sobre pavimento y carreteras imperfectas.',
                    'descripcion_larga' => 'El par de ruedas Zipp 303 Firecrest Disc Carbon para tubeless es más rápida, más ligera y más polivalente en terrenos variados. Cuando se trata de ir rápido en bicicleta, eficiencia significa reducción: resistencia al viento, resistencia a la rodadura, fatiga del ciclista, peso. Se diseñó utilizando mediciones directas del mundo real (en comparación con el túnel de viento o la simulación por computadora). Los resultados fueron enormes. Tiene un ancho exterior de 30 mm, un ancho interno de 25 mm y una profundidad de llanta de 40 mm. El perfil proporciona una resistencia reducida y una transición mejorada entre la llanta y el neumático, lo que aumenta la eficiencia aerodinámica en la carretera. La postura de la llanta ancha también presenta menos deflexión del neumático para reducir la resistencia a la rodadura. La combinación de llanta más ancha, mayor volumen de llanta y menor presión de llanta ayuda a reducir la fatiga del ciclista al suavizar la conducción sobre pavimento y carreteras imperfectas.

                    Características:
                    - Uso: Carretera
                    - Tamaño de la rueda: 700c
                    - Material: Carbono
                    - Nuevos gráficos Zipp e identidad cosmética que gritan velocidad
                    - Peso más ligero que su predecesor, lo que lo hace ágil y rápido
                    - Tubeless Made Easy, el letrero optimizado de la plataforma del neumático permite una instalación y extracción sencillas sin herramientas y sin necesidad de un compresor de aire para asentar el neumático
                    - El perfil de llanta ultra ancho de 25 mm crea una mejor interfaz de neumático para ser más rápido dentro o fuera de la carretera
                    - La nueva profundidad de llanta de 40 mm hace que la rueda sea ligera y aerodinámica en cualquier situación
                    - El nuevo buje ZR1 DB está diseñado en Alemania con un mejor diseño de sello para una mayor durabilidad y una respuesta más rápida con 66 puntos de acoplamiento
                    - Buje compatible: Shimano/SRAM 11V, SRAM-XDR 12V
                    - Profundidad de la llanta de 40 mm
                    - Anchura interior de 25 mm
                    - Ancho exterior máximo de 30 mm
                    - Disc Brake Center Lock
                    - Eje pasante: 12x142
                    - Material del eje: aluminio delantero y trasero
                    - Compatibilidad de neumáticos: solo neumáticos sin cámara
                    - Peso: 1352 g',
                    'imagen' => 'ruedaszipp303.webp'
                ]
                ,[
                    'nombre' => 'Cosmic SLR 65 tubeless Disc',
                    'tipo' => 'Ruedas de carretera',
                    'id_marca' => '13',
                    'id_proveedor' => '14',
                    'precio' => '2249',
                    'descripcion_corta' => 'La rueda Mavic Cosmic SLR 65 para tubeless Disc Center Lock es la elección perfecta para las carreras en carretera y los triatlones, con un diseño aerodinámico de 65 mm que maximiza la velocidad y la eficiencia.',
                    'descripcion_larga' => 'La rueda Mavic Cosmic SLR 65 para tubeless Disc Center Lock ofrece una velocidad y una eficiencia rapidísimas para las carreras en carretera y los triatlones. El nombre de Cosmic siempre ha sido sinónimo de velocidad y rendimiento. Esta versión de 65 mm no es una excepción. El borde aerodinámico de 65 mm de profundidad corta el viento con una mínima resistencia, y su perfil de 26 mm de ancho lo hace muy estable en el viento cruzado. También utiliza sus radios elípticos patentados que ahorran otros 5 vatios para maximizar su eficiencia. Otro factor clave en la eficiencia es la resistencia a la rodadura. Han reducido aún más el peso de la llanta con un nuevo laminado y un refuerzo local.



                    Características:
                    
                    - Uso: Carretera, Triatlón
                    
                    - Material: Carbono
                    
                    - Compatible con el neumático Tubeless Ready
                    
                    - Eje: 12x100 convertible a QR
                    
                    - Tipo de freno: Disc Center Lock
                    
                    - Llantas: 65 mm de profundidad
                    
                    - Ancho: 26 mm
                    
                    - Radios: forma R2R
                    
                    - Material radios: aluminio
                    
                    - Tamaños de neumáticos recomendados: 23 a 32 mm
                    
                    - Compatibilidad de rueda libre: Shimano M11 (8, 9, 10, 11 velocidades), SRAM -XDR (12 velocidades)
                    
                    - Incluye: Adaptadores QR frontales, válvula UST y accesorios, guía del usuario&nbsp;
                    
                    
                    
                    Tecnologías:
                    
                    - UST: El UST Road mejorado ofrece más velocidad, comodidad y control en un sistema tubeless fácil de usar.
                    
                    - Fore Carbon: la tecnología de perforación de Fore Carbon no requiere el uso de cinta de tubeless.
                    
                    La rueda trasera Mavic Cosmic SLR 65 para tubeless Disc Center Lock ofrece una velocidad y una eficiencia rapidísimas para las carreras en carretera y los triatlones. El nombre de Cosmic siempre ha sido sinónimo de velocidad y rendimiento. Esta versión de 65 mm no es una excepción. El borde aerodinámico de 65 mm de profundidad corta el viento con una mínima resistencia, y su perfil de 26 mm de ancho lo hace muy estable en el viento cruzado. También utiliza sus radios elípticos patentados que ahorran otros 5 vatios para maximizar su eficiencia. Otro factor clave en la eficiencia es la resistencia a la rodadura. Han reducido aún más el peso de la llanta con un nuevo laminado y un refuerzo local.
                    
                    
                    
                    Características:
                    
                    - Uso: Carretera, Triatlón
                    
                    - Material: Carbono
                    
                    - Compatible con el neumático Tubeless Ready
                    
                    - Eje: 12x142 convertible a QR
                    
                    - Tipo de freno: Disc Center Lock
                    
                    - Llantas: 65 mm de profundidad
                    
                    - Ancho: 26 mm
                    
                    - Radios: forma R2R
                    
                    - Material radios: aluminio
                    
                    - Tamaños de neumáticos recomendados: 23 a 32 mm
                    
                    - Compatibilidad de rueda libre: Shimano M11 (8, 9, 10, 11 velocidades), SRAM -XDR (12 velocidades)
                    
                    - Incluye: Adaptadores QR frontales, válvula UST y accesorios, guía del usuario&nbsp;
                    
                    
                    
                    Tecnologías:
                    
                    - UST: El UST Road mejorado ofrece más velocidad, comodidad y control en un sistema tubeless fácil de usar.
                    
                    - Fore Carbon: la tecnología de perforación de Fore Carbon no requiere el uso de cinta de tubeless.',
                    'imagen' => 'ruedascosmicslr.webp'
                ]
                ,[
                    'nombre' => 'Cosmic SLR 32 tubeless Disc Center Lock',
                    'tipo' => 'Ruedas de carretera',
                    'id_marca' => '13',
                    'id_proveedor' => '14',
                    'precio' => '2249',
                    'descripcion_corta' => 'La rueda Mavic Cosmic SLR 32 Disc para tubeless Center Lock ofrece velocidad y rendimiento excepcionales para carreteras y triatlones. Su diseño aerodinámico, radios elípticos y resistencia a la rodadura la convierten en una opción imbatible. ',
                    'descripcion_larga' => 'La rueda Mavic Cosmic SLR 32 Disc para tubeless Center Lock ofrece una velocidad y una eficiencia rapidísimas para las carreras en carretera y los triatlones. El nombre de Cosmic siempre ha sido sinónimo de velocidad y rendimiento. Esta versión de 32 mm no es una excepción. El borde aerodinámico de 32 mm de profundidad corta el viento con una mínima resistencia, y su perfil lo hace muy estable en el viento cruzado. También utiliza sus radios elípticos patentados que ahorran otros 5 vatios para maximizar su eficiencia. Otro factor clave en la eficiencia es la resistencia a la rodadura. Han reducido aún más el peso de la llanta con un nuevo laminado y un refuerzo local.



                    Características:
                    
                    - Uso: Carretera, Triatlón
                    
                    - Material: Carbono
                    
                    - Compatible con el neumático Tubeless Ready
                    
                    - Eje: QR 12x100
                    
                    - Tipo de freno: Disc Center Lock
                    
                    - Llantas: 32 mm de profundidad
                    
                    - Ancho de la llanta: 28 mm
                    
                    - Radios: forma R2R
                    
                    - Material radios: aluminio
                    
                    - Tamaños de neumáticos recomendados: 23 a 32 mm
                    
                    - Compatibilidad de rueda libre: Shimano M11 (8, 9, 10, 11 velocidades), SRAM XDR (12 velocidades)
                    
                    - Incluye: Adaptadores QR frontales, válvula UST y accesorios, guía del usuario&nbsp;
                    
                    
                    
                    Tecnologías:
                    
                    - UST: El UST Road mejorado ofrece más velocidad, comodidad y control en un sistema tubeless fácil de usar.
                    
                    - Fore Carbon: la tecnología de perforación de Fore Carbon no requiere el uso de cinta de tubeless.
                    
                    - QRM +: Qualité de Roulements Mavic +, esos rodamientos de cartucho tienen un sellado doble con espacio interno C3 y están rematados con un sistema de microajuste.
                    
                    
                    
                    La rueda trasera Mavic Cosmic SLR 32 para tubeless Disc Center Lock ofrece una velocidad y una eficiencia rapidísimas para las carreras en carretera y los triatlones. El nombre de Cosmic siempre ha sido sinónimo de velocidad y rendimiento. Esta versión de 32 mm no es una excepción. El borde aerodinámico de 32 mm de profundidad corta el viento con una mínima resistencia, y su perfil lo hace muy estable en el viento cruzado. También utiliza sus radios elípticos patentados que ahorran otros 5 vatios para maximizar su eficiencia. Otro factor clave en la eficiencia es la resistencia a la rodadura. Han reducido aún más el peso de la llanta con un nuevo laminado y un refuerzo local.
                    
                    
                    
                    Características:
                    
                    - Uso: Carretera, Triatlón
                    
                    - Material: Carbono
                    
                    - Compatible con el neumático Tubeless Ready
                    
                    - Eje: QR 12x142
                    
                    - Tipo de freno: Disc Center Lock
                    
                    - Llantas: 32 mm de profundidad
                    
                    - Ancho de la llanta: 28 mm
                    
                    - Radios: forma R2R
                    
                    - Material radios: aluminio
                    
                    - Tamaños de neumáticos recomendados: 23 a 32 mm
                    
                    - Compatibilidad de rueda libre: Shimano M11 (8, 9, 10, 11 velocidades), SRAM XDR (12 velocidades)
                    
                    - Incluye: Adaptadores QR frontales, válvula UST y accesorios, guía del usuario 
                    
                    
                    
                    Tecnologías:
                    
                    - UST: El UST Road mejorado ofrece más velocidad, comodidad y control en un sistema tubeless fácil de usar.
                    
                    - QRM +: Qualité de Roulements Mavic +, esos rodamientos de cartucho tienen un sellado doble con espacio interno C3 y están rematados con un sistema de microajuste.',
                    'imagen' => 'ruedascosmicslr32.webp'
                ],[
                    'nombre' => 'Ikon 29x2.20 EXO TR - Tanwall',
                    'tipo' => 'Cubierta de montaña',
                    'id_marca' => '21',
                    'id_proveedor' => '2',
                    'precio' => '57',
                    'descripcion_corta' => 'Con su diseño único y acabados de calidad, esta cubierta te brindará un rendimiento excepcional en cualquier tipo de terreno. No pierdas la oportunidad de experimentar la máxima tracción y durabilidad con este producto de primera clase.',
                    'descripcion_larga' => 'La cubierta Maxxis Ikon 29x2.20 EXO Tanwall Tubeless Ready plegable tiene un diseño de banda de rodadura rápido, el Ikon proporciona un rendimiento ejemplar en todas las condiciones de conducción. Como su nombre lo indica, el Ikon representa todo lo que es cierto en las carreras. Los tacos garantizan su adherencia, mientras que la banda de rodadura permite un pedaleo y una frenada más eficaz.

                    Las cubiertas Tubeless Ready proporcionan numerosas ventajas para los riders, la capacidad de rodar a presiones de aire más bajas, lo que mejora la tracción, una resistencia menor a la rodadura en comparación a las cubiertas con cámara, y además tienen la la ventaja de minimizar el riesgo de un reventón al no llevar cámara. Los neumáticos Tubeless Ready (TR) de la marca Maxxis proporcionan los mismos beneficios que las cubiertas tubeless UST, pero sin la penalización del peso.
                    
                    Características:
                    - Uso: MTB, XC
                    - Medida: 29x2.20
                    - Tanwall, Tubeless Ready
                    - Plegable
                    - TPI: 60
                    
                    Tecnologías:
                    - EXO Protection, donde los laterales del neumático son más resistentes a los cortes y a la abrasión.
                    
                    - Tubeless Ready: Los neumáticos tubeless-ready son neumáticos que no requieren cámara de aire. Cuando se infla la cubierta sin cámara, la presión del aire empuja los talones contra los lados de la llanta, manteniendo la cubierta en su lugar.',
                    'imagen' => 'cubiertaikon.webp'
                ],[
                    'nombre' => 'Rekon Race EXO Skinwall TR',
                    'tipo' => 'Cubierta de montaña',
                    'id_marca' => '21',
                    'id_proveedor' => '2',
                    'precio' => '59',
                    'descripcion_corta' => 'Utilícelo como neumático trasero junto con una banda de rodamiento delantera más agresiva, o delante y detrás para carreras de pista corta.',
                    'descripcion_larga' => 'La cubierta Maxxis Rekon Race es semi-lisa, tiene el diseño de la banda de rodamiento de la versión trail del Rekon, pero con tacos más pequeños y cortos. Si buscas protección y velocidad, tiene los neumáticos perfectos para ti. Fabricados con caucho de alta calidad para resistir cualquier daño, estos neumáticos te ayudarán a superar cualquier obstáculo en tu camino.

                    Características:
                    - Uso: MTB
                    - Medidas: 29x2.35, 29x2.25
                    - TPI: 60
                    - ETRTO: 60-622
                    - Peso: 776 g
                    - Skinwall: Versión de las paredes laterales de la cubierta más delgadas, diseñada para reducir al máximo su peso
                    - EXO: Un material extremadamente resistente a los cortes y a la abrasión que se añade a las paredes laterales de los neumáticos de montaña seleccionados. Este tejido tan denso también es ligero y muy flexible, lo que garantiza que el rendimiento del neumático no se vea afectado. Ideal para senderos excepcionalmente rocosos y traicioneros donde la probabilidad de cortes y abrasiones en los flancos es alto
                    - Tubeless Ready: Combina un cordón de fibra de carbono para la resistencia, un cojín de cordón para la seguridad y un caucho compatible con el sellador líquido para la retención de aire, eliminando la necesidad de una cámara de aire. La capa de protección contra perforaciones ayuda a prevenir daños causados por los escombros de la carretera. Se puede usar sellador líquido para prevenir cualquier pérdida de presión de aire',
                    'imagen' => 'cubiertarekonrace.webp'
                ],[
                    'nombre' => 'Scorpion XC RC Team Edition 29x2.20',
                    'tipo' => 'Cubierta de montaña',
                    'id_marca' => '22',
                    'id_proveedor' => '17',
                    'precio' => '74',
                    'descripcion_corta' => 'Diseñada para ofrecer una tracción óptima y resistencia al desgaste, esta cubierta te brindará la confianza necesaria en cada pedaleo. ',
                    'descripcion_larga' => 'La cubierta Pirelli Scorpion XC RC Team Edition 29x2.20 fue diseñada junto con los corredores de la Copa del Mundo de cross country : tacos centrales bajos y numerosos para la mejor suavidad, tacos laterales pronunciados para el control en las curvas. diseño de la banda de rodadura sin concesiones.

                    Características:
                    - Uso: MTB, XC
                    - Medidas: 29x2.20
                    - Tipo: Tubeless Ready
                    - Aro: Plegable
                    - Compuestos: Compuesto SmartGRIP
                    - Refuerzo: Prowall
                    - Carcasa: 120 TPI
                    - Dimensiones: 29x2.20" (ETRTO 55 -622)
                    - Peso (fabricante): 660 g aprox
                    - Color: Negro, amarillo
                    
                    Tecnologías:
                    - SmartGRIP: es un compuesto desarrollado sobre la base de la experiencia de los campeonatos de automovilismo, la elección de la solución de compuesto único ofrece una alta adherencia tanto en condiciones secas como húmedas, incluso cuando los bloques comienzan a desgastarse.
                    
                    - Prowall: La tecnología de refuerzo de paredes laterales para una mejor protección contra pinchazos y manejo a baja presión. Una capa adicional de tela de nailon aplicada a los lados de la carcasa para una protección adicional y una mayor estabilidad en las curvas.',
                    'imagen' => 'cubiertascorpionxc.webp'
                ],[
                    'nombre' => 'Scorpion MTB Mixed Terrain 29x2.20',
                    'tipo' => 'Cubierta de montaña',
                    'id_marca' => '22',
                    'id_proveedor' => '17',
                    'precio' => '74',
                    'descripcion_corta' => 'La cubierta Pirelli Scorpion MTB Mixed Terrain es la elección perfecta para los amantes de la aventura en bicicleta. Con un diseño innovador y la garantía de calidad de Pirelli, esta cubierta garantiza un agarre óptimo en cualquier terreno, brindando seguridad y rendimiento sin igual.',
                    'descripcion_larga' => 'La cubierta Pirelli Scorpion MTB Mixed Terrain tiene un perfil medio y espaciado de la banda de rodadura para una conducción rápida y segura en una variedad de terrenos, desde duro a suave, ya sea seco o húmedo.

                    Características:
                    - Uso: MTB
                    - Rendimiento para terrenos secos y húmedos
                    - Tubeless Ready
                    - Medidas: 29x2.20, 29x2.40
                    - Compuesto antidesgarro de la banda de rodadura más refuerzos de las paredes laterales de 120TPI para una mayor resistencia a los pinchazos y cortes
                    - SmartGRIP Compound para un agarre sin compromiso, en superficies secas y húmedas
                    - Una carcasa flexible de 120TPI y TLR para mayor estabilidad y agarre en un estilo moderno de baja presión. (29x2.20)
                    - Una sólida carcasa de 60TPI y TLR para una mayor estabilidad en un moderno estilo de conducción a baja presión (29x2.40)
                    - Llanta: 25 C (29x2.20), 30C (29x2.40)
                    - Peso: 735 g (29x2.20), 850 g (29x2.40)
                    - ETRTO: 55-622 (29x2.20), 60-622 (29x2.40)',
                    'imagen' => 'cubiertascorpionmtb.webp'
                ],[
                    'nombre' => 'Ikon 29x2.20 EXO Tubeless Ready',
                    'tipo' => 'Cubierta de montaña',
                    'id_marca' => '21',
                    'id_proveedor' => '2',
                    'precio' => '39',
                    'descripcion_corta' => 'Con su diseño único y acabados de calidad, esta cubierta te brindará un rendimiento excepcional en cualquier tipo de terreno. No pierdas la oportunidad de experimentar la máxima tracción y durabilidad con este producto de primera clase.',
                    'descripcion_larga' => 'La cubierta Maxxis Ikon 29x2.20 Tubeless Ready plegable tiene un diseño de banda de rodadura rápido, el Ikon proporciona un rendimiento ejemplar en todas las condiciones de conducción. Como su nombre lo indica, el Ikon representa todo lo que es cierto en las carreras. Los tacos garantizan su adherencia, mientras que la banda de rodadura permite un pedaleo y una frenada más eficaz.

                    Las cubiertas Tubeless Ready proporcionan numerosas ventajas para los riders, la capacidad de rodar a presiones de aire más bajas, lo que mejora la tracción, una resistencia menor a la rodadura en comparación a las cubiertas con cámara, y además tienen la la ventaja de minimizar el riesgo de un reventón al no llevar cámara. Los neumáticos Tubeless Ready (TR) de la marca Maxxis proporcionan los mismos beneficios que las cubiertas tubeless UST, pero sin la penalización del peso.
                    
                    Características:
                    - Uso: MTB, XC
                    - Medida: 29x2.20
                    - Tanwall, Tubeless Ready
                    - Plegable
                    - TPI: 60
                    
                    Tecnologías:
                    - EXO Protection, donde los laterales del neumático son más resistentes a los cortes y a la abrasión.
                    
                    - Tubeless Ready: Los neumáticos tubeless-ready son neumáticos que no requieren cámara de aire. Cuando se infla la cubierta sin cámara, la presión del aire empuja los talones contra los lados de la llanta, manteniendo la cubierta en su lugar.',
                    'imagen' => 'cubiertaikonblack.webp'
                ],[
                    'nombre' => 'Grand Prix 5000 plegable negro 700x25c',
                    'tipo' => 'Cubierta de carretera',
                    'id_marca' => '23',
                    'id_proveedor' => '3',
                    'precio' => '42.95',
                    'descripcion_corta' => 'La cubierta Grand Prix 5000 de Continental te ofrecerá un excelente rendimiento en tus salidas por carretera. Su excelente protección anti pinchazos y su peso mínimo hacen de esta cubierta una garantía de confianza para tus rutas ciclistas.',
                    'descripcion_larga' => 'La cubierta Continental Grand Prix 5000 llega para mejorar las prestaciones de la popular y reconocida Grand Prix 4000 S II. Esta nueva versión ofrece un 12% más de resistencia en rodadura, un 20% más de protección antipinchazos y es 10 g más ligera (en 700x25 mm). Además cuenta con la nueva tecnología Active Comfort que absorbe las vibraciones y da una sensación de mayor suavidad. El compuesto con el que está fabricada garantiza un agarre de nivel superior en tus rutas, mientras que la fibra Vectran Breacker proporciona un extra de seguridad y protección contra eventuales pinchazos.

                    Características: 
                    Uso: Carretera
                    Tipo: Para cámara
                    Aro plegable
                    Tamaño: 650x25B, 650x28B, 700x23, 700x25, 700x28, 700x30, 700x32
                    Peso: 205 g (650x25B), 230 g (650x28B), 205 g (700x23), 220 g (700x25), 250 g (700x28), 290 g (700x30), 295 g (700x32)
                    TPI: 330 hilos por pulgada
                    ETRTO: 25-584 (650x25B), 28-584 (650x28b), 23-622 (700x23), 25-622 (700x25), 28-622 (700x28), 30-622 (700x30), 32-622 (700x32)
                    
                    Tecnologías:
                    Lazergrip
                    Para hacerte uno con la carretera. El perfil de estructura de laser se expande por los flancos del neumático proporcionando una excelente adaptación en cada curva.
                    
                    Active Comfort
                    El enfoque revolucionario en ciclismo. Integrado en la construcción del neumático, la tecnología Active Comfort absorbe las vibraciones y da una sensación de mayor suavidad.
                    
                    Black Chili
                    El compuesto legendario en un nivel completamente nuevo. Hecho para un excelente agarre, mayor kilometraje y balanceo eficiente.
                    
                    Vectran Breacker
                    La fibra de alta tecnología producida sintéticamente, extremadamente resistente por un peso mínimo. La referencia en protección contra pinchazos, más resistente y protectora que nunca.',
                    'imagen' => 'cubiertagp5000.webp'
                ],[
                    'nombre' => 'Grand Prix 5000 plegable negro 700x28c',
                    'tipo' => 'Cubierta de carretera',
                    'id_marca' => '23',
                    'id_proveedor' => '3',
                    'precio' => '42.95',
                    'descripcion_corta' => 'La cubierta Grand Prix 5000 de Continental te ofrecerá un excelente rendimiento en tus salidas por carretera. Su excelente protección anti pinchazos y su peso mínimo hacen de esta cubierta una garantía de confianza para tus rutas ciclistas.',
                    'descripcion_larga' => 'La cubierta Continental Grand Prix 5000 llega para mejorar las prestaciones de la popular y reconocida Grand Prix 4000 S II. Esta nueva versión ofrece un 12% más de resistencia en rodadura, un 20% más de protección antipinchazos y es 10 g más ligera (en 700x25 mm). Además cuenta con la nueva tecnología Active Comfort que absorbe las vibraciones y da una sensación de mayor suavidad. El compuesto con el que está fabricada garantiza un agarre de nivel superior en tus rutas, mientras que la fibra Vectran Breacker proporciona un extra de seguridad y protección contra eventuales pinchazos.

                    Características: 
                    Uso: Carretera
                    Tipo: Para cámara
                    Aro plegable
                    Tamaño: 650x25B, 650x28B, 700x23, 700x25, 700x28, 700x30, 700x32
                    Peso: 205 g (650x25B), 230 g (650x28B), 205 g (700x23), 220 g (700x25), 250 g (700x28), 290 g (700x30), 295 g (700x32)
                    TPI: 330 hilos por pulgada
                    ETRTO: 25-584 (650x25B), 28-584 (650x28b), 23-622 (700x23), 25-622 (700x25), 28-622 (700x28), 30-622 (700x30), 32-622 (700x32)
                    
                    Tecnologías:
                    Lazergrip
                    Para hacerte uno con la carretera. El perfil de estructura de laser se expande por los flancos del neumático proporcionando una excelente adaptación en cada curva.
                    
                    Active Comfort
                    El enfoque revolucionario en ciclismo. Integrado en la construcción del neumático, la tecnología Active Comfort absorbe las vibraciones y da una sensación de mayor suavidad.
                    
                    Black Chili
                    El compuesto legendario en un nivel completamente nuevo. Hecho para un excelente agarre, mayor kilometraje y balanceo eficiente.
                    
                    Vectran Breacker
                    La fibra de alta tecnología producida sintéticamente, extremadamente resistente por un peso mínimo. La referencia en protección contra pinchazos, más resistente y protectora que nunca.',
                    'imagen' => 'cubiertagp5000.webp'
                ],[
                    'nombre' => 'Yksion Pro UST Tubeless 700x32c',
                    'tipo' => 'Cubierta de carretera',
                    'id_marca' => '13',
                    'id_proveedor' => '14',
                    'precio' => '45',
                    'descripcion_corta' => 'La Cubierta Mavic Yksion Pro UST para Tubeless es la elección perfecta para los ciclistas exigentes. Con su tecnología UST, te garantiza una mayor comodidad, tracción y resistencia a los pinchazos. ',
                    'descripcion_larga' => 'La cubierta Mavic Yksion Pro 19 para Tubeless es ligera, con una resistencia a la rodadura súper baja y un agarre superior, que resuelve el problema de la instalación.

                    Características:
                    - Carcasa: 127 TPI, Tubeless Ready
                    - Presión máxima: 25 mm: 7 bar - 101 psi, 28 mm: 6 bar - 87 psi (en una llanta de 17 mm de anchura)
                    - UST Tubeless Ready: El concepto UST aumenta la tracción, el control y la comodidad, al tiempo que reduce la inercia y el riesgo de pinchazos. La construcción "Tubeless Ready" permite un neumático más ligero y mejores prestaciones.',
                    'imagen' => 'cubiertamavicyksion.webp'
                ],[
                    'nombre' => 'Yksion Pro UST Tubeless 700x28',
                    'tipo' => 'Cubierta de carretera',
                    'id_marca' => '13',
                    'id_proveedor' => '14',
                    'precio' => '45',
                    'descripcion_corta' => 'La Cubierta Mavic Yksion Pro UST para Tubeless es la elección perfecta para los ciclistas exigentes. Con su tecnología UST, te garantiza una mayor comodidad, tracción y resistencia a los pinchazos. ',
                    'descripcion_larga' => 'La cubierta Mavic Yksion Pro 19 para Tubeless es ligera, con una resistencia a la rodadura súper baja y un agarre superior, que resuelve el problema de la instalación.

                    Características:
                    - Carcasa: 127 TPI, Tubeless Ready
                    - Presión máxima: 25 mm: 7 bar - 101 psi, 28 mm: 6 bar - 87 psi (en una llanta de 17 mm de anchura)
                    - UST Tubeless Ready: El concepto UST aumenta la tracción, el control y la comodidad, al tiempo que reduce la inercia y el riesgo de pinchazos. La construcción "Tubeless Ready" permite un neumático más ligero y mejores prestaciones.',
                    'imagen' => 'cubiertamavicyksion.webp'
                ]
                ,[
                    'nombre' => 'Propus',
                    'tipo' => 'Manillar de montaña',
                    'id_marca' => '24',
                    'id_proveedor' => '18',
                    'precio' => '650',
                    'descripcion_corta' => 'PRÖPUS no es un manillar integrado más de mtb, es el reflejo de horas de ingenieria para crear un manillar ultraligero y ultraresistente, su diseño unibody y los materiales con los que está construido te permitirán volar sobre el terreno.',
                    'descripcion_larga' => 'DISEÑO UNIBODY INTEGRADO ESPECÍFICO PARA CROSS COUNTRY
                    PRÖPUS es un manillar integrado desarrollado para permitirte ir más rapido en las subidas, aportarte comfort en las zonas mas rotas y aumentar tu control en las bajadas tecnicas con la máxima integración y una estética simple y limpia.
                    149 g.* DE PURA INGENIERÍA Y RESISTENCIA
                    PRÖPUS no es un manillar ultraligero porque simplemente hayamos decidido quitar material, cada capa está estudiada y optimizada para rendir al máximo y junto a su diseño unibody ofrece una resistencia inigualable por un manillar convencional.
                    INTEGRACIÓN HASTA EL ÚLTIMO DETALLE

                    Hemos integrado al máximo la parte de la bici que más tienes a la vista, usando nuestra tapa, que con su diseño exclusivo, esconde el tornillo superior, dejando un orificio para introducir unicamente una llave torx para apretarlo y dar asi una imagen más limpia del cockpit.
                    GEOMETRIA OPTIMIZADA PARA XC, CON AVANCES DE 50, 60, 70, 80, 90 Y 100 mm.
                    Geometría desarrollada especifica de XC para bajar tu centro de gravedad y darte el máximo control tanto en las subidas mas tecnicas como en las bajadas mas rotas.
                    MANILLAR INTEGRADO MTB FABRICADO CON LA MEJOR FIBRA DE CARBONO DE MÓDULO INTERMÉDIO
                    PRÖPUS es un manillar integrado de mtb fabricado con la mejor fibra actualmente disponible, Mitsubishi MR70, su layup ha sido optimizado para ayudarte a soportar horas sobre la bici aportandote mas comfort y seguridad.',
                    'imagen' => 'manillarpropus.png'
                ],[
                    'nombre' => 'Wassat',
                    'tipo' => 'Manillar de montaña',
                    'id_marca' => '24',
                    'id_proveedor' => '18',
                    'precio' => '390',
                    'descripcion_corta' => 'El manillar Xc mas ligero del mundo.',
                    'descripcion_larga' => 'El manillar de XC más ligero del mundo
                    Queremos que sientas la bici, no su peso. Después de mucho tiempo de desarrollo y optimización, estamos orgullosos de presentar el manillar para XC más ligero del mundo, desde solo 99gr en 740mm.
                    2 LAYUPS DISPONIBLES
                    Tanto si buscas la máxima ligereza, como si buscas una rigidez de otro mundo, hay una versión de Layup para ti: la versión de laminado Ultraligera está pensada para aquellos que buscan los componentes más ligeros para sus bicicletas, y la Performance es para aquellos ciclistas que van a rodar rápido y quieran la máxima rigidez. Debe tenerse en cuenta que la primera es para ciclistas que no pesen más de 90 kg mientras que la segunda es para ciclistas que pueden pesar hasta 120 kg.
                    Sección GMN
                    Integrando exactamente la misma tecnología que ha puesto a otros manillares Gemini como el Pröpus en lo más alto de la Copa del Mundo.
                    REACCIONES DE GIRO
                    Aumentando la sección horizontal conseguimos aumentar la inercia, aumentando la rigidez del manillar ante las fuerzas que ejerce el piloto para girar sobre el terreno. Esto se traduce en un control más directo y reactivo, otorgando más precisión en la dirección.
                    ABSORCIÓN VERTICAL
                    Disminuyendo la sección vertical conseguimos una mayor absorción de los impactos y vibraciones verticales. Esto se traduce en menos fatiga en las manos y brazos del ciclista, permitiendo seguir un ritmo alto de descenso durante más tiempo.
                    Testeado para superar las solicitaciones más criticas
                    Realizamos todos los test in-house para valorar la calidad de nuestras piezas, y poder así desarrollar los mejores componentes.
                    Fabricado con materiales top
                    Wässat integra la misma tecnología que el Pröpus; se fabrica siguiendo exactamente el mismo proceso, utilizando los mismos materiales, para rendir como ninguno.
                    ',
                    'imagen' => 'manillarwassat.png'
                ],[
                    'nombre' => 'Ritchey Evo Curve Superlogic',
                    'tipo' => 'Manillar de carretera',
                    'id_marca' => '30',
                    'id_proveedor' => '3',
                    'precio' => '339',
                    'descripcion_corta' => 'El Manillar Ritchey Evo Curve Superlogic es una elección excepcional para los ciclistas más exigentes. Diseñado con la última tecnología y fabricado con materiales premium, este manillar ofrece un rendimiento superior y una experiencia de conducción inigualable.',
                    'descripcion_larga' => 'El manillar Ritchey Evo Curve Superlogic es compatible con la caja de conexiones Shimano EW-RS910. Y está disponible en las tallas 40 cm, 42 cm y 44 cm. Es un manillar para Gravel.

                    Características:
                    - Uso: Carretera
                    - Tallas: 40 cm, 42 cm, 44 cm
                    - Rutas de cable internas completas o parciales
                    - Acabado de carbono negro mate
                    - compatible con la caja de conexiones Shimano EW-RS910
                    - Peso: 200 g (42cm)',
                    'imagen' => 'manillarritcheyevocurvesuperlogic.webp'
                ],[
                    'nombre' => 'Ritchey WCS',
                    'tipo' => 'Manillar de Carretera',
                    'id_marca' => '30',
                    'id_proveedor' => '3',
                    'precio' => '105.25',
                    'descripcion_corta' => 'Ahora actualizado con la capacidad de enrutamiento de cables completamente interno, el nuevo WCS Streem aumenta sus ventajas para fortalecer su posición como la elección perfecta para los corredores de carretera y los entusiastas serios que exigen rendimiento sin sacrificar la comodidad en la búsqueda eterna de grandes experiencias de conducción.',
                    'descripcion_larga' => 'El manillar Ritchey WCS Stremm con forma aerodinámica proporciona un rendimiento elegante y un soporte ergonómico. Si bien su comodidad se ve reforzada por la caída compacta que alivia el estrés, el barrido hacia atrás muy suave y el ligero destello de caída.

                    Ahora actualizado con la capacidad de enrutamiento de cables completamente interno, el nuevo WCS Streem aumenta sus ventajas para fortalecer su posición como la elección perfecta para los corredores de carretera y los entusiastas serios que exigen rendimiento sin sacrificar la comodidad en la búsqueda eterna de grandes experiencias de conducción.
                    
                    Características:
                    - Uso: Carretera
                    - Ancho: 38cm, 40cm, 42cm, 44cm, 46cm
                    - Alcance: 73 mm
                    - Caída: 128 mm
                    - Diámetro de la abrazadera: 31,8 mm
                    - Material: aleación 6066 de triple conificado
                    - Estilo de curva: compacto
                    - Estilo superior: ergonómico
                    - Compatible con la caja de conexiones Shimano EW-RS910
                    - Enrutamiento de cables: interno total o parcial
                    - Peso: 287 g (42 cm)',
                    'imagen' => 'manillarritcheywcs.webp'
                ],[
                    'nombre' => 'Selle Italia Boost negro',
                    'tipo' => 'Sillín',
                    'id_marca' => '31',
                    'id_proveedor' => '19',
                    'precio' => '120.95',
                    'descripcion_corta' => 'Mejora tu experiencia ciclista con el increíble sillín Selle Italia Boost. Diseñado con materiales de primera calidad y un diseño ergonómico, este sillín proporciona comodidad y rendimiento óptimos.',
                    'descripcion_larga' => 'El sillín Selle Italia Boost mantiene el estilo y el apoyo "plano" clásico, al tiempo que aumenta el confort y las prestaciones de cada ciclista gracias a su forma compacta y aerodinámica, típica de los sillines cortos. Un sillín diseñado y concebido para continuar una tradición ganadora.

                    Características:
                    - Uso: Carretera
                    - Peso: 218 g
                    - Rail: TI 316 Tube Ø7
                    - Ancho: 145 mm
                    - Largo: 248 mm
                    - Categoría: Road
                    - Cobertura: Fibra-Tek',
                    'imagen' => 'sillinboost.webp'
                ],[
                    'nombre' => 'Selle Italia Model Y negro',
                    'tipo' => 'Sillín',
                    'id_marca' => '31',
                    'id_proveedor' => '19',
                    'precio' => '68',
                    'descripcion_corta' => 'El sillín Selle Italia Model Y amplía la gama de sillines utilizando el proceso de fabricación Greentech para reducir la huella ecológica. Su forma en T favorece un estilo de pedaleo dinámico y su armazón de titanio reduce el peso sin comprometer la resistencia. Además, sus raíles de titanio son más resistentes y ligeros. Con este sillín, estarás contribuyendo a un futuro más sostenible.',
                    'descripcion_larga' => 'El sillín Selle Italia Model Y amplía la gama de sillines que utilizan el revolucionario proceso de fabricación Greentech para reducir la huella ecológica y, en consecuencia, el impacto sobre el planeta. El sillín todoterreno, fabricado íntegramente por empresas situadas a menos de 15 kilómetros de la sede central de Selle Italia en Treviso, no renuncia a la calidad ni a las prestaciones. En términos de características, destaca la forma en T, que favorece un estilo de pedaleo dinámico, mientras que el armazón de titanio ayuda a reducir notablemente el peso al tiempo que aumenta la resistencia.

                    Características:
                    
                    Uso: MTB, Carretera
                    Material raíles: titanio 316
                    Dimensiones: 246 x 142 mm (L1)
                    Diámetro raíles: 7 mm
                    Peso: aprox. 277 g (datos del fabricante)
                    
                    
                    Tecnologías:
                    
                    Neutral Shape | Los sillines anatómicos con una forma neutra proporcionan el apoyo adecuado tanto para los ciclistas dinámicos con una inclinación pélvica anterior como para los ciclistas más estáticos con una inclinación pélvica posterior.
                    
                    Ti316 Rails | Los raíles de titanio no sólo son hasta un 25 % más resistentes y duraderos que los cuadros bases de sillín convencionales, sino también un 15 % más ligeros.
                    
                    Greentech | El proceso de fabricación patentado de Selle Italia es sinónimo de productos sostenibles y 100 % reciclables. Para permitir una fabricación con las menores emisiones de CO2 posibles, tanto los componentes individuales como los residuos generados durante la producción están diseñados para que puedan reutilizarse en nuevos productos. Además, no se utilizan adhesivos, disolventes ni otros materiales nocivos. Future Rides Green.',
                    'imagen' => 'sillinmodely.webp'
                ],[
                    'nombre' => 'Selle Italia X-LR Superflow',
                    'tipo' => 'Sillín antiprostático',
                    'id_marca' => '31',
                    'id_proveedor' => '19',
                    'precio' => '89.90',
                    'descripcion_corta' => 'escubre el confort definitivo con el sillín Selle Italia X-LR TM Air Cross Super Flow. Diseñado meticulosamente para ofrecerte una experiencia inigualable en cada pedaleo. Su tecnología avanzada y su diseño ergonómico te brindarán una comodidad sublime durante tus aventuras en bicicleta. ',
                    'descripcion_larga' => 'El sillín Selle Italia X-LR TM Air Cross ha sido diseñado especialmente para MTB. Cuenta con la tecnología X-LR que proporciona la mejor absorción de las vibraciones y una alta comodidad incluso en las condiciones más duras.

                    Características:
                    - Categoría: Expert
                    - idmatch cat: S3, L3
                    - Rail: Manganeso 7 mm
                    - Cubierta: RPU
                    - Peso: 215 g (S3), 224 g (L3)
                    - Dimensiones: 131x266 mm (S3), 145x265 mm (L3)',
                    'imagen' => 'sillinxlr.webp'
                ],[
                    'nombre' => 'Flite Boost X-Cross Superflow',
                    'tipo' => 'Sillín antiprostático',
                    'id_marca' => '31',
                    'id_proveedor' => '19',
                    'precio' => '224.90',
                    'descripcion_corta' => 'Diseñado con materiales de alta calidad y tecnología Superflow, este sillín garantiza comodidad y rendimiento excepcionales en cada pedaleo.',
                    'descripcion_larga' => 'El sillín Selle Italia Flite Boost X-Cross TI 316 Superflow es un sillín ideal para la modalidad de XC. Un sillín diseñado y concebido para continuar una tradición ganadora.

                    Características:
                    - Uso: Carretera,XC
                    - Peso: L3 208 g
                    - Ancho: 135 mm, 145 mm
                    - Largo: 248 mm
                    - Rail: TI 316 Tube Ø7 mm
                    - Cobertura: Fibra-Tek
                    - idmatch: L3-S3
                    ',
                    'imagen' => 'sillinflite.webp'
                ],[
                    'nombre' => 'Regal Evo Racing Le Classiche',
                    'tipo' => 'Sillín urbano',
                    'id_marca' => '32',
                    'id_proveedor' => '3',
                    'precio' => '112.95',
                    'descripcion_corta' => 'La gama Regal Evo es la vuelta de los años 70 pero con todas las tecnologías modernas.',
                    'descripcion_larga' => 'El sillín Selle San Marco Regal Evo Racing Le Classiche se combina con el rendimiento ultramoderno en la evolución del Regal tradicional. Manteniendo todos sus beneficios de comodidad y elegancia, el Regal Evo ofrece una mayor ligereza. Una silla de montar de la vieja escuela para dar clase a cualquier bicicleta.

                    Le Classiche: Piel de becerro natural brillante 0,7 mm, tacto agradable, fuerte y duradero.
                    
                    Características:
                    - Rail: Stealth Xsilite
                    - Cuerpo: Fibra de carbono reforzado
                    - Acolchado: Biofoam
                    - Cubierta: Cuero liso
                    - Dimensiones: 278 x 152 mm
                    - Peso: 230 g
                    - Nivel: Racing
                    
                    Tecnologías:
                    - Biofoam: Estructura biodinámica que sigue los movimientos de la pelvis durante el pedaleo, garantiza comodidad, bajo peso, resistencia duradera y soporte ideal. La superficie garantiza la repelencia total del relleno de agua.
                    
                    - Glass Fiber Reinforced: Tecnopolímero: polímero de ingeniería con altas características físico-mecánicas (rigidez, tenacidad, ductilidad) para resistir bien las cargas estáticas y dinámicas y el envejecimiento.
                    
                    - Stealth Xsilite: Material con un alto porcentaje de silicio, combinado con partículas de titanio y carbono. Es ligero, resistente y no se ve afectado por ninguna condición climática. El desarrollo de la tecnología sigilosa garantiza la resistencia al estrés. Todos los sillines Racing se ofrecen con el marco Stealth Xsilite.',
                    'imagen' => 'sillinregalevo.webp'
                ],[
                    'nombre' => 'Rolls Le Rino negro oro',
                    'tipo' => 'Sillín urbano',
                    'id_marca' => '32',
                    'id_proveedor' => '3',
                    'precio' => '92.35',
                    'descripcion_corta' => 'La línea de productos Bottega muestra cómo los sillines más famosos del mundo pueden expresar su encanto y donde el estilo se convierte en forma. Muy alta atención al detalle, materiales y acabados disponibles. El resultado de la experiencia de 80 años, capaz de adaptar y convertir sus íconos históricos en puntos de referencia para el mundo moderno.',
                    'descripcion_larga' => 'Sillín Selle San Marco Rolls Le Rino.

                    Características:
                    - Fitting: Flat
                    - Ergonomía:
                    - Cubierta: Rino Leather
                    - Estructura: Glass Fiber Reinforced
                    - Rail: Carbon Steel / Gold Color
                    - Relleno: Biofoam
                    - Peso: 382 g
                    - Dimensiones: 282x143 mm
                    
                    - Flat
                    El perfil lateral de la superficie de contacto es una línea plana. Es adecuado para personas con una pelvis antevertida. La anteversión se asocia con una zona lumbar con mayor lordosis, es decir, más curva o extendida.
                    
                    Cuando no tiene una abertura (orificio) pero presenta una superficie ergonómica continua en toda su longitud. Recomendado para personas con baja rotación pélvica.
                    
                    - Glass Fiber Reinforced
                    Tecnopolímero con altas características físicas y mecánicas (rigidez, tenacidad, ductilidad) que permiten afrontar las cargas estáticas y dinámicas y el envejecimiento.
                    
                    - Biofoam
                    Estructura biodinámica que sigue los movimientos de la pelvis al pedalear, para una comodidad garantizada, un peso más ligero, una resistencia duradera y un soporte ideal. Su estructura de "celda cerrada" garantiza que el relleno es completamente repelente al agua.',
                    'imagen' => 'sillinrolls.webp'
                ]
                ,[
                    'nombre' => 'Alsak',
                    'tipo' => 'Tija',
                    'id_marca' => '24',
                    'id_proveedor' => '18',

                    'precio' => '319.98',
                    'descripcion_corta' => 'Ligereza, belleza y rendimiento en una sola pieza',
                    'descripcion_larga' => 'Desde 69.5 gramos, una de las tijas más ligeras del mundo, con un cuidado diseño que la convierten en una pieza única.
                    Cuerpo monocasco
                    - Simple y elegante.
                    - El cuerpo monocasco hueco de la tija permite prescindir del material que no necesitas, del peso que no deseas.
                    - Laminando el cuerpo hueco, conseguimos mayor continuidad de las fibras, optimizando el comportamiento estructural del composite.

                    Carbono Forjado, tecnología de Hypercars en tu tija
                    La Innovación incluso en las piezas más pequeñas convierten a ÄLSAK en algo único y vanguardista.
                    Aplicando más de 100 Toneladas de presión con temperatura, para conseguir la máxima resistencia del carbono y una mejor distribución de fibras en toda la mordaza.

                    Tornillería de titanio
                    Lo mejor exige lo mejor: tornillería y pivotes 100% de titanio, una tija TOP con materiales TOP.

                    Base de la mordaza superligera pero con gran superficie
                    Para evitar esfuerzos de cizalla en los railes del sillín, ÄLSAK tiene una gran superficie de apoyo en la cuna que evitará que se vean afectados por un apoyo insuficiente, sobre todo los railes en fibra de carbono.
                    ',
                    'imagen' => 'tijaalsak.png'
                ],[
                    'nombre' => 'Ritchey WCS 1-Bolt',
                    'tipo' => 'Tija',
                    'id_marca' => '30',
                    'id_proveedor' => '3',
                    'precio' => '96',
                    'descripcion_corta' => 'La tija de sillín WCS 1-Bolt está hecha de aluminio forjado en 3D muy duradero.',
                    'descripcion_larga' => 'La tija de sillín Ritchey WCS 1-Bolt es ideal para reducir la tensión en los raíles del sillín y facilitar el ajuste. Al aflojar un solo tornillo se puede ajustar la inclinación y el avance. La tija de sillín WCS 1-Bolt está hecha de aluminio forjado en 3D muy duradero.

                    Características:
                    - Material: Aluminio TR741
                    - Suplemento de peso: 27.2x350mm,31.6x400mm
                    - Es ideal para reducir la tensión en los raíles del sillín y facilitar el ajuste',
                    'imagen' => 'tijaritcheywcs.webp'
                ],[
                    'nombre' => 'Reverb AXS 31.6',
                    'tipo' => 'Tija telescópica',
                    'id_marca' => '33',
                    'id_proveedor' => '2',
                    'precio' => '885',
                    'descripcion_corta' => 'Con su tecnología avanzada y diseño impecable, brinda un rendimiento óptimo y una experiencia de conducción inigualable.',
                    'descripcion_larga' => 'La tija telescópica RockShox Reverb AXS 31.6 es la primera tija telescópica electrónica y sin cables para mountain bike, con ella desaparecen muchas de las desventajas que tenían este tipo de tijas telescópicas y abre el camino al futuro.

                    Características:
                    - Uso estimado: 40 horas
                    - Recorridos disponibles: 100mm, 125mm, 150mm, 170mm
                    - Peso: 650 gr
                    - Tecnología Vent Valve: Permite que hagas por ti mismo una sencilla reparación, sin desmontar la tija y en pocos pasos. Presiona la válvula, comprime la tija, y listo. El aire se reconduce de nuevo a su cámara original, el aceite se queda en su sitio, y tú vuelves a obtener un rendimiento óptimo y fiable',
                    'imagen' => 'tijareverbaxs.webp'
                ],[
                    'nombre' => 'Reverb Stealth 30.9mm',
                    'tipo' => 'Tija telescópica',
                    'id_marca' => '33',
                    'id_proveedor' => '2',
                    'precio' => '297.95',
                    'descripcion_corta' => 'La tija telescópica RockShox Reverb Stealth se presenta este año con los componentes interiores revisados, como las juntas SKF, aún más seguras en las partes clave. Sus prestaciones también se han mejorado y con una fiabilidad superior.',
                    'descripcion_larga' => 'La tija telescópica RockShox Reverb Stealth cuenta con la tecnología Stealth (espacio interior para la funda) para un montaje limpio y sin riesgo de daños. Incluye el nuevo mando a distancia Reverb para los sistemas de plato único. Es similar a un cambio, con un funcionamiento muy sensible para aprovechar el recorrido de forma rápida y con el control en todo momento. Además, la conexión del latiguillo Bleeding Edge facilita la instalación y el mantenimiento, ya que podrás conectar y desconectar el sistema como si fuera un cierre rápido, sin tener que hacer una purga.

                    Características:
                    - Uso: MTB, Enduro, Downhill
                    - Diámetro: 30.9mm
                    - Recorrido: 100mm, 125mm, 150mm, 175mm, 200mm
                    - Recorrido total: 301mm, 351mm, 414mm, 467mm, 519.5mm
                    - Latiguillo: 2000mm
                    - Control remoto de manillar RockShox Standard Remote arriba derecha o abajo izquierda
                    - Peso: 581 g aprox.',
                    'imagen' => 'tijareverbstealth.webp'
                ]
                ,[
                    'nombre' => 'Maurten Solid C 225 Box',
                    'tipo' => 'Barrita',
                    'id_marca' => '35',
                    'id_proveedor' => '20',
                    'precio' => '42',
                    'descripcion_corta' => 'La caja SOLID 225 C contienes 12 unidades de 60g. SOLID225 C contiene cacao, lo que ofrece una alternativa de sabor o un reinicio de sabor durante el entrenamiento o la carrera.',
                    'descripcion_larga' => 'SOLID 225 C contiene Cacao. Un sabor diferente para tu paladar - un reset de sabor. Mismo fuel - mismo perfil nutricional. Misma textura. Mismo rendimiento nutricional que la SOLID 225 (Mismas calorías y carbohidratos). Sólo un toque de variedad.

                    Make a Solid meal of it
                    
                    El momento de repostar lo es todo. Cuanto más larga sea la sesión, más importante será. Solid permite a los atletas imitar su patrón alimentario normal en mitad de una sesión. Consumir fuel texturizado y masticable en momentos en los que normalmente comerían algo sólido. Mantener el equilibrio y el ritmo, limitando el estrés gastrointestinal.
                    
                    Te lo mereces
                    
                    Solid contiene una mezcla de glucosa y fructosa que muestra tasas de absorción similares a las de las bebidas de carbohidratos durante sesiones de intensidad baja a media. Es una dosis de comida real en carreras largas o entrenamientos constantes de más de 2 horas. Algo para morder y masticar, sin perder eficacia en la alimentación del cuerpo.
                    
                    Back to basics.
                    
                    SOLID se reinventa eliminando todo excepto lo esencial. Solid 225 es una fuente de energía de sabor dulce y natural, rápida y ligera, rica en carbohidratos y baja en fibra, el complemento perfecto para su Hydrogel. Cada Solid contiene 225 calorías y 44g de carbohidratos, incluyendo un mix de fructosa-glucosa, avena y arroz.
                    
                    SOLID es el primer producto de Maurten que no es hydrogel. Así que nos hemos ceñido a lo que sabemos. Hemos escuchado a la ciencia. Hemos escuchado a los atletas. Lo hemos reducido a lo esencial. Nos centramos en el rendimiento. El resultado es un masticable a base de avena y arroz centrado en el rendimiento. 
                    
                    Puede parecer una barrita energética, sentirse como una barrita y saber como una barrita, pero definitivamente no es una barrita común y corriente. Esto es Solid.
                    
                    Aquí hay algo para masticar.
                    
                    La mayoría de las barritas “energéticas” están hechas para que se consuman como snack. SOLID, por otro lado, está diseñado para impulsar tanto el rendimiento como la recuperación. Son mundos aparte: uno está dirigido al estante superior del supermercado, el otro a lo alto del podio.
                    
                    Sin embargo, casi todos los atletas que probaron SOLID destacaron su agradable textura a base de avena y arroz y su sabor natural. Lo cual, junto con una lista mínima de ingredientes que ofrece un fuel alto en carbohidratos y bajo en fibra, es una combinación ganadora.
                    
                    Alto en carbohidratos, bajo en azúcar
                    
                    Con todo tipo de azúcares.
                    
                    SOLID contiene una gran cantidad de carbohidratos, más que la mayoría de las barritas que existen. El sabor también ofrece un buen nivel de dulzor. No te dejes engañar pensando que solo hemos cargado de azúcar nuestras SOLID para lograr esto. Los carbohidratos y la dulzura provienen de una variedad de fuentes: azúcar, avena y arroz.
                    
                    Maurten Solid es intencionadamente baja en fibra. La fibra permanece más tiempo en el estómago, lo que ralentiza el metabolismo y ayuda a reducir el malestar gastrointestinal. Maurten Solid sólo contiene 11 ingredientes: todo lo que necesitas, nada que no necesites.
                    
                    No como otras barritas.
                    
                    New-trition.
                    
                    No nos propusimos hacer un producto comercial cuando comenzamos nuestro viaje SOLID. Pensamos: "Si hacemos una barrita que sea lo suficientemente buena para un ciclista o atleta de élite, será lo suficientemente buena para todos los atletas".
                    
                    Cuando lo investigamos y hablamos con nuestros atletas, nos dimos cuenta de que simplemente no había muchas opciones para una barrita centrada en el rendimiento. SOLID es el resultado. Puro y simple.
                    
                    Solid está diseñado para el rendimiento y está certificado por Informed Sport tras las pruebas por lotes realizadas por el laboratorio antidopaje de LGC.
                    
                    En los días previos a una carrera, Solid ayuda a cargar las reservas de glucógeno al tiempo que limita la fibra que puede dejar el cuerpo con sensación de lentitud.',
                    'imagen' => 'barritamaurtenC.jpg'
                ],[
                    'nombre' => 'Maurten Solid 225 Box',
                    'tipo' => 'Barrita',
                    'id_marca' => '35',
                    'id_proveedor' => '20',
                    'precio' => '42',
                    'descripcion_corta' => 'La caja SOLID 225 contienes 12 unidades de 60g. SOLID225 C contiene cacao, lo que ofrece una alternativa de sabor o un reinicio de sabor durante el entrenamiento o la carrera.',
                    'descripcion_larga' => '
                    Make a Solid meal of it
                    
                    El momento de repostar lo es todo. Cuanto más larga sea la sesión, más importante será. Solid permite a los atletas imitar su patrón alimentario normal en mitad de una sesión. Consumir fuel texturizado y masticable en momentos en los que normalmente comerían algo sólido. Mantener el equilibrio y el ritmo, limitando el estrés gastrointestinal.
                    
                    Te lo mereces
                    
                    Solid contiene una mezcla de glucosa y fructosa que muestra tasas de absorción similares a las de las bebidas de carbohidratos durante sesiones de intensidad baja a media. Es una dosis de comida real en carreras largas o entrenamientos constantes de más de 2 horas. Algo para morder y masticar, sin perder eficacia en la alimentación del cuerpo.
                    
                    Back to basics.
                    
                    SOLID se reinventa eliminando todo excepto lo esencial. Solid 225 es una fuente de energía de sabor dulce y natural, rápida y ligera, rica en carbohidratos y baja en fibra, el complemento perfecto para su Hydrogel. Cada Solid contiene 225 calorías y 44g de carbohidratos, incluyendo un mix de fructosa-glucosa, avena y arroz.
                    
                    SOLID es el primer producto de Maurten que no es hydrogel. Así que nos hemos ceñido a lo que sabemos. Hemos escuchado a la ciencia. Hemos escuchado a los atletas. Lo hemos reducido a lo esencial. Nos centramos en el rendimiento. El resultado es un masticable a base de avena y arroz centrado en el rendimiento. 
                    
                    Puede parecer una barrita energética, sentirse como una barrita y saber como una barrita, pero definitivamente no es una barrita común y corriente. Esto es Solid.
                    
                    Aquí hay algo para masticar.
                    
                    La mayoría de las barritas “energéticas” están hechas para que se consuman como snack. SOLID, por otro lado, está diseñado para impulsar tanto el rendimiento como la recuperación. Son mundos aparte: uno está dirigido al estante superior del supermercado, el otro a lo alto del podio.
                    
                    Sin embargo, casi todos los atletas que probaron SOLID destacaron su agradable textura a base de avena y arroz y su sabor natural. Lo cual, junto con una lista mínima de ingredientes que ofrece un fuel alto en carbohidratos y bajo en fibra, es una combinación ganadora.
                    
                    Alto en carbohidratos, bajo en azúcar
                    
                    Con todo tipo de azúcares.
                    
                    SOLID contiene una gran cantidad de carbohidratos, más que la mayoría de las barritas que existen. El sabor también ofrece un buen nivel de dulzor. No te dejes engañar pensando que solo hemos cargado de azúcar nuestras SOLID para lograr esto. Los carbohidratos y la dulzura provienen de una variedad de fuentes: azúcar, avena y arroz.
                    
                    Maurten Solid es intencionadamente baja en fibra. La fibra permanece más tiempo en el estómago, lo que ralentiza el metabolismo y ayuda a reducir el malestar gastrointestinal. Maurten Solid sólo contiene 11 ingredientes: todo lo que necesitas, nada que no necesites.
                    
                    No como otras barritas.
                    
                    New-trition.
                    
                    No nos propusimos hacer un producto comercial cuando comenzamos nuestro viaje SOLID. Pensamos: "Si hacemos una barrita que sea lo suficientemente buena para un ciclista o atleta de élite, será lo suficientemente buena para todos los atletas".
                    
                    Cuando lo investigamos y hablamos con nuestros atletas, nos dimos cuenta de que simplemente no había muchas opciones para una barrita centrada en el rendimiento. SOLID es el resultado. Puro y simple.
                    
                    Solid está diseñado para el rendimiento y está certificado por Informed Sport tras las pruebas por lotes realizadas por el laboratorio antidopaje de LGC.
                    
                    En los días previos a una carrera, Solid ayuda a cargar las reservas de glucógeno al tiempo que limita la fibra que puede dejar el cuerpo con sensación de lentitud.',
                    'imagen' => 'barritamaurten.jpg'
                ],[
                    'nombre' => 'GO Energy sabor plátano y caramelo 40 g',
                    'tipo' => 'Barrita',
                    'id_marca' => '36',
                    'id_proveedor' => '3',
                    'precio' => '1.55',
                    'descripcion_corta' => 'El compañero perfecto para tus actividades deportivas, brindándote un impulso rápido y delicioso.',
                    'descripcion_larga' => 'La barrita energética SIS GO Energy son un tentempié nutritivo, fácilmente digerible y con alto contenido en carbohidratos, hecho de frutas e ingredientes saludables. Proporciona un enfoque práctico y nutritivo para proporcionar carbohidratos durante el ejercicio. Probada por miles de atletas en las carreras más duras del mundo, satisface sus exigentes necesidades energéticas. Son ricas en carbohidratos (26 gramos), moderadas en proteínas (4,5 gramos) y bajas en grasas (2 gramos).

                    El agotamiento de las reservas de carbohidratos durante el ejercicio es una de las principales causas de la fatiga. Se sabe que el suministro de carbohidratos adicionales durante el ejercicio mejora el rendimiento, los tiempos de las carreras y retrasa la aparición de la fatiga.
                    
                    Características:
                    - 25 gramos de carbohidratos empaquetados en cada barra
                    - Hecho con ingredientes de frutas naturales
                    - Tamaño conveniente para las carreras o los entrenamientos
                    - Adecuado para los vegetarianos
                    - Perfecto antes o durante el ejercicio y como tentempié de carga energética entre comidas
                    - 139 kcal por barrita',
                    'imagen' => 'barritasisplatano.webp'
                ],[
                    'nombre' => 'GO Energy sabor plátano y caramelo 40 g',
                    'tipo' => 'Barrita',
                    'id_marca' => '36',
                    'id_proveedor' => '3',
                    'precio' => '1.55',
                    'descripcion_corta' => 'El compañero perfecto para tus actividades deportivas, brindándote un impulso rápido y delicioso.',
                    'descripcion_larga' => 'La barrita energética SIS GO Energy son un tentempié nutritivo, fácilmente digerible y con alto contenido en carbohidratos, hecho de frutas e ingredientes saludables. Proporciona un enfoque práctico y nutritivo para proporcionar carbohidratos durante el ejercicio. Probada por miles de atletas en las carreras más duras del mundo, satisface sus exigentes necesidades energéticas. Son ricas en carbohidratos (26 gramos), moderadas en proteínas (4,5 gramos) y bajas en grasas (2 gramos).

                    El agotamiento de las reservas de carbohidratos durante el ejercicio es una de las principales causas de la fatiga. Se sabe que el suministro de carbohidratos adicionales durante el ejercicio mejora el rendimiento, los tiempos de las carreras y retrasa la aparición de la fatiga.
                    
                    Características:
                    - 25 gramos de carbohidratos empaquetados en cada barra
                    - Hecho con ingredientes de frutas naturales
                    - Tamaño conveniente para las carreras o los entrenamientos
                    - Adecuado para los vegetarianos
                    - Perfecto antes o durante el ejercicio y como tentempié de carga energética entre comidas
                    - 139 kcal por barrita',
                    'imagen' => 'barritasisarandano.webp'
                ],[
                    'nombre' => 'Maurten Energy 100 40 g (5 unidades)',
                    'tipo' => 'Gel',
                    'id_marca' => '35',
                    'id_proveedor' => '20',
                    'precio' => '16.50',
                    'descripcion_corta' => 'El primer gel deportivo del mundo. Cada porción contiene 25 gramos de energía - encapsulada en un hidrogel. Sin colorantes ni conservantes.',
                    'descripcion_larga' => 'Este es el primer gel energético del mundo. Esta es una declaración audaz, sin embargo, desde una perspectiva técnica, los geles tradicionales son agua y carbohidratos mezclados en jarabes, los cuales, a menudo contienen sabores y conservantes añadidos. El GEL 100 es completamente diferente. Es una matriz de biopolímero, rellena de una combinación única de fructosa y glucosa (proporción de 0.8: 1) que permite la captación de hasta 100 gramos de carbohidratos por hora.

                    El GEL 100 ha sido creado a base de la tecnología de hidrogel y construido con seis ingredientes naturales. No contiene colorantes ni conservantes y viene en porciones de 40g que contienen un 60% de carbohidratos, lo que representa una relación alta de peso-energía.
                    
                    INSTRUCCIONES Consuma el gel minutos antes, durante y / o inmediatamente después de la actividad.
                    
                    CANTIDAD DE ENERGÍA Los estudios han demostrado que nuestros cuerpos pueden utilizar hasta 90 gramos de carbohidratos por hora. Recientemente se ha demostrado científicamente que la proporción de glucosa y fructosa de 0.8: 1 permite una absorción aún mayor: hasta 100 gramos por hora. El GEL 100 ha sido desarrollado utilizando esta relación, por lo que otorga mucha energía. Una porción contiene 25 gramos de carbohidratos.
                    
                    ¿COMO FUNCIONA? El GEL 100 ha sido creado a base de tecnología de hidrogel. El hidrogel permite el transporte sin complicaciones de los carbohidratos a través del estómago hasta el intestino, donde el agua, la sal y los carbohidratos son absorbidos.',
                    'imagen' => 'gelmaurten5ud.webp'
                ],[
                    'nombre' => 'Maurten Energy CAF100 40g (12 unidades)',
                    'tipo' => 'Gel',
                    'id_marca' => '35',
                    'id_proveedor' => '20',
                    'precio' => '46.20',
                    'descripcion_corta' => 'Energía encapsulada en un hidrogel natural. Cada Gel contiene 100mg de cafeína y 25 gramos de carbohidratos. Construido con 7 ingredientes - sin colorantes, sin conservantes ni sabores agregados.',
                    'descripcion_larga' => 'El GEL 100 CAF 100 contiene 100 mg de cafeína, que es el equivalente a 1,5 espresos, o una taza de café preparado. Eso es mucho, en comparación con muchos de los geles tradicionales que ya existen. Ofrece 25 gramos de carbohidratos a través de una combinación única de fructosa y glucosa (proporción de 0.8:1) que permite la absorción de hasta 100 gramos de carbohidratos por hora. Tiene una alta relación peso / energía y no contiene sabores, conservantes ni colorantes agregados. Al igual que todos nuestros productos, es apto para veganos.

                    Toma el GEL 100 CAF 100 solo durante períodos más cortos, o combínelo con otros productos de Maurten para asegurarse tener suficiente energía durante su entrenamiento o competición.',
                    'imagen' => 'gelmaurtencaf100.webp'
                ],[
                    'nombre' => 'Pack Go Isotonic Energy (7 unidades)',
                    'tipo' => 'Gel',
                    'id_marca' => '36',
                    'id_proveedor' => '2',
                    'precio' => '12.49',
                    'descripcion_corta' => 'Con 7 unidades de geles isotónicos, obtendrás la energía necesaria para alcanzar tus metas en cada entrenamiento.',
                    'descripcion_larga' => 'El pack geles SIS Go Isotonic Energy (7 unidades) están diseñados para consumirse sin agua, lo que significa que puede garantizar la entrega rápida de carbohidratos a sus músculos sin la sensación de hinchazón que a veces puede ocurrir con el exceso de alcohol.

                    Características:
                    - Cantidad: 7 unidades
                    - Formulación verdaderamente isotónica: no necesita agua
                    - 22 gramos de carbohidratos de rápida absorción por gel
                    - Formato conveniente y fácil de tomar
                    - Gel aromatizado de maltodextrina con edulcorante añadido.
                    - Apto para veganos',
                    'imagen' => 'gelsispack7.webp'
                ],[
                    'nombre' => 'Go Isotonic Energy sabor tropical 60 ml ',
                    'tipo' => 'Gel',
                    'id_marca' => '36',
                    'id_proveedor' => '2',
                    'precio' => '2.39',
                    'descripcion_corta' => 'Con su fórmula isotónica de rápida absorción, te proporciona la energía necesaria para alcanzar tus metas. ',
                    'descripcion_larga' => 'El gel energético SIS Go Isotonic Energy está diseñado para brindar un suministro rápido y conveniente de carbohidratos de gran sabor y fácil digestión sin la necesidad de agua, nuestro gel isotónico GO Energy fue el primero en el mundo y el ganador del Queens Award for Enterprise. Sigue siendo una fuente de energía para los atletas de élite en todo el mundo.

                    Características:
                    - Cantidad: 1 unidad
                    - El primer gel de energía isotónica del mundo
                    - 87 calorías por porción
                    - Proporciona un suministro de carbohidratos rápido y de fácil digestión
                    - Alto contenido de carbohidratos
                    - Mejora el rendimiento
                    - No requiere agua ni líquido adicional
                    - Embalaje ligero, compacto y fácil de transportar',
                    'imagen' => 'gelsistropical.webp'
                ]
                ,[
                    'nombre' => 'MAURTEN DRINK MIX 320 CAF100 BOX',
                    'tipo' => 'Hidratación',
                    'id_marca' => '35',
                    'id_proveedor' => '20',
                    'precio' => '52.50',
                    'descripcion_corta' => 'Cafeína, carbohidratos e hidratación. DRINK MIX 320 CAF 100 lo tiene todo. Un producto sin ningún tipo de ácido, colorante o sabor añadido. Contiene 100 mg de cafeína.',
                    'descripcion_larga' => 'INSTRUCCIONES
                    Mezcla el contenido de cada sobre con 500 ml de agua y agítalo bien hasta que quede completamente disuelto. Procede con cuidado, es necesario mezclar las cantidades adecuadas para que la tecnología de hidrogel funcione. El contenido está diseñado para mezclarlo con agua que tenga un contenido de calcio menor a 40mg/L. Niveles más altos de calcio podrían afectar su disolución. Puedes consumir la bebida antes, durante y/o después de realizar actividad física. Cafeína, carbohidratos e hidratación. DRINK MIX 320 CAF 100 lo tiene todo. Un producto sin ningún tipo de ácido, colorante o sabor añadido. Al utilizar la tecnología hydrogel, hemos logrado ocultar el amargor de la cafeína. DRINK MIX 320 CAF100 contiene 100mg de cafeína. 
                    
                    ¿POR QUÉ CAFEÍNA?
                    
                    Se ha demostrado que la cafeína promueve el estado de alerta y reduce la percepción del esfuerzo y el dolor. Estas son propiedades que puedes resultar beneficiosas para el rendimiento deportivo. El DRINK MIX 320 CAF 100 se puede usar para aumentar los niveles de cafeína - sólo o junto con otras fuentes de cafeína - para lograr niveles suficientes de cafeína durante la actividad.
                    
                    CANTIDAD DE ENERGÍA
                    Un sobre de Drink Mix 320 CAF100, con 500 ml de agua, contiene 80 gramos de carbohidratos.
                    
                    ¿CÓMO FUNCIONA? 
                    Drink Mix 320 CAF100 es una bebida con tecnología de hidrogel aplicada. Cuando el polvo se mezcla con agua, se crea una bebida deportiva que contiene una alta concentración de maltodextrina y fructosa. La bebida deportiva se convierte instantáneamente en hidrogel una vez que entra en contacto con el acido del estómago. El hidrogel permite un transporte fluido y rápido de la bebida hacia el intestino, donde el agua, la sal y los carbohidratos son absorbidos rapidamente.
                    
                    ENVASE
                    
                    Caja Drink Mix 320 CAF100 contiene 14 monodosis de 80 gramos. 
                    
                    ',
                    'imagen' => 'hidratantemaurtenmixbox.webp'
                ],[
                    'nombre' => 'MAURTEN DRINK MIX 320 BOX',
                    'tipo' => 'Hidratación',
                    'id_marca' => '35',
                    'id_proveedor' => '20',
                    'precio' => '45',
                    'descripcion_corta' => '¿Está buscando una gran concentración de energía en una cantidad limitada de líquido? Los mejores corredores de maratón la están hoy utilizando. Una ración de Drink Mix 320 (kcal) contiene 80 gramos de carbohidratos. Cada caja contiene 14 unidades.',
                    'descripcion_larga' => 'INSTRUCCIONES
                    Mezcla el contenido de cada sobre con 500 ml de agua y agítalo bien hasta que quede completamente disuelto. Procede con cuidado, es necesario mezclar las cantidades adecuadas para que la tecnología de hidrogel funcione. El contenido está diseñado para mezclarlo con agua que tenga un contenido de calcio menor a 40mg/L. Niveles más altos de calcio podrían afectar su disolución. Puedes consumir la bebida antes, durante y/o después de realizar actividad física.
                    
                    CANTIDAD DE ENERGÍA
                    Un sobre de Drink Mix 320, con 500 ml de agua, contiene 80 gramos de carbohidratos.
                    
                    ¿CÓMO FUNCIONA? 
                    Drink Mix 320 es una bebida con tecnología de hidrogel aplicada. Cuando el polvo se mezcla con agua, se crea una bebida deportiva que contiene una alta concentración de maltodextrina y fructosa. La bebida deportiva se convierte instantáneamente en hidrogel una vez que entra en contacto con el acido del estómago. El hidrogel permite un transporte fluido y rápido de la bebida hacia el intestino, donde el agua, la sal y los carbohidratos son absorbidos rapidamente.
                    
                    ENVASE
                    
                    Caja Drink Mix 320 contiene 14 monodosis de 80 gramos. 
                    
                    ',
                    'imagen' => 'hidratantemaurtenmix320box.webp'
                ],[
                    'nombre' => 'Go Hydro Tablet sabor cola cafeína ',
                    'tipo' => 'Hidratación',
                    'id_marca' => '36',
                    'id_proveedor' => '3',
                    'precio' => '7.95',
                    'descripcion_corta' => 'Pon una tableta Go Hydro Tablet en el bidón de agua para obtener una hidratación efectiva, sin calorías, antes y durante el ejercicio.',
                    'descripcion_larga' => 'La bebida isotónica SIS Go Hydro Tablet proporciona una rápida hidratación sin calorías. Contiene niveles precisos de sodio y otros electrolitos para hidratarte durante el ejercicio intenso. Durante ejercicios moderados o intensos, podemos producir hasta 2 litros de sudor por hora, dependiendo de las condiciones climáticas. El sudor contiene electrolitos vitales como el sodio. El sodio es el electrolito más importante ya que ayuda a estimular la sed, mejora el sabor y promueve la absorción y retención. Si los líquidos y electrolitos que perdemos no se reponen, la deshidratación aparece. La mayor causa de la deshidratación es la fatiga. Una vez deshidratado la temperatura de tu cuerpo aumenta; se incrementa tu frecuencia cardíaca; los depósitos de carbohidratos se vacían más rápido y se percibe más duro el ejercicio. Go Hydro Tablet te ayuda a prevenir esto, con el objetivo de no perder más de tu 2% de masa muscular.

                    Características:
                    - Presentación: envase de 20 tabletas
                    - Ingredientes: Electrolitos (34%), bicarbonato de sodio, cloruro de sodio, carbonato de calcio, cloruro de potasio, fosfato tricálcico, citrato de zinc, carbonato de magnesio), ácido cítrico, sorbitol, inulina, polvo de jugo de remolacha roja, maltodextrina, aromatizante, Vitaminas (clorhidrato de piridoxina, riboflavina 5-fosfato, clorhidrato de tiamina)
                    - Alto contenido en sodio para ayudar a promover la hidratación
                    - Hidratación sin aporte extra de calorías
                    - Apto para veganos
                    - Modo de empleo: Disolver una tableta efervescente en 500 ml de agua. Una vez preparado consumir en las siguientes 24 Horas. No consumir más de 4 tabletas efervescentes al día. Consumir 500 ml de preparado SIS Go Hydro Tablet 3-4 horas antes de la competición con un máximo de 250-500 ml media hora antes de la salida. Durante un ejercicio corto, la ingesta de carbohidratos no es necesaria, consume 500 ml de preparado SIS GO Hydro Tablet por hora. Si tu propósito es combinar la hidratación y aporte energético, puedes consumir el SIS GO Hydro Tablet con cualquier SIS GO Gel',
                    'imagen' => 'hidratantesistablets.webp'
                ],[
                    'nombre' => 'Beta Fuel 80 82 g sabor fresa lima',
                    'tipo' => 'Hidratación',
                    'id_marca' => '36',
                    'id_proveedor' => '3',
                    'precio' => '3.49',
                    'descripcion_corta' => 'Es la bebida energética de doble fuente proporciona 80 g de carbohidratos optimizados en una única y cómoda solución isotónica para repostar con un riesgo mínimo de malestar gastrointestinal que le permite mantener un rendimiento óptimo.',
                    'descripcion_larga' => 'El sobre SIS Beta Fuel 80 82 es la bebida energética de doble fuente proporciona 80 g de carbohidratos optimizados en una única y cómoda solución isotónica para repostar con un riesgo mínimo de malestar gastrointestinal que le permite mantener un rendimiento óptimo. Una proporción de 1:0,8 de maltodextrina y fructosa aumenta el porcentaje de carbohidratos ingeridos que se oxida (conocido como eficiencia) del 62% al 74% en comparación con una proporción de 2:1. También reduce los síntomas de saciedad estomacal autodeclarados. A través de un equipo de Soluciones de Rendimiento, SIS trabajó estrechamente con atletas de élite en la investigación y desarrollo de la nueva gama Beta Fuel para ofrecerle un combustible científicamente superior en una gama de formatos que le permiten utilizar +17% más de carbohidratos.

                    Características:
                    - Cantidad: 1 sobre
                    - Un sobre de Beta Fuel Energy Drink contiene una porción (82g) de polvo. Vierta la fórmula mixta en 600 ml de agua y agítela para que se disuelva
                    - Beba poco y a menudo durante un ejercicio de resistencia prolongado
                    - Utiliza un sobre de polvo por hora o combínalo con Beta Fuel Gels o Chew Bar para alcanzar la ingesta de 80-120g de carbohidratos por hora
                    - 80 g de HC por ración
                    - Formulación isotónica',
                    'imagen' => 'hidratantesisbeta.webp'
                ]
                // ,[
                //     'nombre' => '',
                //     'tipo' => '',
                //     'id_marca' => '',
                //     'id_proveedor' => '',
                //     'stock' => '',
                //     'color' => json_encode(['']),
                //     'talla' => '',
                //     'precio' => '',
                //     'descripcion_corta' => '',
                //     'descripcion_larga' => '',
                //     'imagen' => ''
                // ]

            ]
        );
    }
}
