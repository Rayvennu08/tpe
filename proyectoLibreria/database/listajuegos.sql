-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2022 a las 03:27:10
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `listajuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id_brand` int(11) NOT NULL,
  `brand_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id_brand`, `brand_name`) VALUES
(1, 'Activision Blizzard'),
(2, 'Electronic Arts'),
(3, 'From Software'),
(4, 'Riot games'),
(5, 'Ubisoft'),
(6, 'Valve');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `games`
--

CREATE TABLE `games` (
  `id_juego` int(11) NOT NULL,
  `juego_name` varchar(45) NOT NULL,
  `sinopsis` text NOT NULL,
  `calificacion` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `games`
--

INSERT INTO `games` (`id_juego`, `juego_name`, `sinopsis`, `calificacion`, `id_brand`) VALUES
(1, 'Black', 'asdasdqweqdasdasda', 8, 2),
(6, 'Elden Ring', '\"La historia de Elden Ring es la del Sinluz, un exiliado que regresa a un marchito y enorme reino conocido como las Tierras Intermedias. Su propósito: reclamar el poder del Círculo de Elden. Una gesta que lo enfrentará a criaturas de pesadilla y un cruel destino.\"', 9, 3),
(7, 'Sekiro: Shadows Die Twice', '\"El juego sigue a un shinobi del Período Sengoku, conocido como Lobo, que intenta vengarse de un clan de samuráis que atacó y secuestró a su maestro.\"', 9, 3),
(8, 'League of Legends', '\"Es un juego de estrategia por equipos en el que dos equipos conformados por cinco poderosos campeones se enfrentan para destruir la base del otro.\"', 8, 4),
(9, 'Counter-Strike 1.6', '\"Es un videojuego de disparos en primera persona multijugador (ya sea en LAN o en línea) desarrollado por Valve para Microsoft Windows.\"', 9, 6),
(10, 'Assassin\'s Creed 2', '\"El argumento de este juego es más comprensible si el jugador conoce el del previo Assassin\'s Creed y el del corto Assassin\'s Creed: Lineage.\r\n\r\nEl jugador controla a Desmond Miles, un barman que fue secuestrado en el año 2012 por los Templarios. El juego comienza con la huída de Desmond de las oficinas de Abstergo ayudado por Lucy Stillman, una joven perteneciente a los Asesinos. Una vez lograda la huída, Desmond es transportado a uno de los refugios de los Asesinos, el cual posee un Animus. Al igual que en el primer Assassin\'s Creed, Desmond manejará a un antepasado suyo, que en este caso será Ezio Auditore Da Firenze, el cual vivió en el Renacimiento.\"', 9, 5),
(11, 'World of Warcraft', '\"Está basado en el mundo de ficción e historia de Warcraft, donde se adopta el papel de un personaje virtual que interactúa con otros personajes y desarrolla situaciones en un ambiente fantástico como en un juego de rol, siendo la cuarta entrega situada en este universo.\"', 9, 1),
(12, 'Diablo', '\"Se basa en la premisa de una guerra entre El Cielo y El infierno. La ciudad de Tristán está bajo el ataque de hordas demoníacas, que emergen debajo de la ruinas de la Catedral de Tristán, de las cuales el jugador debe salvar la ciudad. Como el jugador se adentra en una red de mazmorras y cuevas debajo de las catacumbas, descubre más sobre el demonio Diablo, a través de tomos de gran tamaño que se encuentran en todo los niveles.\"', 9, 1),
(13, 'Far Cry 6', '\"El juego se desarrolla en Yara, una isla caribeña ficticia que yace bajo una dictadura liderada por \"El Presidente\" Antón Castillo quien está preparando a su hijo, Diego, para que continúe con su mandato. El jugador encarna al guerrillero Dani Rojas, quien busca derrocar a Castillo y a su régimen.\"', 7, 5),
(14, 'FIFA 20', '\"Es la nueva edición de la saga de simulación deportiva de EA Sports, y la séptima entrega de la serie en la generación de consolas encabezada por Xbox One y PlayStation 4, así como por Nintendo Switch.\"\r\n', 8, 2),
(15, 'Hearthstone: Heroes of Warcraft', '\"Es un videojuego de cartas inspirado en el universo de Warcraft, en el que los jugadores irán formando su mazo y compitiendo contra otros jugadores. Se podrán obtener cartas de ellos, \r\no adquiriéndolas en el juego, y también combinar cartas para conseguir otras más poderosas.\"', 9, 1),
(16, 'Team Fortress 2', '\"Team Fortress 2, abreviado por su acrónimo TF2, es un videojuego multijugador de disparos en primera persona desarrollado y publicado por Valve.\"', 9, 6),
(17, 'Left 4 Dead 2', '\"Left 4 Dead 2 se desarrolla tres semanas después del primer brote viral que se ha expandido en el sur de los Estados Unidos, infectando los territorios entre Georgia y Luisiana.\r\nSu argumento, que gira en torno a la supervivencia en medio del apocalipsis zombi, se desarrolla con cuatro nuevos personajes supervivientes en seis extensas campañas. Donde cada una cuenta con su propio póster de presentación, como si se tratasen de películas.\"', 9, 6),
(18, 'Dota 2', '\"Dota 2 es un juego multijugador de estrategia en tiempo real, distribuido por la plataforma Steam de Valve. En este, dos equipos de cinco jugadores tienen el objetivo de destruir las estructuras rivales controlando a personajes denominados héroes. Ellos no pueden controlar las estructuras ni a las unidades que aparecen cada cierto tiempo.\"', 9, 6),
(19, 'Call of Duty: Warzone', '\"Es un videojuego de disparos en primera persona, perteneciente al género Battle royale gratuito.\"', 8, 1),
(20, 'Call of Duty: Modern Warfare 3', '\"En las horas más oscuras del mundo, ¿estarás dispuesto a hacer lo que sea necesario? Prepárate para una emocionante vivencia cinematográfica que sólo Call of Duty puede ofrecer. La experiencia multijugador definitiva regresa más grande y mejor que nunca, cargada con nuevos mapas, modos y características.\"', 9, 1),
(21, 'Bloodborne', '\"Bloodborne cuenta la historia de una noche en la ciudad de Yharnam: una noche de cacería. Todo apunta a que algo va muy mal en esta ciudad, una misteriosa enfermedad que se apodera de sus habitantes y los convierte en bestias. Y a las bestias se las caza. En esta noche la buena gente se atrinchera en sus casas y reza mientras unos personajes conocidos como cazadores merodean por las calles, aniquilando bestias, aliviando así la carga de los habitantes de la ciudad.\"', 9, 3),
(22, 'Ninja Blade', '\"En Ninja Blade seremos Ken Ogawa, un neo-ninja encargado de acabar con una misteriosa plaga que amenaza con destruir a la humanidad.\r\nEste Virus Alpha se extiende con una velocidad preocupante, y ha conseguido causar la friolera de 2.000 víctimas mortales en la ciudad japonesa en sólo 24 horas.\r\nAquí entraremos en contacto de forma más directa con el videojuego, y encarnando a Ken, uno de los ninjas, como principal esperanza para erradicar el mal que se cierne sobre la ciudad nipona.\"', 6, 3),
(23, 'Brawlhalla', '\"Brawlhalla es un épico juego de lucha y plataformas gratuito de hasta 8 jugadores online, o en local. Juega partidas ocasionales, participa en partidas clasificatorias o crea una sala personalizada para tus amigos.\"', 7, 5),
(24, 'Just Dance 4', '\"La cuarta entrega de Just Dance nos pondrá a bailar todo tipo de ritmos, desde una suave balada hasta los exóticos pasos del dubstep y la danza estilo Bollywood. La mecánica es la misma de siempre: sigue los pasos del bailarín en pantalla como si fuera un espejo, entre mejor lo hagas, más puntos obtendrás.\"', 7, 5),
(25, 'Valorant', '\"Combina tu estilo y experiencia en un escenario global y competitivo. Tienes 13 rondas para atacar y defender tu lado con armas precisas y habilidades tácticas. Además, al contar con una sola vida por ronda, tendrás que pensar más rápido que tu oponente si quieres sobrevivir.\"', 8, 4),
(26, 'League of Legends: Wild Rift', '\"Es un videojuego multijugador de arena de batalla en línea (MOBA) que se juega en una perspectiva isométrica tridimensional. Los jugadores compiten en partidas que tienen una duración media de 15 a 20 minutos.\"', 9, 4),
(27, 'Teamfight Tactics', '\"Teamfight Tactics, es un modo de juego de League of Legends, basado en el estilo auto chess. TFT es un juego de estrategia por turnos en el que te enfrentarás a siete oponentes en una competición por crear un poderoso equipo que peleará por ti.\"', 5, 4),
(28, 'Watch Dogs', '\"La historia principal se centra en la ciudad de Chicago, en el año 2013 después del verdadero gran apagón Norteamericano en 2003, y nos lleva al entorno de un hombre llamado Aiden Pearce, quien ha hackeado el \"CtOS\" (Central Operating System) de Chicago, la cual es un sistema informático centralizado que controla casi todos los dispositivos tecnológicos de toda la ciudad, y contiene información detallada de los habitantes, la cual puede ser utilizada para distintos propósitos.\"', 8, 5),
(29, 'Legends of Runeterra', '\"Legends of Runeterra es un videojuego de estrategia y cartas a cargo de Riot Games protagonizado por los personajes más populares del universo de League of Legends.\"', 9, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '$2a$12$yQua/eCgpjAg4ElISB20gOkvGwrbGBYuJJaOuDPeqh4rnh9F2xuNS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indices de la tabla `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_juego`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `games`
--
ALTER TABLE `games`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `brands` (`id_brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
