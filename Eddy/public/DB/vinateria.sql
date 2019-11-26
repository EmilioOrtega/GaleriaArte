-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2019 a las 02:53:08
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vinateria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Whiskey'),
(2, 'Tequila'),
(3, 'Ron'),
(4, 'Ginebra'),
(5, 'Brandy'),
(6, 'Mezcal'),
(7, 'Cerveza'),
(8, 'Otros'),
(9, 'Vinos'),
(10, 'Vodka');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` bigint(20) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `producto` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `subtotal` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `compras`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `compras` (
`no_compra` bigint(20)
,`usuario` varchar(30)
,`id` bigint(20)
,`producto` varchar(50)
,`contenido` int(11)
,`categoria` varchar(30)
,`precio` double
,`descripcion` text
,`cantidad` int(11)
,`imagen` varchar(60)
,`descuento` double
,`marca` varchar(50)
,`origen` varchar(30)
,`fecha` datetime
,`cantidad_comprada` int(11)
,`total` double
,`subtotal` double
,`tarjeta` bigint(20)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `origen` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `contenido` int(11) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `imagen` varchar(60) DEFAULT NULL,
  `descuento` double DEFAULT NULL,
  `marca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `contenido`, `categoria`, `precio`, `descripcion`, `cantidad`, `imagen`, `descuento`, `marca`) VALUES
(1, 'Whiskey Jack Daniels Honey', 700, 1, 357.99, 'Jack Daniel´s Honey en busca de romper esquemas y de agregar a la tradición un toque de originalidad', 2, '1.png', NULL, NULL),
(2, 'Cerveza clara Coors light', 355, 7, 93, 'Para ti desde las Rocky Mountains en Estados Unidos la cerveza clara Coors light ha refrescado las gargantas de millones de personas alrededor del mundo con su característica forma de elaboración filtrada al punto de la congelación.', 6, '2.png', NULL, NULL),
(3, 'Cerveza Tsingtao premium tipo lager', 330, 7, 39.4, 'Tsingtao, fundada por alemanes y nacida en el puerto de Quingdao al noreste de China en 1903. Tsingt es una pilsner increíblemente suave y fácil de tomar, reconocida internacionalmente como la cerveza más fina y más vendida de China.', 1, '3.png', NULL, NULL),
(4, 'Cerveza Clara Corona', 355, 7, 96, 'Esta presentación de Corona Extra en botella 6 pack de 355ml es ideal para disfrutar junto con tus seres queridos en una fiesta o reunión y con cualquier platillo de mariscos y pescados. Contiene 4.5% de nivel de alcohol.', 6, '4.png', NULL, NULL),
(5, 'Cerveza clara Estrella', 473, 7, 60, 'Estrella Jalisco es una pilsner mexicana de alta calidad con un volumen de alcohol de 4.5%, un hermoso color claro dorado, y ligero y refrescante sabor sin amargura.', 4, '5.png', NULL, NULL),
(6, 'Cerveza La Chouffe', 330, 7, 70.5, 'De color dorado y espuma efervescente, con un sutil aroma a cilantro. Presenta sabores a durazno y albaricoque y un agradable final a lúpulo con toque de especias. Es la cerveza que les brinda la chispa de la vida a los gnomos de Fairyland.', 1, '6.png', NULL, NULL),
(7, 'Vino blanco espumoso Freixenet Cordon Negro Brut', 750, 9, 463, 'Vino blanco espumoso Freixenet Cordon Negro Brut 750 ml, 12 % Alc. Vol.3.', 1, '7.png', NULL, NULL),
(8, 'Vino tinto Lambrusco OgniGiorno espumoso dell emil', 750, 9, 105, 'Este producto de la región italiana de la Emilia, es un tipo de vino espumoso de color rosa agradable y de muy buena calidad, posee un aroma muy agradable de fresas, frambuesas y ciruelas frescas. Este vino lambrusco tiene su punto de gas natural muy equilibrado y en boca se confirma su calidad.', 1, '8.png', NULL, NULL),
(9, 'Vino tinto Siglo crianza rioja', 750, 9, 298, 'La Rioja, región vinícola en España, es reconocida por dar el distintivo denominación de origen por la elaboración de vino tinto del lugar. De esta zona, ponemos a tu disposición el Siglo Crianza.', 1, '9.png', NULL, NULL),
(10, 'Vino blanco Zonin pinot grigio friuli aquileia', 750, 9, 157, 'Este vino italiano es fácil de beber y marida muy bien con recetas de pescado, mariscos y ensaladas.', 1, '10.png', NULL, NULL),
(11, 'Vino tinto Oso toscana', 750, 9, 232, 'Es un buen acompañante para pastas con salsas especiadas, guisos de carne y quesos semimaduros.', 1, '11.png', NULL, NULL),
(12, 'Ginebra destilada Mom', 700, 4, 489, 'Esta elaborada con ingredientes herbales e infusionada con frutos rojos, lo que le da un sabor único.', 1, '12.png', NULL, NULL),
(13, 'Tequila Cazadores blanco', 950, 2, 272, 'Tiene un brillante color y un sabor intenso con notas aromáticas cítricas - herbales y una presencia magistal.', 1, '13.png', NULL, NULL),
(14, 'Tequila Cazadores reposado', 700, 2, 245, 'De apariencia brillante y notas doradas, con sutiles aromas a madera, vainilla, especias y agave cocido. Con gusto perfectamente balanceado, favoreciendo gran variedad de combinaciones. Añejado en barricas nuevas de roble blanco hasta cuatro meses.', 1, '14.png', NULL, NULL),
(15, 'Ginebra The London original blue', 700, 4, 748, 'Esta bebida es muy versátil y puede tomarse en las rocas o preparar cocteles clásicos, como el gin and tonic o el martini seco. Tenemos un gran surtido de marcas de ginebra para experimentes y pruebes cual es la que más te gusta.', 1, '15.png', NULL, NULL),
(16, 'Ginebra Larios', 700, 4, 245, 'Es el resultado de una doble destilación en alambiques de cobre de las mejores plantas aromáticas y frutas con una base de bayas de enebro a la que se le añaden cítricos como el limón del Mediterráneo y las naranjas de Haití, canela y almendras.', 1, '16.png', NULL, NULL),
(17, 'Tequila Hacienda reposado', 700, 2, 192, 'Tequila Sauza Hacienda Rep 700ml, con 4 meses de reposo y color amarillo con tonos dorados.', 1, '17.png', NULL, NULL),
(18, 'Vodka Gorloska', 1000, 10, 87.99, 'Elaborado 100% de grano, y obtenido bajo estrictas normas de destilación. Con apariencia cristalina y brillante, es ideal para tomarse solo, en las rocas o combinado. Sorprende amigos y familiares mezclando exquisitos tragos con esta deliciosa bebida alcohólica.', 1, '18.png', NULL, NULL),
(19, 'Whisky Maker´s Mark', 700, 1, 430, 'Makers Mark es suave y accesible con un acabado fácil, un verdadero contraste con los whiskies calientes y duros que te sacan el polvo y es totalmente revolucionario. Makers Mark se elabora lentamente en pequeños lotes, en nuestra destilería National Historic Landmark en Loretto, Kentucky.', 1, '19.png', NULL, NULL),
(20, 'Whisky Glenfiddich 12 años escocés', 750, 1, 891, 'Esta bebida alcohólica destaca por satisfacer a los paladares más exigentes, tiene un atractivo color oro, un aroma fresco y elegante con notas de madera suave y pera, en boca revela un toque dulce y presencia de minerales. Este whisky escocés, está hecho con la cebada de la mejor calidad en Escocia.', 1, '20.png', NULL, NULL),
(21, 'Ron Flor de Caña añejo oro 4 años', 750, 3, 204, 'Si buscas consentir a tu paladar y el de todos tus invitados en fiestas o reuniones, no olvides añadir a tu carrito de compras en línea el increíble sabor de ron Flor de Caña añejo oro 4 años de 750 ml. Un ron con cuerpo, aroma y sabor tan espectaculares que será el aliado perfecto para preparar tus cocteles favoritos.', 1, '21.png', NULL, NULL),
(22, 'Ron Zacapa ámbar 12 años', 750, 3, 481, 'Disfruta de cualquier cóctel con ron gracias a Ron Zacapa ámbar 12 años en su presentación de 750 ml.', 1, '22.png', NULL, NULL),
(23, 'Tequila 1800 añejo', 700, 2, 538, 'Como el tequila 1800, una bebida mexicana representativa de nuestra cultura, está elaborada con agave azul, tiene carácter y tonos herbales, en boca, su final es picante y redondo con notas de roble tostado, vainilla y caramelo, envejeció dos años en barricas elaboradas de encino americano y roble francés. Este tequila añejo cuenta con 38% de alcohol por volumen, por lo que se recomienda tomarlo con moderación.', 1, '23.png', NULL, NULL),
(24, 'Tequila Corralejo reposado', 1000, 2, 390, 'Tenemos para tí en nuestro catálogo en línea el tequila Corralejo reposado, el cual cuenta con una excelente presentación y además su sabor y aroma son exquisitos.', 1, '24.png', NULL, NULL),
(25, 'Tequila Carrera reposado', 750, 2, 348, 'Experimenta su complejo proceso de elaboración de selección de agave en esta bebida alcohólica en un solo sorbo, deleita tu paladar con su exquisito sabor.', 1, '25.png', NULL, NULL),
(26, 'Ron Matusalem Gran Reserva 23 años', 750, 3, 1040, 'El ron Matusalem Gran Reserva 23 años es una bebida alcohólica procedente de República Dominicana, que no puede faltar cuando celebras alguna ocasión importante. Contiene notas de frutos secos con toques de flor de almendro y magnolia, dejando una sensación de miel fresca.', 1, '26.png', NULL, NULL),
(27, 'Brandy Torres 5', 700, 5, 114, 'Cuenta con un sabor perfecto para acompañar tus reuniones especiales en compañía de tus seres queridos, la mejor manera de disfrutarlo es por sí solo, pero si prefieres realizar algún tipo de bebida añadiéndole un poco de este brandi, obtendrás una mezcla ideal.', 1, '27.png', NULL, NULL),
(28, 'Whisky Black & White escocés', 700, 1, 194, 'Black & White es un delicioso whisky que deleitará tu paladar desde el primer sorbo; un producto escocés en presentación de 700 ml, su aroma, sabor y cuerpo es ideal para disfrutar por si solo o incluso preparar una amplia variedad de cocteles a base de whisky.', 1, '28.png', NULL, NULL),
(29, 'Vodka Absolut mandrin', 750, 10, 241, 'Si te gustan los tragos con vodka llévate esta botella con un ligero sabor a mandarina ideal para preparar bebidas populares como un desarmador, un vodka tonic y hasta un Cosmopolitan. Nunca había sido tan fácil preparar deliciosos cocteles con vodka.', 1, '29.png', NULL, NULL),
(30, 'Ron Bacardí Oakheart con especias', 750, 3, 174, 'Es un ron rico, suave y profundo con una mezcla de especias y sabores de la más alta calidad que trabajan juntos para crear en Oakheart un sabor dulce, rico en vainilla y caramelo, que armoniza la intensidad del barril quemado.', 1, '30.png', NULL, NULL),
(31, 'Whisky Johnnie Walker Double Black escocés', 750, 1, 963, 'Este producto contiene 40% de alcohol por volumen y está elaborado con una mezcla de maltas ahumadas intensas, destiladas con especias y frutas para darle un tono fuerte. Este licor ganó oro en el Spirits Challenge, un prestigioso reconocimiento a la calidad de lo mejor a nivel internacional. Presentación de 750 mililitros.', 1, '31.png', NULL, NULL),
(32, 'Vodka Ketel One', 750, 1, 399, 'Está elaborado con una combinación de técnicas de destilación modernas y tradicionales con alambiques de cobre. En nariz se presentan notas frescas de cítricos y miel.', 1, '32.png', NULL, NULL),
(33, 'Tequila Don Julio reposado', 700, 2, 426, 'Desde los altos de Jalisco. Un tequila reposado lleno de tradición, envejecido por al menos 8 meses en barricas de roble blanco americano que brindan a Don Julio Reposado su inigualable y característico sabor cítrico y especiado. De gran brillantez y tonos dorados, con suaves notas de chocolate oscuro, vainilla y canela clara que se equilibran con toques sutiles de pera y manzana dándole un ligero sabor acaramelado. Su delicioso e invitante aroma de agave cocido y miel lo hacen perfecto para servirse a lado de un buen platillo típico mexicano. Don Julio Reposado, el reposado de lujo más reconocido de México.', 1, '33.png', NULL, NULL),
(34, 'Vodka Oso Negro', 1000, 10, 81, 'Sé el alma de la fiesta creando bebidas mezcladas con este destilado, como el sensual Sex on the beach o el famoso té helado Long island, y cautiva los sentidos de todos tus amigos. Recuerda consumirlo con moderación, ya que cuenta con un 38% de volumen de alcohol.', 1, '34.png', NULL, NULL),
(35, 'Brandy Torres 10', 700, 5, 274, 'Disfruta del sabor tan especial del Brandy Torres 10, un excelente producto que consentirá tu paladar a cada sorbo que des.', 1, '35.png', NULL, NULL),
(36, 'Whisky The Macallan 12 años escocés', 700, 1, 1045, 'Disfruta el sabor añejado del roble combinado con una selección de exquisitos frutos secos, toques de vainilla, bourbon y jerez. Déjate seducir por su suave aroma a miel de brezo y ríndete ante su compleja e incomparable textura.', 2, '36.png', NULL, NULL),
(37, 'Mezcal Alacrán artesanal 36', 750, 6, 495, 'Es un mezcal artesanal cocido en hornos de tierra, molienda de tahona y fermentación orgánica.', 1, '37.png', NULL, NULL),
(38, 'Mezcal artesanal Bruxo receta inicial espadín ', 750, 6, 377, 'Contamos con el mezcal artesanal Bruxo receta inicial espadín suave, el cual tiene un excelente sabor, textura y aroma que te harán trasladarte hasta donde se produce esta deliciosa bebida: la mágica tierra de Oaxaca. El mezcal Bruxo está hecho a base de maguey espadín, es por eso que cuenta con un color cristalino y un sabor suave que no te resistirás a probarlo en ningún momento.', 1, '38.png', NULL, NULL),
(39, 'Whisky Old Smuggler', 700, 1, 143, 'Reconócelo por su presentación de 700 ml, en una elegante botella de cristal en la que resalta su color dorado. Tiene un destilado elaborado con las más selectas maltas de cereales, en su sabor descubrirá toques de tabaco y vainilla, gracias que cuenta con un tiempo de añejamiento de 6 años en barricas de roble.\r\n\r\nReconócelo por su presentación de 700 ml, en una elegante botella de cristal en la que', 1, '39.png', NULL, NULL),
(40, 'Ginebra Tanqueray seca', 750, 4, 327.01, 'Elaborada mediante un meticuloso proceso, donde el ingrediente principal son las bayas de enebro, hecho que le da ese carácter atrevido que la ha llevado a ser una bebida ampliamente galardonada a nivel mundial.', 1, '40.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `productos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `productos` (
`id` bigint(20)
,`producto` varchar(50)
,`contenido` int(11)
,`categoria` varchar(30)
,`precio` double
,`descripcion` text
,`cantidad` int(11)
,`imagen` varchar(60)
,`descuento` double
,`marca` varchar(50)
,`origen` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `telefono` char(12) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `tipo_usuario` char(1) DEFAULT NULL,
  `tarjeta` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura para la vista `compras`
--
DROP TABLE IF EXISTS `compras`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `compras`  AS  select `compra`.`id` AS `no_compra`,`usuario`.`usuario` AS `usuario`,`productos`.`id` AS `id`,`productos`.`producto` AS `producto`,`productos`.`contenido` AS `contenido`,`productos`.`categoria` AS `categoria`,`productos`.`precio` AS `precio`,`productos`.`descripcion` AS `descripcion`,`productos`.`cantidad` AS `cantidad`,`productos`.`imagen` AS `imagen`,`productos`.`descuento` AS `descuento`,`productos`.`marca` AS `marca`,`productos`.`origen` AS `origen`,`compra`.`fecha` AS `fecha`,`compra`.`cantidad` AS `cantidad_comprada`,`compra`.`total` AS `total`,`compra`.`subtotal` AS `subtotal`,`usuario`.`tarjeta` AS `tarjeta` from ((`compra` join `usuario` on(`usuario`.`usuario` = `compra`.`usuario`)) join `productos` on(`compra`.`producto` = `productos`.`id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `productos`
--
DROP TABLE IF EXISTS `productos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productos`  AS  select `producto`.`id` AS `id`,`producto`.`nombre` AS `producto`,`producto`.`contenido` AS `contenido`,`categoria`.`nombre` AS `categoria`,`producto`.`precio` AS `precio`,`producto`.`descripcion` AS `descripcion`,`producto`.`cantidad` AS `cantidad`,`producto`.`imagen` AS `imagen`,`producto`.`descuento` AS `descuento`,`marca`.`nombre` AS `marca`,`marca`.`origen` AS `origen` from ((`producto` join `categoria` on(`producto`.`categoria` = `categoria`.`id`)) join `marca` on(`producto`.`marca` = `marca`.`id`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compra_ibfk_1` (`usuario`),
  ADD KEY `compra_ibfk_2` (`producto`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_ibfk_1` (`categoria`),
  ADD KEY `producto_ibfk_2` (`marca`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
