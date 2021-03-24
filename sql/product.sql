-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 24 2021 г., 16:04
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type_n` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `full_description` varchar(2000) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `size` varchar(250) NOT NULL,
  `weight` varchar(250) NOT NULL,
  `shelf_life` varchar(250) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `If_fried` tinyint(1) NOT NULL,
  `date_if_introduction` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `type_n`, `type`, `description`, `full_description`, `price`, `size`, `weight`, `shelf_life`, `picture`, `If_fried`, `date_if_introduction`) VALUES
(1, 'Обжаренный грецкий орех', 1, 'Грецкий орех', 'Наши грецкие орехи, благодаря экологически чистой почве и заботе...', 'Наши грецкие орехи, благодаря экологически чистой почве и заботе, с которой их выращивают, содержат большое количество полифенолов, витамина Е и кислоты омега-3. Они подходят для выпечки и салатов. Имеют твердую скорлупу, легкую для открытия, и горьковатый привкус. Хранить в сухом месте. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественные, экологически безопасные грецкие орехи можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '15.25', 'D 20-50мм (в диапазоне)', 'Бокс/сетка 1, 2 кг.', 'При 5-15°С 6-10 месяцев.', '../gretskiy/uploads/uploads/image/product/walnut.png', 1, '2021-03-01'),
(2, 'Очищенный грецкий орех', 1, 'Грецкий орех', 'Наши грецкие орехи, благодаря экологически чистой почве и заботе...', 'Наши грецкие орехи, благодаря экологически чистой почве и заботе, с которой их выращивают, содержат большое количество полифенолов, витамина Е и кислоты омега-3. Они подходят для выпечки и салатов. Имеют твердую скорлупу, легкую для открытия, и горьковатый привкус. Хранить в сухом месте. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественные, экологически безопасные грецкие орехи можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '20.30', 'D 20-50мм (в диапазоне)', 'Бокс/сетка 1.5, 2 кг.', 'При 5-15°С 6-10 месяцев.', '../gretskiy/uploads/uploads/image/product/walnut.png', 0, '2021-03-01'),
(3, 'Неочищенный грецкий орех', 1, 'Грецкий орех', 'Наши грецкие орехи, благодаря экологически чистой почве и заботе...', 'Наши грецкие орехи, благодаря экологически чистой почве и заботе, с которой их выращивают, содержат большое количество полифенолов, витамина Е и кислоты омега-3. Они подходят для выпечки и салатов. Имеют твердую скорлупу, легкую для открытия, и горьковатый привкус. Хранить в сухом месте. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественные, экологически безопасные грецкие орехи можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '16.00', 'D 20-50мм (в диапазоне)', 'Бокс/сетка 2, 3 кг.', 'При 5-15°С 6-10 месяцев.', '../gretskiy/uploads/uploads/image/product/walnut.png', 0, '2021-03-01'),
(4, 'Обжаренный фундук', 2, 'Фундук\r\n', 'Фундук используют для изготовления кондитерских изделий...', 'Фундук используют для изготовления кондитерских изделий: печенья, тортов, карамельных начинок. А ещё из фундука получают пищевое миндальное масло. Фундук содержит много витаминов В и Е, которые важны для сохранения эластичности сосудов мозга. Наше производство находится в районе, который отличается хорошей экологией и плодородными землями, что позволяет выращивать экологически чистый и безопасные орехи. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественный, экологически безопасный фундук можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '30.00', 'D 20-30мм (в диапазоне)', 'Бокс/сетка 0.5, 2 кг.', 'При 5-10 ° С 3-6 месяцев.', '../gretskiy/uploads/uploads/image/product/hazelnut.png', 1, '2021-03-11'),
(5, 'Очищенный Фундук', 2, 'Фундук', 'Фундук используют для изготовления кондитерских изделий...', 'Фундук используют для изготовления кондитерских изделий: печенья, тортов, карамельных начинок. А ещё из фундука получают пищевое миндальное масло. Фундук содержит много витаминов В и Е, которые важны для сохранения эластичности сосудов мозга. Наше производство находится в районе, который отличается хорошей экологией и плодородными землями, что позволяет выращивать экологически чистый и безопасные орехи. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественный, экологически безопасный фундук можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '30.00', 'D 20-30мм (в диапазоне)', 'Бокс/сетка 0.5, 2 кг.', 'При 5-10 ° С 3-6 месяцев.', '../gretskiy/uploads/uploads/image/product/hazelnut.png', 0, '2021-03-11'),
(6, 'Неочищенный Фундук', 2, 'Фундук', 'Фундук используют для изготовления кондитерских изделий...', 'Фундук используют для изготовления кондитерских изделий: печенья, тортов, карамельных начинок. А ещё из фундука получают пищевое миндальное масло. Фундук содержит много витаминов В и Е, которые важны для сохранения эластичности сосудов мозга. Наше производство находится в районе, который отличается хорошей экологией и плодородными землями, что позволяет выращивать экологически чистый и безопасные орехи. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественный, экологически безопасный фундук можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '30.00', 'D 20-30мм (в диапазоне)', 'Бокс/сетка 0.5, 2 кг.', 'При 5-10 ° С 3-6 месяцев.', '../gretskiy/uploads/uploads/image/product/hazelnut.png', 0, '2021-03-11'),
(7, 'Обжаренный миндаль', 3, 'Миндаль', 'Согласно исследованию, миндальный орех находится на первом месте по «питательной пригодности»...', 'Согласно исследованию, миндальный орех находится на первом месте по «питательной пригодности», то есть по составу питательных веществ, необходимых для удовлетворения ежедневных нужд. Миндаль широко используются для изготовления кондитерских изделий. Есть масса рецептов печенья, тортов и карамельных начинок, в которых присутствует этот орех. Из сладкого миндаля также получают пищевое миндальное масло. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественный, экологически безопасный и вкусный миндаль можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '24.50', 'D 25-50мм (в диапазоне)', 'Бокс/сетка 1, 1.5 кг.', 'При -18 °С 12 месяцев.', '../gretskiy/uploads/uploads/image/product/almonds.png', 1, '2021-03-01'),
(8, 'Очищенный миндаль', 3, 'Миндаль', 'Согласно исследованию, миндальный орех находится на первом месте по «питательной пригодности»...', 'Согласно исследованию, миндальный орех находится на первом месте по «питательной пригодности», то есть по составу питательных веществ, необходимых для удовлетворения ежедневных нужд. Миндаль широко используются для изготовления кондитерских изделий. Есть масса рецептов печенья, тортов и карамельных начинок, в которых присутствует этот орех. Из сладкого миндаля также получают пищевое миндальное масло. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественный, экологически безопасный и вкусный миндаль можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '24.50', 'D 25-50мм (в диапазоне)', 'Бокс/сетка 1, 1.5 кг.', 'При -18 °С 12 месяцев.', '../gretskiy/uploads/uploads/image/product/almonds.png', 0, '2021-03-01'),
(9, 'Неочищенный миндаль', 3, 'Миндаль', 'Согласно исследованию, миндальный орех находится на первом месте по «питательной пригодности»...', 'Согласно исследованию, миндальный орех находится на первом месте по «питательной пригодности», то есть по составу питательных веществ, необходимых для удовлетворения ежедневных нужд. Миндаль широко используются для изготовления кондитерских изделий. Есть масса рецептов печенья, тортов и карамельных начинок, в которых присутствует этот орех. Из сладкого миндаля также получают пищевое миндальное масло. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественный, экологически безопасный и вкусный миндаль можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '24.50', 'D 25-50мм (в диапазоне)', 'Бокс/сетка 1, 1.5 кг.', 'При -18 °С 12 месяцев.', '../gretskiy/uploads/uploads/image/product/almonds.png', 0, '2021-03-01'),
(10, 'Обжаренные фисташки', 4, 'Фисташки', 'В фисташках содержится много растительного белка и клетчатки...', 'В фисташках содержится много растительного белка и клетчатки, а также калий и витамин К. Да, фисташки — это не самое доступное лакомство. Но вы его заслуживаете. Особенно фисташки от “Gretskiy”. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественные, экологически безопасные грецкие орехи можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '37.50', 'D 18-32мм (в диапазоне)', 'Бокс/сетка 0.5, 1 кг.', 'При 5-10 °С 3 месяца', '../gretskiy/uploads/uploads/image/product/fistashki.png', 1, '2021-03-01'),
(11, 'Очищенные Фисташки', 4, 'Фисташки', 'В фисташках содержится много растительного белка и клетчатки...', 'В фисташках содержится много растительного белка и клетчатки, а также калий и витамин К. Да, фисташки — это не самое доступное лакомство. Но вы его заслуживаете. Особенно фисташки от “Gretskiy”. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественные, экологически безопасные грецкие орехи можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '37.50', 'D 18-32мм (в диапазоне)', 'Бокс/сетка 0.5, 1 кг.', 'При 5-10 °С 3 месяца', '../gretskiy/uploads/uploads/image/product/fistashki.png', 0, '2021-03-01'),
(12, 'Неочищенные Фисташки', 4, 'Фисташки', 'В фисташках содержится много растительного белка и клетчатки...', 'В фисташках содержится много растительного белка и клетчатки, а также калий и витамин К. Да, фисташки — это не самое доступное лакомство. Но вы его заслуживаете. Особенно фисташки от “Gretskiy”. Для посадки, уборки и хранения мы применяем инновационные технологии. Перевозки осуществляются бережно. Наши клиенты получают только качественные и полезные продукты, так как мы не используем вредные удобрения, которые негативно сказываются на здоровье. Качественные, экологически безопасные грецкие орехи можно купить, нажав кнопку «Заказать» или позвонив по телефону +375292323900.', '37.50', 'D 18-32мм (в диапазоне)', 'Бокс/сетка 0.5, 1 кг.', 'При 5-10 °С 3 месяца', '../gretskiy/uploads/uploads/image/product/fistashki.png', 0, '2021-03-01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
