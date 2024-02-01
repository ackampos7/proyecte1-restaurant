-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 01-02-2024 a les 16:19:45
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
(1, 'Bocadillo'),
(2, 'Tapa'),
(3, 'Hamburguesa');

-- --------------------------------------------------------

--
-- Estructura de la taula `pedidos`
--

CREATE TABLE `pedidos` (
  `pedido_id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `estado` varchar(255) NOT NULL,
  `precio_total` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `pedidos`
--

INSERT INTO `pedidos` (`pedido_id`, `usuario_id`, `fecha_pedido`, `estado`, `precio_total`) VALUES
(1, 1, '2024-01-26', 'En proceso', 37),
(2, 1, '2024-01-26', 'En proceso', 55);

-- --------------------------------------------------------

--
-- Estructura de la taula `pedido_productos`
--

CREATE TABLE `pedido_productos` (
  `pedido_id` int(255) NOT NULL,
  `producto_id` int(255) NOT NULL,
  `precio_unidad` double NOT NULL,
  `cantidad` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `pedido_productos`
--

INSERT INTO `pedido_productos` (`pedido_id`, `producto_id`, `precio_unidad`, `cantidad`) VALUES
(1, 15, 4.75, 1),
(1, 10, 3.75, 4),
(1, 26, 4.75, 1),
(1, 20, 4.25, 3),
(2, 11, 4.5, 5),
(2, 18, 5, 4),
(2, 10, 3.75, 1),
(2, 20, 4.25, 2);

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
-- Estructura de la taula `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `pedido_id` int(255) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `apellidos_usuario` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `cuerpo` text NOT NULL,
  `fecha` date NOT NULL,
  `puntuacion` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `reviews`
--

INSERT INTO `reviews` (`review_id`, `usuario_id`, `pedido_id`, `nombre_usuario`, `apellidos_usuario`, `titulo`, `cuerpo`, `fecha`, `puntuacion`) VALUES
(4, 1, 32, 'Joel', 'Cosp Crespo', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2024-01-19', 2),
(24, 999, 33, 'Antonio', 'Canovas del Castillo', 'Primero de todo, buenas tardes', 'Hola dios estoy aqui, gracias te doy por darme la vida hazla nueva todos los dias buenas tardes mi señor', '2024-03-23', 3),
(25, 111, 32, 'Joel', 'Cosp Crespo', 'La excelencia no se busca, te encuentra', 'Pocos paladares han tenido la fortuna de deleitar tales manjares.', '2024-01-22', 5),
(26, 111, 32, 'Joel', 'Cosp Crespo', 'Buenos dias y buenas tardes', 'Que grande este tio, no?', '2024-01-22', 2),
(28, 1, 32, 'Joel', 'Cosp Crespo', 'La excelencia en su maximo esplendor', 'Simplemente excelente', '2024-01-24', 1);

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
(999, 'Admin', 'Istrador', 'admin1234', 'admin1234@gmail.com', 'Administrador'),
(1000, 'Jose Luís', 'Rodriguez Zapatero', 'presidente', 'zapatero@gmail.com', 'Cliente');

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
-- Índexs per a la taula `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

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
  MODIFY `pedido_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la taula `productos`
--
ALTER TABLE `productos`
  MODIFY `producto_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT per la taula `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT per la taula `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

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
