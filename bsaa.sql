-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 05 2019 г., 14:48
-- Версия сервера: 5.5.60-0ubuntu0.14.04.1
-- Версия PHP: 7.2.13-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `bsaa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Building`
--

CREATE TABLE IF NOT EXISTS `Building` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `Building`
--

INSERT INTO `Building` (`id`, `name`, `url`) VALUES
(1, 'Главный учебный корпус', 'guk'),
(2, 'Учебный корпус №3', 'bertos'),
(3, 'Общежитие', 'hostel'),
(4, 'КПП', 'kpp'),
(5, 'Военный факультет', 'vf');

-- --------------------------------------------------------

--
-- Структура таблицы `building_slide`
--

CREATE TABLE IF NOT EXISTS `building_slide` (
  `building_id` int(11) NOT NULL,
  `slide_id` int(11) NOT NULL,
  PRIMARY KEY (`building_id`,`slide_id`),
  KEY `IDX_1E4F5FF84D2A7E12` (`building_id`),
  KEY `IDX_1E4F5FF8DD5AFB87` (`slide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `building_slide`
--

INSERT INTO `building_slide` (`building_id`, `slide_id`) VALUES
(1, 22),
(2, 21),
(2, 22),
(3, 21),
(3, 22),
(4, 22);

-- --------------------------------------------------------

--
-- Структура таблицы `fos_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_583D1F3E5E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `fos_user_user`
--

CREATE TABLE IF NOT EXISTS `fos_user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8mb4_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8mb4_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8mb4_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C560D76192FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C560D761A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_C560D761C05FB297` (`confirmation_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `fos_user_user`
--

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`) VALUES
(1, 'admin', 'admin', 'it@bsaa.by', 'it@bsaa.by', 1, NULL, '$2y$13$VkxwcccM2Zk4oEI52cTaZuLGOBi9EVVFMLcmHlgGQl2f0GOEY7fh6', '2019-01-29 09:38:08', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', '2019-01-08 14:01:07', '2019-01-29 09:38:08', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `fos_user_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Slide`
--

CREATE TABLE IF NOT EXISTS `Slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` double NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `isVideo` tinyint(1) NOT NULL,
  `showFrom` date NOT NULL,
  `showFor` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `Slide`
--

INSERT INTO `Slide` (`id`, `title`, `url`, `priority`, `isActive`, `format`, `duration`, `height`, `width`, `isVideo`, `showFrom`, `showFor`) VALUES
(21, 'Слайд', '/upload/1548672463.jpg', 2, 1, 'jpg', 15, 2160, 2169, 0, '2019-01-23', '2019-01-31'),
(22, 'Слайд', '/upload/1548680526.jpg', 1, 1, 'jpg', 15, 440, 520, 0, '2014-01-01', '2023-01-01');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `building_slide`
--
ALTER TABLE `building_slide`
  ADD CONSTRAINT `FK_1E4F5FF84D2A7E12` FOREIGN KEY (`building_id`) REFERENCES `Building` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1E4F5FF8DD5AFB87` FOREIGN KEY (`slide_id`) REFERENCES `Slide` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
  ADD CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_user_group` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
