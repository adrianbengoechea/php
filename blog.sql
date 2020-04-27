-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2020 a las 09:39:20
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `extract` varchar(255) DEFAULT NULL,
  `date` varchar(55) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `thumbnail` varchar(55) NOT NULL,
  `author` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `data`
--

INSERT INTO `data` (`id`, `title`, `extract`, `date`, `text`, `thumbnail`, `author`) VALUES
(44, 'Article # 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 1', '04/15/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 1', 'photo-1.jpg', 'admin'),
(45, 'Article # 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 2', '04/15/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 2', 'photo-2.jpg', 'admin'),
(46, 'Article # 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 3', '04/15/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 3', 'photo-3.jpg', 'admin'),
(47, 'Article # 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 4', '04/15/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 4', 'photo-4.jpg', 'admin'),
(48, 'Article # 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 5', '04/15/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 5', 'photo-5.jpg', 'admin'),
(49, 'Article # 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 6', '04/15/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 6', 'photo-6.jpg', 'admin'),
(50, 'Article # 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 7', '04/15/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 7', 'photo-7.jpg', 'admin'),
(51, 'Article # 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 8', '04/15/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 8', 'photo-8.jpg', 'admin'),
(52, 'Article # 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 9', '04/17/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 9', 'photo-9.jpg', 'admin'),
(53, 'Article # 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 10', '04/17/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 10', 'photo-10.jpg', 'admin'),
(54, 'Article # 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 11', '04/17/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 11', 'photo-11.jpg', 'admin'),
(55, 'Article # 12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 12', '04/17/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 12', 'photo-12.jpg', 'admin'),
(56, 'Article # 13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 13', '04/17/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 13', 'photo-13.jpg', 'admin'),
(57, 'Article # 14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 14', '04/17/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 14', 'photo-14.jpg', 'admin'),
(58, 'Article # 15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 15', '04/17/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 15', 'photo-15.jpg', 'admin'),
(59, 'Article # 16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 16', '04/17/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 16', 'photo-16.jpg', 'admin'),
(60, 'Article # 17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 17', '04/17/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 17', 'photo-17.jpg', 'admin'),
(61, 'Article # 18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # 18', '04/17/2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # 18', 'photo-18.jpg', 'admin'),
(63, 'The Test', 'Test Excerpt', '04/27/2020', 'Test Text and Content \r\n\r\nCONTENT CONTENT', 'Screenshot_3.png', 'admin'),
(64, 'Update Article Test 10', '', '04/27/2020', 'Update Article Test Content', 'Screenshot_2.png', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `instruction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `name`, `instruction`) VALUES
(1, 'site_name', 'The Master Blog S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'phantom01', 'ettolrach001'),
(2, 'phantom02', 'ettolrach002'),
(3, 'phantom03', 'ettolrach003'),
(4, 'phantom04', 'ettolrach004'),
(5, 'phantom05', 'ettolrach005'),
(6, 'admin', '8bd396eff0041c0d9c50d4b40eca558e3a9f3d1d87f9599f69a237e43e9bff3e32beeffbbf0569790072dd7420c85179200fc06e8ec906a4b2f1e272e97fed27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
