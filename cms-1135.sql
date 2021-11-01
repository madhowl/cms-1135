-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 01 2021 г., 16:05
-- Версия сервера: 8.0.26-0ubuntu0.20.04.3
-- Версия PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cms-1135`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro_img` varchar(255) NOT NULL,
  `intro_text` text NOT NULL,
  `full_text` text NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `intro_img`, `intro_text`, `full_text`, `published_at`, `slug`) VALUES
(1, 1, 'PHP скрипт для создания SLUG в базе данных', '/assets/img/blog/blog-recent-3.jpg', 'Вот только закончил создание ссылок SLUG в базе данных.\r\nБыла необходимость создать слуг в третьем поле, взяв ид и название статьи из двух других полей.', 'Creating of Slug from title in PHP is very easy and we can easily do this things. But How can we generate unique url slug from same title in PHP. So, this things we have dicuss here. When we have developed any dynamic ecommerce or content based or any website which general public can access which has been developed PHP then generating or creating of slug is very important task, because we want to generate every url must be unique if it is duplicate then it will load different result on web page.\r\n\r\nSo, when we have store dynamic website content into Mysql database then at that time it will typical pattern for fetching data and generate unique slug which has been based on particular title. This unique and seo friendly slug will gives not only to users but also search engine can human friendly way to get access website dynamic page from this unique slug. So, Generating or Creating of unique slug is very important task for any PHP web developers.\r\n\r\nIf we have use any PHP framework for developing website then we can get easily make slug from title and but here we have discuss how to make url slug using PHP and it must be unique. So, in this post we have describe step by step how can we generate unique slug by using PHP. Here we have store slug data in mysql table and when we have generate new slug from particular title then it will check in database particular slug or url already present in our database or not, it is present then it will count how many time it has been appear in database and lastly it will append maximum number plus one number append into slug and make in unique. Below you can find complete source code for how to create unique slug in php.', '2021-11-01 05:04:24', '\r\nphp-skript-dlya-sozdaniya-slug-v-baze-dannyh');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'PHP', 'Скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений.'),
(2, 'Laravel', 'Бесплатный веб-фреймворк с открытым кодом, предназначенный для разработки с использованием архитектурной модели MVC.'),
(3, 'linux', 'Linux — семейство Unix-подобных операционных систем на базе ядра Linux, включающих тот или иной набор утилит и программ проекта GNU, и, возможно, другие компоненты.'),
(4, 'Хостинг', 'Услуга по предоставлению ресурсов для размещения информации на сервере. ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
