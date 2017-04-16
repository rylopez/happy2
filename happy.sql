-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2017 a las 18:45:02
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `happy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_creacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_pedido`, `id_producto`, `cantidad`, `fecha_creacion`) VALUES
(9, 2, 1, '2017-04-14'),
(9, 4, 1, '2017-04-13'),
(10, 2, 1, '2017-04-14'),
(11, 4, 1, '2017-04-14'),
(13, 2, 1, '2017-04-14'),
(13, 6, 1, '2017-04-14'),
(14, 3, 900, '2017-04-14'),
(15, 1, 99, '2017-04-14'),
(16, 7, 333, '2017-04-14'),
(17, 2, 2, '2017-04-14'),
(18, 1, 1, '2017-04-14'),
(19, 7, 1, '2017-04-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagenes` int(11) NOT NULL,
  `img_index_1` varchar(200) NOT NULL,
  `frase_index_1` varchar(400) NOT NULL,
  `autor_index_1` varchar(200) NOT NULL,
  `img_index_2` varchar(200) NOT NULL,
  `frase_index_2` varchar(400) NOT NULL,
  `autor_index_2` varchar(200) NOT NULL,
  `img_productos` varchar(200) NOT NULL,
  `frase_productos` varchar(400) NOT NULL,
  `autor_productos` varchar(200) NOT NULL,
  `img_compras` varchar(200) NOT NULL,
  `frase_compras` varchar(400) NOT NULL,
  `autor_compras` varchar(200) NOT NULL,
  `img_publicaciones` varchar(200) NOT NULL,
  `frase_publicaciones` varchar(400) NOT NULL,
  `autor_publicaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagenes`, `img_index_1`, `frase_index_1`, `autor_index_1`, `img_index_2`, `frase_index_2`, `autor_index_2`, `img_productos`, `frase_productos`, `autor_productos`, `img_compras`, `frase_compras`, `autor_compras`, `img_publicaciones`, `frase_publicaciones`, `autor_publicaciones`) VALUES
(1, '../view/recursos/imagenes/img_index_1.jpeg', ' Quiero que quemes mi piel, con el calor de tú piel ', 'Algun Enamorado', '../view/recursos/imagenes/img_index_2.jpeg', 'Quiero que quemes mi piel, con el calor de tú piel', 'Algun Enamorado', '../view/recursos/imagenes/img_productos.jpeg', 'Quiero dejar huellas en tú piel, para que me vuelvas a buscar', 'Havy de Leo', '../view/recursos/imagenes/img_compras.jpeg', 'Guarda silencio cuando no tengas nada que decir, cuando la pasión genuina te mueva, di lo que tengas que decir, y dilo caliente', 'D.H. Lawrence', '../view/recursos/imagenes/img_publicaciones.jpeg', 'Te invito a comer, El amor me  queda riquisimo', 'Anonimo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fecha_pedido` varchar(40) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `total` decimal(11,2) DEFAULT NULL,
  `forma_pago` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `fecha_pedido`, `id_usuario`, `estado`, `total`, `forma_pago`) VALUES
(9, '2017-04-12', 1, '4', '20480.00', 'contra entrega'),
(10, '2017-04-14', 4, '3', '16240.00', 'contra entrega'),
(11, '2017-04-14', 4, '3', '7040.00', 'contra entrega'),
(13, '2017-04-14', 4, '2', '16357.66', 'contra entrega'),
(14, '2017-04-14', 4, '2', '458640.00', 'contra entrega'),
(15, '2017-04-14', 4, '2', '42867.00', 'contra entrega'),
(16, '2017-04-14', 4, '2', '1451880.00', 'contra entrega'),
(17, '2017-04-14', 4, '2', '26880.00', 'contra entrega'),
(18, '2017-04-14', 4, '2', '433.00', 'contra entrega'),
(19, '2017-04-14', 4, '2', '4360.00', 'contra entrega'),
(20, '2017-04-16', 1, '1', NULL, 'contra entrega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `referencia` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `valor_compra` int(11) NOT NULL,
  `valor_venta` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `iva` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `url_foto1` varchar(200) NOT NULL,
  `url_foto2` varchar(200) NOT NULL,
  `url_foto3` varchar(200) NOT NULL,
  `id_tipoproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `talla` varchar(5) DEFAULT NULL,
  `autor` varchar(60) NOT NULL,
  `fecha_creacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `referencia`, `nombre`, `valor_compra`, `valor_venta`, `descuento`, `iva`, `descripcion`, `url_foto1`, `url_foto2`, `url_foto3`, `id_tipoproducto`, `cantidad`, `sexo`, `talla`, `autor`, `fecha_creacion`) VALUES
(1, 'CD1', 'CONDON M  EXTRA TEXTURIZADO', 123, 433, 13, 13, '     LO QUE SEA', '../view/recursos/productos/QWE_foto1.jpeg', '../view/recursos/productos/QWE_foto2.jpeg', '../view/recursos/productos/QWE_foto3.jpeg', 1, 0, 'hombre', '', 'YOHANNY LOPEZ', '2017-03-13'),
(2, '021', 'LO QUE SEA 1', 2000, 14000, 20, 16, 'lo q sea', '../view/recursos/productos/021_foto1.jpeg', '../view/recursos/productos/021_foto2.jpeg', '../view/recursos/productos/021_foto3.jpeg', 1, 17, 'indiferente', '', 'YOHANNY LOPEZ', '2017-03-24'),
(3, '5556', 'LO QUE SEA 2', 265, 455, 20, 12, 'lo q sea', '../view/recursos/productos/5556_foto1.jpeg', '../view/recursos/productos/5556_foto2.jpeg', '../view/recursos/productos/5556_foto3.jpeg', 1, 20, 'hombre', '', 'YOHANNY LOPEZ', '2017-03-24'),
(4, '5855', 'LO QUE SEA 3', 400, 8000, 12, 0, 'lo q sea', '../view/recursos/productos/5855_foto1.jpeg', '../view/recursos/productos/5855_foto2.jpeg', '../view/recursos/productos/5855_foto3.jpeg', 1, 9, 'hombre', '', 'YOHANNY LOPEZ', '2017-03-24'),
(5, 'JH', 'LO QUE SEA 5', 959, 5581, 50, 19, '    LO Q SEA', '../view/recursos/productos/JH_foto1.jpeg', '../view/recursos/productos/JH_foto2.jpeg', '../view/recursos/productos/JH_foto3.jpeg', 1, 22, 'hombre', '', 'YOHANNY LOPEZ', '2017-04-13'),
(6, '021', 'LO QUE SEA 6', 54, 111, 11, 17, 'lo q sea ', '../view/recursos/productos/021_foto1.jpeg', '../view/recursos/productos/021_foto2.jpeg', '../view/recursos/productos/021_foto3.jpeg', 1, 1210, 'hombre', '', 'YOHANNY LOPEZ', '2017-03-24'),
(7, 'CDNO', 'CONDOM M  EXTRA TEXTURIZADO', 3000, 4000, 10, 19, ' DESCRIPCION  DEL PRODUCTO', '../view/recursos/productos/CDNO_foto1.jpeg', '../view/recursos/productos/CDNO_foto2.jpeg', '../view/recursos/productos/CDNO_foto3.jpeg', 1, 1, 'indiferente', '', 'YOHANNY LOPEZ', '2017-04-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id_publicacion` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `texto` text NOT NULL,
  `tipo_publicacion` varchar(100) NOT NULL,
  `url_archivo` varchar(200) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha_creacion` varchar(40) NOT NULL,
  `autor` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id_publicacion`, `titulo`, `texto`, `tipo_publicacion`, `url_archivo`, `id_producto`, `fecha_creacion`, `autor`) VALUES
(1, 'FFFFF', 'fwdsdssds', 'informacion cientifica', '../view/recursos/publicaciones/FFFFF_file.jpeg', 4, '2017-04-10', 'YOHANNY LOPEZ'),
(4, 'INFECCIONES SEXUALES', 'lo q sea', 'informacion cientifica', '../view/recursos/publicaciones/INFECCIONES SEXUALES_file.jpeg', 1, '2017-04-10', 'YOHANNY'),
(5, 'VIH', 'hablamos de vih', 'informacion cientifica', '../view/recursos/publicaciones/VIH_file.jpeg', 5, '2017-04-10', 'yohanny');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol_usuario`
--

INSERT INTO `rol_usuario` (`id_rol`, `nombre`) VALUES
(1, 'administrador'),
(2, 'empleado'),
(3, 'cliente'),
(4, 'experto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id_tipoproducto` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id_tipoproducto`, `nombre`, `descripcion`) VALUES
(1, 'salud Sexual', 'salud saxual'),
(2, 'lenceria', 'lenceria'),
(3, 'juguetes', 'juguetes'),
(4, 'estimulantes', 'estimulantes'),
(5, 'otros', 'otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `tipo_documento` varchar(30) NOT NULL,
  `numero_documento` varchar(40) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `fecha_creacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `tipo_documento`, `numero_documento`, `correo`, `clave`, `telefono`, `celular`, `direccion`, `ciudad`, `edad`, `sexo`, `id_rol`, `estado`, `autor`, `fecha_creacion`) VALUES
(1, 'YOHANNY', 'LOPEZ', 'CC', '1001142162', 'RYLOPEZ2@MISENA.EDU.CO', '1234', '4833517', '3234891335', 'CINCO ESTRELLAS', 'BELLO', 23, 'MASCULINO', 1, 1, 'YOHANNY LOPEZ', '2017-01-06'),
(2, 'YOHANNI', 'LOPEZ', 'CC', '943545424', 'yohanny_116@hotmail.com', '1234', '4813957', '3234891335', 'Diagonal 42 F # 36 C - 115 Apartamento 104', 'BELLO', 21, 'MASCULINO', 1, 1, 'YOHANNY LOPEZ', '2017-03-13'),
(3, 'ANDRES', 'LOPEZ', 'CC', '100121', 'andreslopez2@misena.edu.co', '1234', '3214363153', '3234891335', 'Diagonal 42 F # 36 C - 115 Apartamento 104', 'MEDELLIN', 24, 'MASCULINO', 2, 1, 'ANDRES LOPEZ', '2017-04-09'),
(4, 'DURLEY DAMARIS', 'CARMONA RESTREPO', 'CC', '1044101320', 'durleyey@hotmail.com', '1234', '4813957', '3127998065', 'DG 42 f 36 c115 int 104', 'BELLO', 24, 'FEMENINO', 3, 1, 'DURLEY DAMARIS CARMONA RESTREPO', '2017-04-09'),
(5, 'CAMILA', 'ACEVEDO', 'CC', '565', 'cami65@gmail.com', '1234', '4833517', '32141', 'la calle', 'BELLO', 20, 'FEMENINO', 3, 1, 'YOHANNY LOPEZ', '2017-04-16'),
(6, 'LAURA', 'CASTAñEDA', 'CC', '1666569', 'laura28@gmail.com', '1234', '4876958', '3214785868', 'barrio  machado', 'COPACABANA', 20, 'FEMENINO', 3, 1, 'YOHANNY LOPEZ', '2017-04-16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagenes`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_tipoproducto` (`id_tipoproducto`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id_publicacion`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id_tipoproducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagenes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id_publicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id_tipoproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_tipoproducto`) REFERENCES `tipo_producto` (`id_tipoproducto`);

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol_usuario` (`id_rol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
