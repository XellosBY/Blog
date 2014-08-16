-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 13 2014 г., 18:59
-- Версия сервера: 5.5.37-log
-- Версия PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `categorie`) VALUES
(1, 'анекдот'),
(2, 'ужасы'),
(3, 'трагедия'),
(4, 'рассказ');

-- --------------------------------------------------------

--
-- Структура таблицы `Posts`
--

CREATE TABLE IF NOT EXISTS `Posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(32) NOT NULL,
  `post_title` text NOT NULL,
  `photo` tinytext,
  `post` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `Posts`
--

INSERT INTO `Posts` (`id`, `user_id`, `post_title`, `photo`, `post`, `date`) VALUES
(1, '1', 'Заголовок', '', 'Много ескта', '2014-06-25 11:57:13'),
(2, '', 'фывфыв', '372163746791761604366663047230765635213472341116415140529357156467428776711036813901051876860.jpg', 'фывыфв', '2014-07-02 19:28:34'),
(3, '', 'УРА!', '1203937285309244789530817475897518197185026945436288336566835752579683276494723846937078021.jpg', 'ыафыафыа', '2014-07-02 19:32:31'),
(4, '', 'фывфыв', '7', 'фывфыв', '2014-07-02 19:39:16'),
(5, '', 'сячсячс', '4', 'ячсячсчя', '2014-07-02 19:42:13'),
(6, '4', 'ячсячс', '10718451511473132474848904111400764278908495418663224511028517726632957171938924146628059288.jpg', 'ячсчясчяс', '2014-07-02 19:47:38'),
(8, '4', 'фывыфв', '12083077033998179464495879719169590253750648001011525840227600850871597094754688398492350256.jpg', 'фывыфв', '2014-07-02 20:05:44'),
(9, '4', 'фывыфв', '275901510233591337154961479515634038997924796123351296227296278049197349639296091523847411.jpg', 'фывыфв', '2014-07-02 20:06:04'),
(10, '4', 'фывыфв', '1320544581105188431444539384791045759809469334329213081199645241100670331635707520602138185.jpg', 'фывыфв', '2014-07-02 20:07:41'),
(11, '4', 'Hello world!', '145768530113397291257278856334119405694190185712950241228871020782093846605240356038409.jpg', 'Этот пост был отредактированЁ!', '2014-08-12 18:40:40'),
(12, '4', 'фывыфв', '100312408768140853585746858610472427093123342337804120627499728559799382221433889043327426.jpg', 'фывыфвфыв', '2014-07-02 20:10:39'),
(13, '4', 'ячсчясяч', '46571330912085714357564968479981131767734887431203281595045300812288411353038571181004518100.jpg', 'фвыфцйцкцйкцйкафысяч', '2014-07-02 20:13:47'),
(14, '4', 'ячсчясяч', '26113250912659144301747261620222675824012278949887868993629730186647014863647454409010896.jpg', 'фвыфцйцкцйкцйкафысяч', '2014-07-02 20:16:31'),
(16, '4', 'ячсчясяч', '1537935225233576235087770023662486115521044271115172577896237213392621826417525677412138006.jpg', 'Этот пост был отредактирован1', '2014-08-12 19:11:13'),
(17, '4', 'ясячсячс', '175193503541140705749602135844583386375780644568719553129153404885424194583601582150214300.jpg', 'фыавфыа', '2014-07-02 20:17:14'),
(18, '4', 'ясячсячс', '6487057481073728952931351265439189389786599989440621078113555530524372618711632095051136120445.jpg', 'фыавфыа', '2014-07-02 20:21:57'),
(19, '4', 'хм', '581454049244065271563595614959532930810373558119937848614026783157297694441959785840011936.jpg', 'фыавфыа', '2014-08-13 12:48:04'),
(26, '4', 'Длинный текст', NULL, '\n\nThis is Long Beach, a free, fully standards-compliant CSS template designed byFreeCssTemplates for Free CSS Templates. This free template is released under a Creative Commons Attributions 2.5 license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)\n\nSed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.\n', '2014-07-29 19:54:37'),
(27, '4', 'проверка звука', NULL, 'В конфигурационном файле имеются довольно гибкие настройки капчи. Можно менять размеры картинки, шрифт и даже саму капчу (параметр style). Ну и тут есть некоторые проблемы. Например, math у меня толком не заработал, все время выдавал неверный ответ, хотя складываю «3+2″ я вроде правильно. А riddle и word, указанные в качестве параметра для instance, увы, выдают ошибку Коханы. Если вы знаете решение проблемы — напишите об этом пожалуйста в комментариях.', '2014-08-13 13:53:16');

-- --------------------------------------------------------

--
-- Структура таблицы `posts_categories`
--

CREATE TABLE IF NOT EXISTS `posts_categories` (
  `post_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`,`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts_categories`
--

INSERT INTO `posts_categories` (`post_id`, `cat_id`) VALUES
(1, 1),
(1, 2),
(10, 0),
(11, 0),
(11, 2),
(11, 4),
(12, 0),
(16, 0),
(16, 1),
(16, 2),
(16, 4),
(18, 2),
(18, 4),
(19, 1),
(19, 2),
(21, 1),
(21, 2),
(23, 1),
(24, 2),
(25, 2),
(27, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`) VALUES
(1, 'Admin@admin.by', 'Xellos', 'Xellos-2', 0, NULL),
(2, 'Admin2@admin.by', 'Xellos2', '26cbd33ae3954b0fcc9e706cb2d813b7ca08df4aa6d976d7bb1fce86ccc8db68', 4, 1404244849),
(3, 'Admin3@admin.by', 'Xellos3', '1e3b69fb0007e8e892a6fbea0b242ec96db92ec733989f81d11e78b1d238b85e', 4, 1404323880),
(4, 'ASdsad@gmail.com', 'Xellos5', '26cbd33ae3954b0fcc9e706cb2d813b7ca08df4aa6d976d7bb1fce86ccc8db68', 15, 1407880451);

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `user_tokens`
--

INSERT INTO `user_tokens` (`id`, `user_id`, `user_agent`, `token`, `created`, `expires`) VALUES
(4, 4, '42c5d6a9cd00dc7a34fa70231ea4360f26c75906', 'c1c7dd7b0e9dc38808c28b5c65859adb04f32240', 1407880451, 1409090051);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
