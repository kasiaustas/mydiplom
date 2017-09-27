-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 23 2017 г., 15:58
-- Версия сервера: 5.6.34
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` enum('0','1','2') NOT NULL,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL COMMENT 'ключевые слова',
  `description` varchar(255) NOT NULL COMMENT 'описание страницы категории'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(1, '0', 'БРЕНД', '', ''),
(2, '0', 'ФОРМА', '', ''),
(3, '1', 'Dior', 'dior, очки, exclusive, sunglasses', 'очки dior'),
(4, '1', 'Fendi', '', ''),
(5, '1', 'Givenchy', '', ''),
(6, '1', 'Ray-ban', '', ''),
(7, '1', 'Saint Laurent', '', ''),
(8, '1', 'Carrera', '', ''),
(9, '1', 'Palaroid Kids', '', ''),
(10, '2', 'Aviator', '', ''),
(11, '2', 'Navigator', '', ''),
(12, '2', 'Oval', '', ''),
(13, '2', 'Rectangle', '', ''),
(14, '2', 'Round', '', ''),
(15, '2', 'Wayfarer', '', ''),
(16, '2', 'Cateye', '', ''),
(17, '2', 'Other', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(10) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sity` varchar(255) NOT NULL,
  `region` enum('1','2','3','4','5','6') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `qty`, `sum`, `status`, `name`, `last_name`, `email`, `phone`, `address`, `sity`, `region`) VALUES
(1, '2017-09-22 22:48:39', '2017-09-22 22:48:39', 2, 1000, '0', 'Екатерина', 'Рожкова', 'ваыва', '5456', 'минск', 'минск', '1'),
(2, '2017-09-22 22:49:50', '2017-09-22 22:49:50', 2, 1000, '0', 'h', 'h', 'h', 'hg', 'h', 'h', '1'),
(3, '2017-09-22 22:50:31', '2017-09-22 22:50:31', 2, 1000, '0', 'gfy', 'ty', 'tyy', 'ty', 'yt', 'rty', '1'),
(4, '2017-09-22 22:52:08', '2017-09-22 22:52:08', 2, 1000, '0', 'jgj', 'jh', 'jhhj', 'hjg', 'jh', 'hg', '1'),
(5, '2017-09-22 22:53:04', '2017-09-22 22:53:04', 2, 1000, '0', 'yu', 'utyu', 'uyt', 'uyt', 'uy', 'uty', '1'),
(6, '2017-09-22 22:55:08', '2017-09-22 22:55:08', 2, 1000, '0', 'ghj', 'Рожкова', 'jg', 'jhjg', 'минск', 'h', '3'),
(7, '2017-09-22 22:56:15', '2017-09-22 22:56:15', 2, 1000, '0', 'gfy', 'h', 'uyt', 'tyu', 'jh', 'hg', '1'),
(8, '2017-09-22 23:08:15', '2017-09-22 23:08:15', 2, 1000, '0', 'dfrt', 'trt', 'trre', 'rt', 'rte', 'trert', '2'),
(9, '2017-09-22 23:43:03', '2017-09-22 23:43:03', 2, 1000, '0', 'Астапенко', 'Екатерина', 'kasiaustas', '+375293385750', 'Разинская 64-51', 'Минск', '1'),
(10, '2017-09-23 00:01:23', '2017-09-23 00:01:23', 1, 500, '0', 'cv', 'vc', 'vc', 'cv', 'vc', 'vcvc', '1'),
(11, '2017-09-23 00:09:01', '2017-09-23 00:09:01', 6, 1500, '0', 'Екатерина', 'Рожкова', 'kasiaustas', '+375293385750', 'минск', 'vcvc', '1'),
(12, '2017-09-23 14:10:31', '2017-09-23 14:10:31', 3, 1500, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293385750', 'минск', 'ertrt', '1'),
(13, '2017-09-23 14:27:43', '2017-09-23 14:27:43', 3, 1500, '0', 'Екатерина', 'Рожкова', 'gg@k.com', '45', 'минск', 'hg', '2'),
(14, '2017-09-23 14:29:55', '2017-09-23 14:29:55', 3, 1500, '0', 'Екатерина', 'h', 'jkl', '455', 'jh', 'vcvc', '1'),
(15, '2017-09-23 14:46:48', '2017-09-23 14:46:48', 3, 1500, '0', 'Екатерина', 'h', 'jkl', '455', 'jh', 'vcvc', '1'),
(16, '2017-09-23 14:47:11', '2017-09-23 14:47:11', 3, 1500, '0', 'cv', 'jh', 'gffg', 'gfg', 'jh', 'vcvc', '1'),
(17, '2017-09-23 14:48:53', '2017-09-23 14:48:53', 3, 1500, '0', 'gfg', 'gfdg', 'gfdgf', 'fgdfd', 'fgd', 'gfdfgd', '1'),
(18, '2017-09-23 14:50:10', '2017-09-23 14:50:10', 3, 1500, '0', 'Екатерина', 'Рожкова', 'gg@k.com', '+375293644855', 'минск, разинская', 'Минск', '1'),
(19, '2017-09-23 14:54:47', '2017-09-23 14:54:47', 1, 500, '0', 'gfy', 'h', 'gg@k.com', '+375293385750', 'минск', 'Минск', '1'),
(20, '2017-09-23 15:10:44', '2017-09-23 15:10:44', 2, 1000, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293385750', 'минск', 'Минск', '1'),
(21, '2017-09-23 15:17:33', '2017-09-23 15:17:33', 2, 1000, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293644855', 'минск', 'Минск', '1'),
(22, '2017-09-23 15:18:41', '2017-09-23 15:18:41', 2, 1000, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293644855', 'минск', 'Минск', '1'),
(23, '2017-09-23 15:19:53', '2017-09-23 15:19:53', 2, 1000, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293385750', 'минск', 'Минск', '1'),
(24, '2017-09-23 15:20:47', '2017-09-23 15:20:47', 2, 1000, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293644855', 'минск', 'Минск', '1'),
(25, '2017-09-23 15:21:41', '2017-09-23 15:21:41', 2, 1000, '0', 'Екатерина', 'h', 'kasiaustas@mail.ru', '+375293385750', 'минск', 'Минск', '1'),
(26, '2017-09-23 15:22:40', '2017-09-23 15:22:40', 2, 1000, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293385750', 'минск', 'Минск', '1'),
(27, '2017-09-23 15:26:14', '2017-09-23 15:26:14', 2, 1000, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293385750', 'минск', 'Минск', '1'),
(28, '2017-09-23 15:30:39', '2017-09-23 15:30:39', 2, 1000, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293385750', 'минск', 'Минск', '1'),
(29, '2017-09-23 15:31:36', '2017-09-23 15:31:36', 2, 1000, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293385750', 'минск', 'Минск', '1'),
(30, '2017-09-23 15:38:10', '2017-09-23 15:38:10', 2, 1000, '0', 'Екатерина', 'Рожкова', 'kasiaustas@mail.ru', '+375293385750', 'минск', 'Минск', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(11) NOT NULL,
  `sum_item` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `price`, `qty_item`, `sum_item`) VALUES
(1, 9, 1, 'Dior Step Sunglasses', 500, 1, 500),
(2, 9, 16, 'Dior Homme Composit', 500, 1, 500),
(3, 10, 16, 'Dior Homme Composit', 500, 1, 500),
(4, 11, 1, 'Dior Step Sunglasses', 500, 1, 500),
(5, 11, 10, 'Dior Pop Sunglasses', 200, 5, 1000),
(6, 12, 8, 'Dior Step Sunglasses', 500, 3, 1500),
(7, 13, 8, 'Dior Step Sunglasses', 500, 3, 1500),
(8, 14, 8, 'Dior Step Sunglasses', 500, 3, 1500),
(9, 15, 8, 'Dior Step Sunglasses', 500, 3, 1500),
(10, 16, 8, 'Dior Step Sunglasses', 500, 3, 1500),
(11, 17, 8, 'Dior Step Sunglasses', 500, 3, 1500),
(12, 18, 8, 'Dior Step Sunglasses', 500, 3, 1500),
(13, 19, 16, 'Dior Homme Composit', 500, 1, 500),
(14, 20, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(15, 20, 13, 'Dior Real Sunglasses', 200, 1, 200),
(16, 21, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(17, 21, 13, 'Dior Real Sunglasses', 200, 1, 200),
(18, 22, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(19, 22, 13, 'Dior Real Sunglasses', 200, 1, 200),
(20, 23, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(21, 23, 13, 'Dior Real Sunglasses', 200, 1, 200),
(22, 24, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(23, 24, 13, 'Dior Real Sunglasses', 200, 1, 200),
(24, 25, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(25, 25, 13, 'Dior Real Sunglasses', 200, 1, 200),
(26, 26, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(27, 26, 13, 'Dior Real Sunglasses', 200, 1, 200),
(28, 27, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(29, 27, 13, 'Dior Real Sunglasses', 200, 1, 200),
(30, 28, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(31, 28, 13, 'Dior Real Sunglasses', 200, 1, 200),
(32, 29, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(33, 29, 13, 'Dior Real Sunglasses', 200, 1, 200),
(34, 30, 4, 'Dior So Real Sunglasses', 800, 1, 800),
(35, 30, 13, 'Dior Real Sunglasses', 200, 1, 200);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `id_form` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sale` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) NOT NULL DEFAULT 'очки, солнцезащитные очки, купить очки' COMMENT 'keywords для продукта'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_product`, `id_type`, `id_brand`, `id_form`, `title`, `price`, `quantity`, `picture`, `description`, `sale`, `keywords`) VALUES
(1, 1, 3, 10, 'Dior Step Sunglasses', 500, 10, 'dior1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing..', NULL, 'очки, солнцезащитные очки, купить очки'),
(2, 1, 4, 13, 'Fendi 0172 Sunglasses', 500, 5, 'fendi1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing..', NULL, 'очки, солнцезащитные очки, купить очки'),
(3, 1, 3, 12, 'Dior Abstract Sunglasses', 1000, 10, 'dior2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(4, 1, 3, 13, 'Dior So Real Sunglasses', 800, 10, 'dior3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(5, 1, 3, 14, 'Dior Abstract', 500, 10, 'dior4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', '20', 'очки, солнцезащитные очки, купить очки'),
(6, 1, 3, 15, 'Dior So Real', 1000, 10, 'dior5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(7, 1, 3, 16, 'Dior Step ', 800, 10, 'dior6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(8, 1, 3, 17, 'Dior Step Sunglasses', 500, 10, 'dior7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(9, 1, 3, 17, 'Dior Abstract Sunglasses', 1100, 10, 'dior8.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(10, 1, 3, 10, 'Dior Pop Sunglasses', 200, 10, 'dior9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', '50', 'очки, солнцезащитные очки, купить очки'),
(11, 1, 3, 11, 'Dior Step Sunglasses', 500, 20, 'dior10.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(12, 1, 3, 12, 'Dior Abstract Sunglasses', 1500, 10, 'dior11.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(13, 1, 3, 13, 'Dior Real Sunglasses', 200, 20, 'dior12.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', '50', 'очки, солнцезащитные очки, купить очки'),
(14, 1, 3, 14, 'Dior Pop Sunglasses', 1500, 10, 'dior13.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(15, 1, 3, 15, 'Dior Step Sunglasses', 200, 20, 'dior14.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', '40', 'очки, солнцезащитные очки, купить очки'),
(16, 2, 3, 14, 'Dior Homme Composit', 500, 40, 'mdior1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing..', NULL, 'очки, солнцезащитные очки, купить очки'),
(17, 3, 9, 15, 'Polaroid Kids 0300 Size 1-3 Polarized Wayfarer', 100, 50, 'palaroid1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing.', NULL, 'очки, солнцезащитные очки, купить очки'),
(18, 1, 5, 13, 'Givenchy 7040 Shield ', 500, 50, 'givenchy1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(19, 1, 6, 16, 'Ray-Ban 3025 Flash', 500, 50, 'ray_ban1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки'),
(20, 1, 7, 17, 'Saint Laurent CLASSIC 11 RAINBOW', 500, 50, 'saint_laurent1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, 'очки, солнцезащитные очки, купить очки');

-- --------------------------------------------------------

--
-- Структура таблицы `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region_name` enum('Минская','Гомельская','Брестская','Гродненская','Витебская','Могилевская') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `region`
--

INSERT INTO `region` (`id`, `region_name`) VALUES
(1, 'Минская'),
(2, 'Гомельская'),
(3, 'Брестская'),
(4, 'Гродненская'),
(5, 'Витебская'),
(6, 'Могилевская');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `parent_id` enum('0') NOT NULL DEFAULT '0',
  `name` enum('детские','женские','мужские') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`type_id`, `parent_id`, `name`) VALUES
(1, '0', 'женские'),
(2, '0', 'мужские'),
(3, '0', 'детские');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_brand` (`id_brand`),
  ADD KEY `id_form` (`id_form`);

--
-- Индексы таблицы `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `type_id` (`type_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`type_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_form`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
