-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 19-12-2023 a les 16:22:38
-- Versió del servidor: 10.4.32-MariaDB
-- Versió de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `dbrestaurant`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(255) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `nombre_categoria`) VALUES
(1, 'Bocadillos'),
(2, 'Tapas'),
(3, 'Hamburguesas');

-- --------------------------------------------------------

--
-- Estructura de la taula `pedido-productos`
--

CREATE TABLE `pedido-productos` (
  `pedido_id` int(255) NOT NULL,
  `producto_id` int(255) NOT NULL,
  `precio_unidad` double NOT NULL,
  `cantidad` int(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `pedido-productos`
--

INSERT INTO `pedido-productos` (`pedido_id`, `producto_id`, `precio_unidad`, `cantidad`, `estado`) VALUES
(0, 10, 3.75, 6, ''),
(0, 5, 4.5, 2, ''),
(0, 9, 5, 2, ''),
(0, 6, 4, 4, ''),
(0, 10, 3.75, 6, ''),
(0, 5, 4.5, 3, ''),
(0, 9, 5, 3, ''),
(0, 6, 4, 5, ''),
(0, 8, 4.25, 1, ''),
(6, 10, 3.75, 7, ''),
(6, 5, 4.5, 3, ''),
(6, 9, 5, 3, ''),
(6, 6, 4, 5, ''),
(6, 8, 4.25, 1, ''),
(7, 5, 4.5, 1, ''),
(7, 10, 3.75, 3, ''),
(7, 6, 4, 1, ''),
(8, 5, 4.5, 2, ''),
(8, 10, 3.75, 1, ''),
(8, 8, 4.25, 5, ''),
(9, 5, 4.5, 2, ''),
(9, 10, 3.75, 1, ''),
(9, 8, 4.25, 6, ''),
(9, 6, 4, 1, ''),
(9, 7, 3.5, 6, ''),
(10, 5, 4.5, 2, ''),
(10, 10, 3.75, 1, ''),
(10, 8, 4.25, 6, ''),
(10, 6, 4, 1, ''),
(10, 7, 3.5, 6, ''),
(11, 5, 4.5, 2, ''),
(11, 10, 3.75, 1, ''),
(11, 8, 4.25, 6, ''),
(11, 6, 4, 1, ''),
(11, 7, 3.5, 6, ''),
(12, 5, 4.5, 2, ''),
(12, 10, 3.75, 1, ''),
(12, 8, 4.25, 6, ''),
(12, 6, 4, 1, ''),
(12, 7, 3.5, 6, ''),
(13, 5, 4.5, 2, ''),
(13, 10, 3.75, 1, ''),
(13, 8, 4.25, 6, ''),
(13, 6, 4, 1, ''),
(13, 7, 3.5, 6, ''),
(14, 5, 4.5, 2, ''),
(14, 10, 3.75, 1, ''),
(14, 8, 4.25, 6, ''),
(14, 6, 4, 1, ''),
(14, 7, 3.5, 6, ''),
(15, 5, 4.5, 2, ''),
(15, 10, 3.75, 1, ''),
(15, 8, 4.25, 6, ''),
(15, 6, 4, 1, ''),
(15, 7, 3.5, 6, ''),
(16, 5, 4.5, 2, ''),
(16, 10, 3.75, 1, ''),
(16, 8, 4.25, 6, ''),
(16, 6, 4, 1, ''),
(16, 7, 3.5, 6, ''),
(17, 8, 4.25, 10, ''),
(17, 6, 4, 1, ''),
(17, 7, 3.5, 6, ''),
(18, 8, 4.25, 10, ''),
(18, 6, 4, 1, ''),
(18, 7, 3.5, 6, ''),
(19, 8, 4.25, 10, ''),
(19, 6, 4, 1, ''),
(19, 7, 3.5, 6, ''),
(20, 8, 4.25, 10, ''),
(20, 6, 4, 1, ''),
(20, 7, 3.5, 6, ''),
(21, 8, 4.25, 10, ''),
(21, 6, 4, 1, ''),
(21, 7, 3.5, 6, ''),
(22, 8, 4.25, 10, ''),
(22, 6, 4, 1, ''),
(22, 7, 3.5, 6, ''),
(23, 8, 4.25, 13, ''),
(23, 6, 4, 1, ''),
(23, 7, 3.5, 6, ''),
(24, 8, 4.25, 13, ''),
(24, 6, 4, 1, ''),
(24, 7, 3.5, 6, ''),
(25, 8, 4.25, 13, ''),
(25, 6, 4, 1, ''),
(25, 7, 3.5, 6, ''),
(26, 8, 4.25, 13, ''),
(26, 6, 4, 1, ''),
(26, 7, 3.5, 6, ''),
(27, 8, 4.25, 13, ''),
(27, 6, 4, 1, ''),
(27, 7, 3.5, 6, ''),
(28, 8, 4.25, 13, ''),
(28, 6, 4, 1, ''),
(28, 7, 3.5, 6, ''),
(29, 8, 4.25, 13, ''),
(29, 6, 4, 1, ''),
(29, 7, 3.5, 6, ''),
(30, 5, 4.5, 2, ''),
(30, 9, 5, 1, ''),
(31, 5, 4.5, 2, ''),
(31, 9, 5, 1, ''),
(32, 5, 4.5, 3, ''),
(32, 9, 5, 3, ''),
(32, 7, 3.5, 1, ''),
(32, 8, 4.25, 4, ''),
(33, 5, 4.5, 10, ''),
(33, 6, 4, 3, ''),
(33, 8, 4.25, 3, ''),
(34, 5, 4.5, 10, ''),
(34, 6, 4, 3, ''),
(34, 8, 4.25, 3, ''),
(35, 5, 4.5, 2, ''),
(35, 10, 3.75, 2, ''),
(35, 7, 3.5, 1, ''),
(35, 8, 4.25, 4, ''),
(36, 5, 4.5, 3, ''),
(36, 10, 3.75, 1, ''),
(36, 7, 3.5, 1, ''),
(36, 8, 4.25, 4, ''),
(37, 8, 4.25, 3, ''),
(37, 14, 7, 7, ''),
(37, 9, 5, 1, ''),
(37, 6, 4.75, 2, ''),
(37, 7, 3.45, 1, ''),
(38, 8, 4.25, 3, ''),
(38, 11, 4.5, 1, ''),
(38, 6, 4.74, 11, ''),
(39, 8, 4.25, 3, ''),
(39, 11, 4.5, 6, ''),
(39, 6, 4.74, 11, '');

-- --------------------------------------------------------

--
-- Estructura de la taula `pedidos`
--

CREATE TABLE `pedidos` (
  `pedido_id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `pedidos`
--

INSERT INTO `pedidos` (`pedido_id`, `usuario_id`, `fecha_pedido`, `estado`) VALUES
(1, 0, '2023-12-13', 'En proceso'),
(2, 0, '2023-12-13', 'En proceso'),
(3, 0, '2023-12-13', 'En proceso'),
(4, 0, '2023-12-13', 'En proceso'),
(5, 0, '2023-12-13', 'En proceso'),
(6, 0, '2023-12-13', 'En proceso'),
(7, 0, '2023-12-13', 'En proceso'),
(8, 0, '2023-12-13', 'En proceso'),
(9, 0, '2023-12-13', 'En proceso'),
(10, 0, '2023-12-13', 'En proceso'),
(11, 0, '2023-12-13', 'En proceso'),
(12, 0, '2023-12-13', 'En proceso'),
(13, 0, '2023-12-13', 'En proceso'),
(14, 0, '2023-12-13', 'En proceso'),
(15, 0, '2023-12-13', 'En proceso'),
(16, 0, '2023-12-13', 'En proceso'),
(17, 0, '2023-12-13', 'En proceso'),
(18, 0, '2023-12-13', 'En proceso'),
(19, 0, '2023-12-13', 'En proceso'),
(20, 0, '2023-12-13', 'En proceso'),
(21, 0, '2023-12-13', 'En proceso'),
(22, 0, '2023-12-13', 'En proceso'),
(23, 0, '2023-12-13', 'En proceso'),
(24, 0, '2023-12-13', 'En proceso'),
(25, 0, '2023-12-13', 'En proceso'),
(26, 0, '2023-12-13', 'En proceso'),
(27, 0, '2023-12-13', 'En proceso'),
(28, 0, '2023-12-13', 'En proceso'),
(29, 0, '2023-12-13', 'En proceso'),
(30, 1, '2023-12-13', 'En proceso'),
(31, 1, '2023-12-13', 'En proceso'),
(32, 1, '2023-12-13', 'En proceso'),
(33, 1, '2023-12-13', 'En proceso'),
(34, 1, '2023-12-13', 'En proceso'),
(35, 2, '2023-12-13', 'En proceso'),
(36, 2, '2023-12-14', 'En proceso'),
(37, 1, '2023-12-18', 'En proceso'),
(38, 1, '2023-12-19', 'En proceso'),
(39, 1, '2023-12-19', 'En proceso');

-- --------------------------------------------------------

--
-- Estructura de la taula `productos`
--

CREATE TABLE `productos` (
  `producto_id` int(255) NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `precio_unidad` double NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `productos`
--

INSERT INTO `productos` (`producto_id`, `nombre_producto`, `precio_unidad`, `categoria_id`, `img`) VALUES
(6, 'Patatas Bravas', 4.74, 2, 'imagenes/productos/tapas/bravas.jpg'),
(7, 'Hamburguesa de pollo', 3.45, 3, 'imagenes/productos/hamburguesas/pollo.jpg'),
(8, 'Bocadillo de jamón y queso', 4.25, 1, 'imagenes/productos/bocadillos/jamonqueso.jpg'),
(9, 'Pulpo a la gallega', 5, 2, 'imagenes/productos/tapas/pulpo.jpg'),
(10, 'Hamburguesa vegetariana', 3.75, 3, 'imagenes/productos/hamburguesas/vegetariana.jpg'),
(11, 'Bocadillo vegetal', 4.5, 1, 'imagenes/productos/bocadillos/vegetal.jpg'),
(15, 'Bocadillo de chorizo', 4.75, 1, 'imagenes/productos/bocadillos/chorizo.jpg'),
(16, 'Croquetas', 5, 2, 'imagenes/productos/tapas/croquetas.jpeg'),
(17, 'Hamburguesa de ternera', 3.45, 3, 'imagenes/productos/hamburguesas/ternera.webp'),
(18, 'Bocadillo de carne picada', 5, 1, 'imagenes/productos/bocadillos/carnepicada.jpeg'),
(19, 'Pinchos de tortilla', 3, 2, 'imagenes/productos/tapas/tortilla.jpg'),
(20, 'Hamburguesa parrillera', 4.25, 3, 'imagenes/productos/hamburguesas/parrillera.webp'),
(21, 'Bocadillo de lomo ', 4.5, 1, 'imagenes/productos/bocadillos/lomo.jpg'),
(22, 'Bocadillo de tortilla', 4.75, 1, 'imagenes/productos/bocadillos/bocadillotortilla.jpg'),
(23, 'Pinchos de olivas', 3.25, 2, 'imagenes/productos/tapas/oliva.jpg'),
(24, 'Pinchos morrunos', 3.75, 2, 'imagenes/productos/tapas/pinchos.jpg'),
(25, 'Hamburguesa triple cheddar', 5.5, 3, 'imagenes/productos/hamburguesas/triplecheddar.jpg'),
(26, 'Hamburguesa de bacon', 4.75, 3, 'imagenes/productos/hamburguesas/bacon.png');

-- --------------------------------------------------------

--
-- Estructura de la taula `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombre`, `apellidos`, `contraseña`, `email`, `rol`) VALUES
(1, 'Joel', 'Cosp Crespo', 'hasbullah22', 'darkgalox39@gmail.com', 'Cliente'),
(2, 'Marc', 'Martinez Sotillo', 'markilocuras', 'marcmartinez@gmail.com', 'Cliente'),
(3, 'Paco', 'Galaxia', 'pacogalaxia', 'pacogalaxia@gmail.com', 'Cliente'),
(4, 'Ernesto', 'Sanchez Santino', 'ernesto', 'ernesto@gmail.com', 'Cliente'),
(999, 'Admin', 'Istrador', 'admin1234', 'admin1234@gmail.com', 'Administrador');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índexs per a la taula `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`pedido_id`);

--
-- Índexs per a la taula `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Índexs per a la taula `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la taula `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `pedido_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT per la taula `productos`
--
ALTER TABLE `productos`
  MODIFY `producto_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT per la taula `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`categoria_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
