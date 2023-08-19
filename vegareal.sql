-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2023 a las 06:18:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vegareal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `descripcion`, `inicio`, `fin`, `colortexto`, `colorfondo`) VALUES
(11, 'no se ', 'KDMADAPDADLADA', '2023-08-10 12:00:00', '0000-00-00 00:00:00', '#800080', '#004080'),
(12, 'mas eventos', 'jdodjajfdaodadafjsnvdnvd', '2023-08-10 00:10:00', '2023-08-10 01:00:00', '#00ff40', '#400040'),
(13, 'Dia de no sorteros ', 'Este día tienes que tratar de enamorar una compañera jjj.\nObviamente debe de ser súper linda.\n-Si logra esto ganaras 5mil pesos  \nubicación: ITLA ', '2023-08-14 06:00:00', '2023-08-11 09:05:00', '#80ff00', '#80ffff');


--
-- Tabla `noticia`
--


CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT, -- Agregar AUTO_INCREMENT aquí
  `titulo` varchar(60) NULL,
  `Contenido` longtext NULL,
  `fecha_publicacion` date NULL,
  `url_imagen` varchar(100) NULL,
  PRIMARY KEY (`id`) -- Definir la clave primaria en el campo id
);

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`titulo`, `Contenido`, `fecha_publicacion`, `url_imagen`) VALUES
('Cooperativas de El Salvador visitan Vega Real', 'LA VEGA.- Como parte del programa de la “Pasantía de aprendizaje para las mejores prácticas del cooperativismo de los hermanos cooperativistas de la República Dominicana”, una delegación de cooperativas de El Salvador, afiliadas a la Federación de Asociaciones Cooperativas de Ahorro, Crédito y Servicios Múltiples Afines del Salvador de Responsabilidad Limitada (FEDECRECE), estuvo visitando las instalaciones de la Casa Club de Vega Real.

Los visitantes de las cooperativas salvadoreñas COPADEO, COOPAS y ACROCRECI, fueron recibidos por la Gerente General, Maria Eugenia Acosta, con quien intercambiaron experiencias del accionar cooperativo en ambos países.

Al concluir el encuentro, fue entregada una placa de agradecimiento a Vega Real por el aporte de conocimiento brindado.', '2023-06-01', ''),
('Vega Real dona zafacones ecológicos en Tenares y Barranca', 'Como parte de su Responsabilidad Social y con la intención de seguir fomentando la educación en el uso adecuado de los desechos sólidos, Vega Real realizó la donacion de Zafacones Ecologicos en Tenares y Barranca.

Estas entregas fueron encabezadas por el presidente ejecutivo de esta entidad, Lic. Yanio Concepción, quien motivó a los estudiantes a realizar acciones para la conservación del medioambiente, además de orientarles sobre el manejo de los desechos que se recolectan en sus centros y su clasificación.

Los centros educativos beneficiados fueron la escuela Juan Bautista, de Porquero, Tenares; y el Liceo Padre Fantino, de Barranca.', '2021-07-18', 'https://www.cvr.com.do/wp-content/uploads/2023/07/Zafacones-ecologicos-Barranca.webp'),
('Presidente Ejecutivo ofrece charla en New York sobre Lavado de Activos', 'NEW YORK.- El presidente ejectivo de Vega Real, Licenciado Yanio Concepción, impartió la charla «Cómo evitar el riesgo financiero y el Lavado de Activos», a los líderes cooperativistas de New York.

Esta actividad fue desarrollada en la oficina de representación de Vega Real, contando con la asistencia de decenas de asociados de esa gran Urbe, quienes se mostraron agradecidos por la relevancia de este tema.', '2023-06-20', 'https://www.cvr.com.do/wp-content/uploads/2023/07/Screenshot_20230610_113959.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventospredefinidos`
--

CREATE TABLE `eventospredefinidos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `horainicio` time DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventospredefinidos`
--

INSERT INTO `eventospredefinidos` (`id`, `titulo`, `horainicio`, `horafin`, `colortexto`, `colorfondo`) VALUES
(1, 'trabajar', '01:00:00', '02:00:00', '#ffffff', '#3788d8'),
(2, 'Dia  del no sortero ', '08:05:00', '05:05:00', '#800080', '#ff0000'),
(3, 'mas eventos', '00:10:00', '01:00:00', '#00ff40', '#400040');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`Id`, `nombre`, `usuario`, `contrasena`) VALUES
(1, '[Juan Pérez]', '[juanperez123]', '[P@ssw0rd!]'),
(2, 'Juan ', 'juanperez', 'yoyo'),
(3, 'Ana Gómez', 'anagomez456', 'Secure#123'),
(4, 'Luis Torres', 'luistorres789', 'Pass123!'),
(5, 'María López', 'marialopez12', 'Password!'),
(6, 'Pedro Ramírez', 'pedroram456', '12345'),
(7, 'Laura Rodríguez', 'laurarod78', 'P@ssword!'),
(8, 'Carlos Sánchez', 'carlossan12', 'SecurePass!'),
(9, 'Sofía Martínez', 'sofiamtz34', 'Password12!'),
(10, 'Jorge Hernández', 'jorgehdez9', 'P@ssw0rd12!'),
(11, 'Andrea Vargas', 'andreavargas', 'ba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventospredefinidos`
--
ALTER TABLE `eventospredefinidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `eventospredefinidos`
--
ALTER TABLE `eventospredefinidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
