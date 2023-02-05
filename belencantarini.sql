-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2023 a las 01:04:41
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `belencantarini`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombre`, `email`, `mensaje`) VALUES
(1, 'Belen', 'belencantarini@gmail.com', 'Hola! Quiero saber mas!'),
(4, 'Damian', 'damian.gdl@hotmail.com', 'Hola Dami'),
(5, 'belen', 'cantarini@gmail.com', 'hola'),
(6, 'belen', 'cantarini@gmail.com', 'hola'),
(7, 'Belen', 'belencantarini@gmail.com', 'Probando include conexion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id` int(11) NOT NULL,
  `tratamiento` varchar(50) NOT NULL,
  `tarifa` int(11) NOT NULL,
  `imagen` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id`, `tratamiento`, `tarifa`, `imagen`, `descripcion`) VALUES
(9, 'Hilos tensores', 15000, 'https://http2.mlstatic.com/D_NQ_NP_777336-MLA52754808975_122022-O.webp', 'Resistente al agua, con fuerte elasticidad, tu cara no estará apretada. Levanta y reafirma inmediatamente la piel para crear una cara en forma de V.\r\nLevantamiento: el sistema de elevación de cara y cuello mejora la piel suelta y elimina las arrugas en la cara, la barbilla del cuello y el área de los ojos.\r\nDebe encoger los músculos faciales flacidos y dar forma a su cara. Ayuda a dar forma a una cara delgada y firme y a crear una cara hermosa.\r\nEs ideal para ocasiones especiales, bodas, reuniones, modelado, fotografía, viajes, etc.'),
(11, 'Dermapen', 25000, 'https://scontent.faep24-2.fna.fbcdn.net/v/t1.6435-9/135546483_3880098002034919_756840728908491338_n.png?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_ohc=4UbMsPlP1oUAX-XI790&_nc_ht=scontent.faep24-2.fna&oh=00_AfAWL_EN66wCYoQsJ71qiWHb7yPTs7WFK9eO9Am4m-Qa1g&oe=6405CD70', 'Dermapen es un dispositivo que consta de 11 microagujas que efectúan micropunciones sobre la piel produciendo la estimulación de los fibroblastos, encargados de la producción de colágeno y elastina, que sirve para reafirmar y rejuvenecer la piel.\r\nTambien es util para borrar arrugas de expresion. Muy bueno.'),
(12, 'Plasma rico en plaquetas', 20000, 'https://am1300.com.ar/wp-content/uploads/2019/09/plasmaricoenplaquetas.jpg', 'El PRP se define como una fracción de plasma obtenido de sangre autóloga que tiene una concentración de plaquetas superior a la del plasma en condiciones basales. El PRP contiene no solo un alto nivel de plaquetas, sino también de los factores de crecimiento que son secretados activamente por las plaquetas.'),
(14, 'Depilacion laser', 30000, 'https://cdn.pixabay.com/photo/2013/11/28/11/29/heart-220183_960_720.jpg', 'Depilacion definitiva laser'),
(15, 'Botox', 45000, 'https://cdn.pixabay.com/photo/2022/09/16/13/07/generated-7458584__340.jpg', 'Sirve para borrar arrugas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
