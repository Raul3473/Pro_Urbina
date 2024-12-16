-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-12-2024 a las 17:04:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Tienda_Linea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categoria`
--

CREATE TABLE `Categoria` (
  `Id_Categoria` int(11) NOT NULL,
  `Nombre_Categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE `Clientes` (
  `id_Clientes` int(11) NOT NULL,
  `Nombre_Clientes` varchar(200) NOT NULL,
  `Correo_Clientes` varchar(50) NOT NULL,
  `Password_Cliente` varchar(20) NOT NULL,
  `Telefono_Cliente` int(10) NOT NULL,
  `Direccion_Cliente` varchar(50) NOT NULL,
  `Inicio_Seccion` datetime NOT NULL,
  `id_Roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `Clientes` (`id_Clientes`, `Nombre_Clientes`, `Correo_Clientes`, `Password_Cliente`, `Telefono_Cliente`, `Direccion_Cliente`, `Inicio_Seccion`, `id_Roles`) VALUES
(2, 'Pedro ', 'wongaguilar49@gmail.com', 'juokjh', 79666856, 'calle del astro 8860', '2024-12-09 15:50:05', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `id_Producto` int(11) NOT NULL,
  `Nombre_Producto` varchar(200) NOT NULL,
  `Descripcion_Producto` text NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Descuento` tinyint(3) NOT NULL DEFAULT 0,
  `id_Categoria` int(11) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`id_Producto`, `Nombre_Producto`, `Descripcion_Producto`, `Precio`, `Descuento`, `id_Categoria`, `activo`) VALUES
(1, 'Spider man 2', '<p>Pelea contra una variedad de villanos emblemáticos y otros nuevos, como la versión novedosa del monstruoso Venom, el despiadado Kraven el Cazador, el inestable Lagarto y ¡muchos más!</p>', 1200.00, 0, 1, 1),
(2, 'Spider man', 'Pelea contra una variedad de villanos emblemáticos y otros nuevos, como la versión novedosa del monstruoso Venom, el despiadado Kraven el Cazador, el inestable Lagarto y ¡muchos más!', 700.00, 0, 1, 1),
(3, 'Gta 6', 'Grand Theft Auto VI pone rumbo al estado de Leonida, hogar de las calles rebosantes de neones de Vice City y sus alrededores, en la evolución más grande e inmersiva de la serie Grand Theft Auto hasta la fecha. Disponible en 2025 para PlayStation®5 y Xbox Series X|S.', 2000.00, 0, 3, 1),
(4, 'Fc 2025', 'EA SPORTS FC 25 es un videojuego de fútbol que ofrecerá nuevas características como un modo Rush 5 vs. 5 y permitirá a los jugadores alterar las tácticas con nuevos roles. El lanzamiento está programado para el 25 de noviembre y finalizará el 9 de diciembre.', 800.00, 20, 2, 1),
(5, 'Black Ops 6', 'Call of Duty: Black Ops 6 está disponible para consolas PS4, PS5, Xbox Series X|S, y ofrece optimización para HDR y 120 FPS. También tiene contenido adicional como la Temporada 1, que incluye nuevos mapas y armas, así como un nuevo mapa de Zombis. Recuerda verificar la información antes de realizar cualquier compra.', 1700.00, 0, 4, 1),
(6, 'NFl 25', 'Madden NFL 25 es un videojuego de fútbol americano que ofrece modo online, pero requiere contar con PS Plus para jugar en línea. Además, los jugadores pueden mejorar su equipo en Ultimate Team™ comprando el MVP Bundle o la Deluxe Edition, que incluyen puntos para esa modalidad de juego.', 900.00, 30, 2, 1),
(7, 'PlayStation Plus Extra', 'PlayStation Plus es un servicio de suscripción que ofrece acceso a una variedad de juegos, juegos en línea, descuentos exclusivos y contenido adicional. Los miembros de PlayStation Plus Extra y Deluxe tienen acceso a un extenso catálogo de cientos de juegos. También se pueden encontrar promociones y descuentos en la tienda para suscribirse.', 1500.00, 0, 5, 1),
(8, 'Mario Futbol', 'Mario Strikers es un videojuego que combina el fútbol con personajes icónicos del universo de Nintendo, donde los jugadores pueden realizar entradas, pases y marcar goles. Además, permite a los jugadores unirse a clubes en línea y competir con otros para obtener puntos, creando una experiencia de juego dinámica y emocionante.\r\n\r\n', 1200.00, 0, 2, 1),
(9, 'Sony', 'Sonic the Hedgehog es un icónico personaje de videojuegos que ha protagonizado numerosas aventuras. En su última entrega, el juego presenta mundos en los que chocan realidades, explorando los misterios de una antigua civilización y enfrentándose a hordas de enemigos.', 399.00, 10, 3, 1),
(10, 'Fornite', 'Fortnite es un videojuego gratuito en el que puedes crear, jugar y combatir con amigos. Ofrece diferentes modos de juego, como Batalla campal y Cero construcción, donde los jugadores compiten para ser el último en pie. También hay eventos en vivo y conciertos, así como miles de islas creadas por usuarios que incluyen diversas actividades como carreras y supervivencia zombi.', 100.00, 10, 3, 1),
(11, 'Cuphead ', 'Cuphead es un juego de acción clásico en el estilo \"dispara y corre\", que se corresponde principalmente con enfrentamientos contra jefes. Su diseño artístico está inspirado en caricaturas de los años 30, ofreciendo una estética única que combina retro y moderno.', 350.00, 15, 3, 1),
(12, 'Halo', 'Halo es una popular franquicia de videojuegos de ciencia ficción originalmente creada por Bungie Studios y actualmente manejada por 343 Industries. ', 1300.00, 20, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Roles`
--

CREATE TABLE `Roles` (
  `id_Roles` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Roles`
--

INSERT INTO `Roles` (`id_Roles`, `Nombre`) VALUES
(1, 'Admistrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`Id_Categoria`);

--
-- Indices de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`id_Clientes`),
  ADD UNIQUE KEY `Telefono_Cliente` (`Telefono_Cliente`),
  ADD UNIQUE KEY `Correo_Clientes` (`Correo_Clientes`);

--
-- Indices de la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`id_Producto`);

--
-- Indices de la tabla `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`id_Roles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  MODIFY `id_Clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Producto`
--
ALTER TABLE `Producto`
  MODIFY `id_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `Roles`
--
ALTER TABLE `Roles`
  MODIFY `id_Roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
