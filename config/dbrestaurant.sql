-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 15-02-2024 a les 18:48:40
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
  `precio_total` float(65,2) NOT NULL,
  `propina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `pedidos`
--

INSERT INTO `pedidos` (`pedido_id`, `usuario_id`, `fecha_pedido`, `estado`, `precio_total`, `propina`) VALUES
(1, 1, '2024-01-26', 'En proceso', 37.00, 0),
(2, 1, '2024-01-26', 'En proceso', 55.00, 0),
(3, 1, '2024-02-01', 'En proceso', 17.00, 0),
(4, 1, '2024-02-01', 'En proceso', 3.00, 0),
(5, 1, '2024-02-01', 'En proceso', 5.00, 0),
(6, 1, '2024-02-01', 'En proceso', 7.50, 0),
(7, 999, '2024-02-02', 'En proceso', 9.54, 0),
(8, 999, '2024-02-05', 'En proceso', 5.26, 17),
(9, 1, '2024-02-06', 'En proceso', 9.27, 3),
(10, 1, '2024-02-08', 'En proceso', 0.00, 0),
(11, 1, '2024-02-09', 'En proceso', 4.63, 3),
(12, 1, '2024-02-09', 'En proceso', 4.63, 3),
(13, 1, '2024-02-09', 'En proceso', 4.89, 3),
(14, 1, '2024-02-09', 'En proceso', 4.63, 3),
(15, 1, '2024-02-09', 'En proceso', 39.66, 3),
(16, 1, '2024-02-09', 'En proceso', 13.90, 3),
(17, 1, '2024-02-13', 'En proceso', 2.70, 3),
(18, 1, '2024-02-13', 'En proceso', 37.12, 17),
(19, 1, '2024-02-13', 'En proceso', 24.43, 3),
(20, 1, '2024-02-15', 'En proceso', 6.79, 3),
(21, 1, '2024-02-15', 'En proceso', 2.27, 24),
(22, 1, '2024-02-15', 'En proceso', 10.68, 3),
(23, 1, '2024-02-15', 'En proceso', 17.40, 36),
(24, 1, '2024-02-15', 'En proceso', 12.30, 70),
(25, 1, '2024-02-15', 'En proceso', 28.80, 28),
(26, 1, '2024-02-15', 'En proceso', 5.30, 3),
(27, 1, '2024-02-15', 'En proceso', 28.77, 38),
(28, 1, '2024-02-15', 'En proceso', 9.51, 39),
(29, 1, '2024-02-15', 'En proceso', 33.00, 48),
(30, 1, '2024-02-15', 'En proceso', 29.90, 16),
(31, 1, '2024-02-15', 'En proceso', 54.95, 31),
(32, 1, '2024-02-15', 'En proceso', 3.03, 27),
(33, 1, '2024-02-15', 'En proceso', 20.00, 0),
(34, 1, '2024-02-15', 'En proceso', 3.89, 3),
(35, 1, '2024-02-15', 'En proceso', 10.42, 31),
(36, 1, '2024-02-15', 'En proceso', 15.57, 3),
(37, 1, '2024-02-15', 'En proceso', 4.63, 3),
(38, 1, '2024-02-15', 'En proceso', 20.66, 45),
(39, 2, '2024-02-15', 'En proceso', 24.46, 3),
(40, 2, '2024-02-15', 'En proceso', 5.67, 3);

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
(2, 20, 4.25, 2),
(3, 8, 4.25, 1),
(3, 6, 4.74, 1),
(3, 11, 4.5, 1),
(3, 10, 3.75, 1),
(4, 17, 3.45, 1),
(5, 15, 4.75, 1),
(6, 8, 4.25, 1),
(6, 23, 3.25, 1),
(7, 11, 4.5, 2),
(8, 11, 4.5, 1),
(9, 11, 4.5, 2),
(10, 11, 4.5, 1),
(11, 21, 4.5, 1),
(12, 21, 4.5, 1),
(13, 15, 4.75, 1),
(14, 11, 4.5, 1),
(15, 25, 5.5, 7),
(16, 11, 4.5, 3),
(17, 23, 3.25, 2),
(18, 21, 4.5, 8),
(19, 17, 3.45, 8),
(20, 22, 4.75, 2),
(21, 8, 4.25, 1),
(22, 15, 4.75, 3),
(23, 9, 5, 3),
(24, 11, 4.5, 2),
(25, 21, 4.5, 5),
(26, 18, 5, 2),
(27, 15, 4.75, 5),
(28, 15, 4.75, 1),
(28, 8, 4.25, 1),
(29, 16, 5, 5),
(30, 11, 4.5, 4),
(30, 22, 4.75, 2),
(31, 9, 5, 9),
(32, 15, 4.75, 1),
(33, 9, 5, 4),
(34, 15, 4.75, 1),
(35, 6, 4.74, 2),
(36, 11, 4.5, 2),
(36, 18, 5, 2),
(37, 11, 4.5, 1),
(38, 15, 4.75, 3),
(39, 15, 4.75, 5),
(40, 25, 5.5, 1);

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
(57, 1, 36, 'Joel', 'Cosp Crespo', 'Experiencia inolvidable ', 'Desde el momento en que entras por la puerta, el restaurante XYZ te transporta a un viaje culinario por el mundo. Cada plato es una obra maestra de sabores y presentación, elaborado con ingredientes frescos y de la más alta calidad. El ambiente es acogedor y elegante, perfecto para una cena romántica o una celebración especial. El personal es amable y conocedor, siempre dispuesto a recomendarte los mejores platos y maridajes. Sin duda, una experiencia gastronómica que no olvidarás fácilmente.', '2024-02-15', 3),
(58, 1, 37, 'Joel', 'Cosp Crespo', 'Buen dia y buena hora', 'Si buscas una experiencia culinaria auténtica, no busques más allá del restaurante ABC. Este encantador rincón ofrece una variedad de platos tradicionales preparados con un toque casero que te hará sentir como en casa. Desde sus deliciosas tapas hasta sus exquisitos platos principales, cada bocado está lleno de sabor y amor por la cocina. El ambiente es relajado y acogedor, perfecto para disfrutar de una comida con amigos o familiares. ¡No te pierdas la oportunidad de probar sus especialidades!', '2024-02-15', 5),
(59, 1, 38, 'Joel', 'Cosp Crespo', 'Hola', 'El restaurante DEF es el lugar perfecto para los amantes de la cocina creativa y los sabores sorprendentes. Cada plato es una obra maestra de innovación culinaria, combinando ingredientes inesperados de una manera que deleitará tus sentidos. El chef y su equipo están constantemente experimentando y creando nuevas y emocionantes propuestas gastronómicas que te dejarán con ganas de más. Además, el servicio es impecable y el ambiente moderno y sofisticado. ¡Una experiencia gastronómica verdaderamente única que no puedes perderte!', '2024-02-15', 2),
(60, 2, 39, 'Marc', 'Martinez Sotillo', 'Productos asequibles e immejorables!', 'El restaurante GHI es un verdadero tesoro culinario que cautiva a los comensales con su ecléctica fusión de sabores y su atmósfera vibrante. Desde la primera mirada al menú, te sumerges en un viaje gastronómico que celebra la diversidad de la cocina internacional. Cada plato es una obra maestra de la creatividad, cuidadosamente elaborada para deleitar tanto a los paladares más exigentes como a los más aventureros. Con un servicio impecable y un ambiente animado, este lugar se convierte en el destino perfecto para una velada inolvidable.', '2024-02-15', 1),
(61, 2, 40, 'Marc', 'Martinez Sotillo', 'Una Experiencia Gourmet en un Entorno Único', 'El restaurante MNO redefine el concepto de la alta cocina en un entorno impresionante que combina elegancia y sofisticación. Cada detalle, desde la presentación impecable hasta la selección cuidadosa de ingredientes de temporada, refleja un compromiso inquebrantable con la excelencia gastronómica. Con un menú que destaca los sabores locales con un toque contemporáneo, este lugar es una verdadera joya para los conocedores de la buena comida. Sumérgete en un mundo de delicias culinarias y déjate llevar por una experiencia gourmet inigualable.', '2024-02-15', 4);

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
  `rol` varchar(255) NOT NULL,
  `puntos` int(255) NOT NULL DEFAULT 500
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombre`, `apellidos`, `contraseña`, `email`, `rol`, `puntos`) VALUES
(1, 'Joel', 'Cosp Crespo', 'hasbullah22', 'darkgalox39@gmail.com', 'Cliente', 7320),
(2, 'Marc', 'Martinez Sotillo', 'markilocuras', 'marcmartinez@gmail.com', 'Cliente', 3513),
(3, 'Paco', 'Galaxia', 'pacogalaxia', 'pacogalaxia@gmail.com', 'Cliente', 500),
(4, 'Ernesto', 'Sanchez Santino', 'ernesto', 'ernesto@gmail.com', 'Cliente', 500),
(999, 'Admin', 'Istrador', 'admin1234', 'admin1234@gmail.com', 'Administrador', 500),
(1000, 'Jose Luís', 'Rodriguez Zapatero', 'presidente', 'zapatero@gmail.com', 'Cliente', 500);

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
  MODIFY `pedido_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT per la taula `productos`
--
ALTER TABLE `productos`
  MODIFY `producto_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT per la taula `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
