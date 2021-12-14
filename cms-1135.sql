-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 14 2021 г., 12:52
-- Версия сервера: 8.0.27-0ubuntu0.20.04.1
-- Версия PHP: 7.4.26

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
  `slug` varchar(255) NOT NULL,
  `visit` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `intro_img`, `intro_text`, `full_text`, `published_at`, `slug`, `visit`) VALUES
(1, 1, 'PHP скрипт для создания SLUG в базе данных', '/assets/front/img/blog/blog-recent-3.jpg', 'Вот только закончил создание ссылок SLUG в базе данных.\r\nБыла необходимость создать слуг в третьем поле, взяв ид и название статьи из двух других полей.', 'Creating of Slug from title in PHP is very easy and we can easily do this things. But How can we generate unique url slug from same title in PHP. So, this things we have dicuss here. When we have developed any dynamic ecommerce or content based or any website which general public can access which has been developed PHP then generating or creating of slug is very important task, because we want to generate every url must be unique if it is duplicate then it will load different result on web page.\r\n\r\nSo, when we have store dynamic website content into Mysql database then at that time it will typical pattern for fetching data and generate unique slug which has been based on particular title. This unique and seo friendly slug will gives not only to users but also search engine can human friendly way to get access website dynamic page from this unique slug. So, Generating or Creating of unique slug is very important task for any PHP web developers.\r\n\r\nIf we have use any PHP framework for developing website then we can get easily make slug from title and but here we have discuss how to make url slug using PHP and it must be unique. So, in this post we have describe step by step how can we generate unique slug by using PHP. Here we have store slug data in mysql table and when we have generate new slug from particular title then it will check in database particular slug or url already present in our database or not, it is present then it will count how many time it has been appear in database and lastly it will append maximum number plus one number append into slug and make in unique. Below you can find complete source code for how to create unique slug in php.', '2021-11-01 05:04:24', 'php-skript', 0),
(2, 3, 'Высококачественный прототип будущего проекта продолжает удивлять', '/assets/front/img/blog/blog-recent-1.jpg', 'Следует отметить, что постоянный количественный рост и сфера нашей активности является качественно новой ступенью переосмысления внешнеэкономических политик. Лишь тщательные исследования конкурентов являются только методом политического участия и ассоциативно распределены по отраслям. Имеется спорная точка зрения, гласящая примерно следующее: сторонники тоталитаризма в науке преданы социально-демократической анафеме.', '<p>Противоположная точка зрения подразумевает, что реплицированные с зарубежных источников, современные исследования будут рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Противоположная точка зрения подразумевает, что представители современных социальных резервов преданы социально-демократической анафеме! Предварительные выводы неутешительны: сложившаяся структура организации, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для существующих финансовых и административных условий. Значимость этих проблем настолько очевидна, что убеждённость некоторых оппонентов не даёт нам иного выбора, кроме определения новых принципов формирования материально-технической и кадровой базы. Идейные соображения высшего порядка, а также базовый вектор развития влечет за собой процесс внедрения и модернизации вывода текущих активов. Прежде всего, консультация с широким активом требует анализа глубокомысленных рассуждений.</p>\r\n\r\n<p>В своём стремлении повысить качество жизни, они забывают, что перспективное планирование говорит о возможностях первоочередных требований. Имеется спорная точка зрения, гласящая примерно следующее: многие известные личности преданы социально-демократической анафеме. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: выбранный нами инновационный путь влечет за собой процесс внедрения и модернизации кластеризации усилий. Безусловно, базовый вектор развития не даёт нам иного выбора, кроме определения инновационных методов управления процессами. Следует отметить, что постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для новых принципов формирования материально-технической и кадровой базы. А ещё представители современных социальных резервов, инициированные исключительно синтетически, заблокированы в рамках своих собственных рациональных ограничений.</p>\r\n\r\n<p>Господа, высококачественный прототип будущего проекта позволяет оценить значение анализа существующих паттернов поведения. Каждый из нас понимает очевидную вещь: глубокий уровень погружения создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса экспериментов, поражающих по своей масштабности и грандиозности.</p>', '2021-11-09 00:57:39', 'vysokokachestvennyj-prototip-budushego-proekta-prodolzhaet-udivlyat', 0),
(3, 3, 'Парад бытовой техники оказался началом великой войны', '/assets/front/img/blog/blog-recent-2.jpg', 'Как принято считать, сделанные на базе интернет-аналитики выводы и по сей день остаются уделом либералов, которые жаждут быть смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности! Разнообразный и богатый опыт говорит нам, что курс на социально-ориентированный национальный проект предопределяет высокую востребованность как самодостаточных, так и внешне зависимых концептуальных решений. Не следует, однако, забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет определяющее значение для модели развития.', '<p>Следует отметить, что выбранный нами инновационный путь не оставляет шанса для первоочередных требований. С другой стороны, синтетическое тестирование позволяет выполнить важные задания по разработке новых принципов формирования материально-технической и кадровой базы. Курс на социально-ориентированный национальный проект требует от нас анализа стандартных подходов.</p>\r\n\r\n<p>Сделанные на базе интернет-аналитики выводы подвергнуты целой серии независимых исследований. Учитывая ключевые сценарии поведения, семантический разбор внешних противодействий создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса новых предложений. Приятно, граждане, наблюдать, как явные признаки победы институционализации неоднозначны и будут ограничены исключительно образом мышления.</p>\r\n\r\n<p>Как уже неоднократно упомянуто, представители современных социальных резервов указаны как претенденты на роль ключевых факторов. И нет сомнений, что некоторые особенности внутренней политики и по сей день остаются уделом либералов, которые жаждут быть заблокированы в рамках своих собственных рациональных ограничений. И нет сомнений, что сделанные на базе интернет-аналитики выводы, инициированные исключительно синтетически, своевременно верифицированы. Вот вам яркий пример современных тенденций - современная методология разработки создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса распределения внутренних резервов и ресурсов. Но курс на социально-ориентированный национальный проект напрямую зависит от направлений прогрессивного развития. В своём стремлении повысить качество жизни, они забывают, что синтетическое тестирование играет определяющее значение для форм воздействия.</p>', '2021-11-09 01:01:14', 'parad-bytovoj-tehniki-okazalsya-nachalom-velikoj-vojny', 0),
(4, 1, 'deyju rews sw', 'badges-python-djangoorm-stage2.png', 'etyursu6u6w', '<p>dtuetu</p>\r\n', '2021-12-05 23:45:49', 'deyju-rews-sw', 0),
(5, 3, 'Не следует забывать, что парад бытовой техники оказался началом великой войны', 'http://cms.test/uploads/source/lol-bubble-icon.jpg', 'Безусловно, новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании поэтапного и последовательного развития общества. Как принято считать, предприниматели в сети интернет объединены в целые кластеры себе подобных. Равным образом, сплочённость команды профессионалов не даёт нам иного выбора, кроме определения дальнейших направлений развития.', '<p>В целом, конечно, сложившаяся структура организации однозначно определяет каждого участника как способного принимать собственные решения касаемо как самодостаточных, так и внешне зависимых концептуальных решений. С другой стороны, базовый вектор развития создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса экономической целесообразности принимаемых решений. Равным образом, высокое качество позиционных исследований однозначно определяет каждого участника как способного принимать собственные решения касаемо новых принципов формирования материально-технической и кадровой базы.</p>\r\n\r\n<p>Следует отметить, что сложившаяся структура организации в значительной степени обусловливает важность стандартных подходов. В своём стремлении улучшить пользовательский опыт мы упускаем, что действия представителей оппозиции объединены в целые кластеры себе подобных. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего мира являются только методом политического участия и призваны к ответу.</p>\r\n\r\n<p>Являясь всего лишь частью общей картины, интерактивные прототипы объединены в целые кластеры себе подобных. В своём стремлении улучшить пользовательский опыт мы упускаем, что представители современных социальных резервов неоднозначны и будут функционально разнесены на независимые элементы. Многие известные личности лишь добавляют фракционных разногласий и разоблачены. Для современного мира экономическая повестка сегодняшнего дня позволяет оценить значение соответствующих условий активизации. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции выявляет срочную потребность анализа существующих паттернов поведения. В своём стремлении повысить качество жизни, они забывают, что высокотехнологичная концепция общественного уклада выявляет срочную потребность прогресса профессионального сообщества.</p>\r\n', '2021-12-05 23:59:41', 'ne-sleduet-zaby-vat-cto-parad-by-tovoi-texniki-okazalsya-nacalom-velikoi-voiny', 0),
(6, 1, '', 'http://cms.test/uploads/source/badges-python-djangoorm-stage2.png', '', '', '2021-12-07 00:18:08', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `article_tag`
--

CREATE TABLE `article_tag` (
  `article_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `article_tag`
--

INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(2, 4),
(3, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `slug`) VALUES
(1, 'PHP', '', 'Скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений.', ''),
(2, 'Laravel', '', 'Бесплатный веб-фреймворк с открытым кодом, предназначенный для разработки с использованием архитектурной модели MVC.', ''),
(3, 'linux', '', 'Linux — семейство Unix-подобных операционных систем на базе ядра Linux, включающих тот или иной набор утилит и программ проекта GNU, и, возможно, другие компоненты.', ''),
(4, 'Хостинг', '', 'Услуга по предоставлению ресурсов для размещения информации на сервере. ', '');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'не верефицирован'),
(2, 'Администратор'),
(3, 'Пользователь'),
(4, 'Заблокирован');

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`, `deleted_at`) VALUES
(1, 'Apache', '2021-11-26 01:09:20'),
(2, 'Valet', '2021-11-25 04:02:04'),
(3, 'Юмор', '2021-11-23 00:45:44'),
(4, 'API', '2021-11-23 00:45:58'),
(5, 'Sql', NULL),
(6, 'sqLite', NULL),
(7, 'Linux', NULL),
(8, 'MySql', '2021-11-23 23:21:54'),
(9, 'Java Script', '2021-11-23 23:32:17'),
(10, 'sdfyh', NULL),
(11, 'Noty.js', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `data_restored` timestamp NULL DEFAULT NULL,
  `hash_restore` varchar(255) DEFAULT NULL,
  `hash_email_confirm` varchar(255) NOT NULL,
  `status_id` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `data_restored`, `hash_restore`, `hash_email_confirm`, `status_id`) VALUES
(1, 'admin', 'admin@yandex.ru', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, 'null', 1),
(2, 'admin1', 'admin1@yandex.ru', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, 'NULL', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `article_tag`
--
ALTER TABLE `article_tag`
  ADD KEY `article_id` (`article_id`),
  ADD KEY `teg_id` (`tag_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_FK` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `article_teg_FK` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
