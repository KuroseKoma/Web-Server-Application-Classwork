-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-03-23 08:52:47
-- 服务器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `book_week2`
--

-- --------------------------------------------------------

--
-- 表的结构 `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book` text NOT NULL,
  `author` text NOT NULL,
  `format` text NOT NULL,
  `price` float NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `purchaseLink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `books`
--

INSERT INTO `books` (`id`, `book`, `author`, `format`, `price`, `publisher`, `detail`, `purchaseLink`) VALUES
(1, 'The Memory Police', 'Yoko Ogawa', 'Kindle Edition', 6.99, 'Vintage Digital', 'Shortlisted for the International Booker Prize 2020, an enthralling Orwellian novel about the terrors of state surveillance from one of Japan\'s greatest writers.<br> \'Beautiful... Haunting\' Sunday Times<br>\'A dreamlike story of dystopia\' Jia Tolentino', 'https://www.amazon.co.uk/Memory-Police-Yoko-Ogawa/dp/1784700444/ref=sr_1_1?dchild=1&keywords=The+Memory+Police&qid=1616483737&sr=8-1'),
(2, 'Night Music: The Sunday Times bestseller full of warmth and heart', 'Jojo Moyes', 'Kindle Edition', 4.99, 'Hodder & Stoughton', 'The dark and romantic novel by Jojo Moyes, internationally bestselling author of Me Before You and the new bestseller The Giver of Stars.<br>\'Warm, engaging and acutely observed.\' - Woman and Home<br>Isabel Delancey has always taken her gifted life for granted. But when her husband dies suddenly, leaving her with a mountain of debt, she and her two children are forced to abandon their home and move to a crumbling pile in the country.<br>With the house falling down around them, and the last of her savings fast disappearing, Isabel turns to her neighbours, not knowing that her mere presence there has stirred up long-standing obsessions.<br>As she fights to make her house a home, passions and lives collide. Isabel will discover an instinct for survival she never knew she had - and that a heart can play a new song . . .<br>\'A skilful blend of emotional intensity and satisfyingly drawn characters\' - Marie Claire', 'https://www.amazon.co.uk/gp/product/B002V091CK?storeType=ebooks&pf_rd_t=40901&pd_rd_i=B002V091CK&pf_rd_m=A3P5ROKL5A1OLE&pageType=STOREFRONT&pf_rd_p=5419cd53-6624-4532-ab09-ba8568d9d24e&pf_rd_r=2W24B9CN7YJ7XZJ0C1QX&pd_rd_wg=bildA&pf_rd_s=merchandised-search-4&ref_=dbs_f_r_shv_ts_1e20bfac-204d-447d-a4af-0d811e967a9e_2&pd_rd_w=snguE&pf_rd_i=362167031&pd_rd_r=e88e2a3b-c3d5-4b05-a6dd-6c45f3d1916b'),
(3, 'Ruthless Women: The Sunday Times', 'Melanie Blake', 'Kindle Edition', 6.49, 'Head of Zeus', 'The new Queen of the bonkbuster\' THE TIMES<br>\'Glitz, glamour and ambition... perfect\' WOMAN & HOME', 'https://www.amazon.co.uk/gp/product/B089C2HZ1D?storeType=ebooks&pf_rd_t=40901&pd_rd_i=B089C2HZ1D&pf_rd_m=A3P5ROKL5A1OLE&pageType=STOREFRONT&pf_rd_p=5419cd53-6624-4532-ab09-ba8568d9d24e&pf_rd_r=2W24B9CN7YJ7XZJ0C1QX&pd_rd_wg=bildA&pf_rd_s=merchandised-search-4&ref_=dbs_f_r_shv_ts_1e20bfac-204d-447d-a4af-0d811e967a9e_4&pd_rd_w=snguE&pf_rd_i=362167031&pd_rd_r=e88e2a3b-c3d5-4b05-a6dd-6c45f3d1916b'),
(4, 'Beeswing: Fairport, Folk Rock and Finding My Voice, 1967?C75', 'Richard Thompson', 'Kindle Edition', 5.03, 'Faber & Faber', 'The memoir of international music icon Richard Thompson, co-founder of the legendary folk rock group Fairport Convention.', 'https://www.amazon.co.uk/gp/product/B08L5P9891?storeType=ebooks&pf_rd_t=40901&pd_rd_i=B08L5P9891&pf_rd_m=A3P5ROKL5A1OLE&pageType=STOREFRONT&pf_rd_p=4d7b711a-39d2-497f-b2fd-407d173a7d36&pf_rd_r=2W24B9CN7YJ7XZJ0C1QX&pd_rd_wg=bildA&pf_rd_s=merchandised-search-4&ref_=dbs_f_r_shv_nr_1e20bfac-204d-447d-a4af-0d811e967a9e_1&pd_rd_w=wtG9M&pf_rd_i=362167031&pd_rd_r=e88e2a3b-c3d5-4b05-a6dd-6c45f3d1916b'),
(5, 'The Old Wives\' Tale illustrate', 'Arnold Bennett', 'Kindle Edition', 2.15, 'Zaffre', 'The Old Wives\' Tale is a novel by English author Arnold Bennett; first published in 1908. Inspired by an old lady that Bennett saw in a cafe, and wondering how her life had been when she was younger, The Old Wives\' Tale is the story of the Baines sisters, shy, retiring Constance, and defiant, romantic Sophia. The novel traces their lives from childhood in their father\'s drapery shop in Bursley, England, through their married lives, to the modern industrial age, when they are reunited as old women.', 'https://www.amazon.co.uk/gp/product/B08YNRP64J?storeType=ebooks&pf_rd_t=40901&pd_rd_i=B08YNRP64J&pf_rd_m=A3P5ROKL5A1OLE&pageType=STOREFRONT&pf_rd_p=4d7b711a-39d2-497f-b2fd-407d173a7d36&pf_rd_r=V8TX4W75KJ1AXHCZN5VB&pd_rd_wg=7K3C6&pf_rd_s=merchandised-search-4&ref_=dbs_f_r_shv_nr_1e20bfac-204d-447d-a4af-0d811e967a9e_2&pd_rd_w=mkOi3&pf_rd_i=362167031&pd_rd_r=4af1860b-a31e-4940-a7e6-653d4a099b52#detailBullets_feature_div'),
(6, 'Small Pleasures', 'Clare Chambers', 'Kindle Edition', 7.99, 'Weidenfeld & Nicolson', 'Longlisted for the Women??s Prize for Fiction 2021<br>A WORD-OF-MOUTH HIT\' Evening Standard', 'https://www.amazon.co.uk/gp/product/B07S2S82S7?storeType=ebooks&pf_rd_t=40901&pd_rd_i=B07S2S82S7&pf_rd_m=A3P5ROKL5A1OLE&pageType=STOREFRONT&pf_rd_p=5419cd53-6624-4532-ab09-ba8568d9d24e&pf_rd_r=2W24B9CN7YJ7XZJ0C1QX&pd_rd_wg=bildA&pf_rd_s=merchandised-search-4&ref_=dbs_f_r_shv_ts_1e20bfac-204d-447d-a4af-0d811e967a9e_0&pd_rd_w=snguE&pf_rd_i=362167031&pd_rd_r=e88e2a3b-c3d5-4b05-a6dd-6c45f3d1916b'),
(7, 'The Architecture of Happiness', 'Alain de Botton', 'Kindle Edition', 0.99, 'Penguin', 'Bestselling author Alain de Botton has written about love, travel, status and how philosophy can console us. Now he turns his attention to one of our most intense but often hidden love affairs: with our houses and their furnishings. He asks: What makes a house truly beautiful?Why are many new houses so ugly?Why do we argue so bitterly about sofas and pictures - and can differences of taste ever be satisfactorily resolved?Will minimalism make us happier than ornaments?', ''),
(8, 'The Power of Discipline: How to Use Self Control and Mental Toughness to Achieve Your Goals', 'Daniel Walter ', 'Kindle Edition', 22.21, 'Independently', 'Have you spent weeks, months, or even years trying to achieve your goals but keep failing?', 'https://www.amazon.co.uk/gp/product/B086RZNHCS?storeType=ebooks&pf_rd_t=40901&pd_rd_i=B086RZNHCS&pf_rd_m=A3P5ROKL5A1OLE&pageType=STOREFRONT&pf_rd_p=5419cd53-6624-4532-ab09-ba8568d9d24e&pf_rd_r=2W24B9CN7YJ7XZJ0C1QX&pd_rd_wg=bildA&pf_rd_s=merchandised-search-4&ref_=dbs_f_r_shv_ts_1e20bfac-204d-447d-a4af-0d811e967a9e_12&pd_rd_w=snguE&pf_rd_i=362167031&pd_rd_r=e88e2a3b-c3d5-4b05-a6dd-6c45f3d1916b'),
(9, 'Murder on the Levels (The Exham-on-Sea Murder Mysteries Book 2)', 'Frances Evesham', 'Kindle Edition', 8.23, 'Boldwood Books', 'When a group of cyclists, all customers at the bakery in small town Exham on Sea, are poisoned, suspicion falls on the shop itself, and Libby??s food.', 'https://www.amazon.co.uk/gp/product/B0858X1BN8?pf_rd_m=A3P5ROKL5A1OLE&storeType=ebooks&pf_rd_p=1e20bfac-204d-447d-a4af-0d811e967a9e&pf_rd_r=2W24B9CN7YJ7XZJ0C1QX&pf_rd_s=merchandised-search-4&pf_rd_t=40901&ref_=dbs_f_r_shv_ts_1e20bfac-204d-447d-a4af-0d811e967a9e_25&pf_rd_i=362167031'),
(10, 'Pride and Prejudice', 'Jane Austen', 'Kindle Edition', 5.94, 'Big Cheese Books', 'Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language. Jane Austen called this brilliant work ??her own darling child?? and its vivacious heroine, Elizabeth Bennet, ??as delightful a creature as ever appeared in print.?? The romantic clash between the opinionated Elizabeth and her proud beau, Mr. Darcy, is a splendid performance of civilized sparring. And Jane Austen??s radiant wit sparkles as her characters dance a delicate quadrille of flirtation and intrigue, making this book the most superb comedy of manners of Regency England.', 'https://www.amazon.co.uk/gp/product/B076X7QJFS?pf_rd_m=A3P5ROKL5A1OLE&storeType=ebooks&pf_rd_p=1e20bfac-204d-447d-a4af-0d811e967a9e&pf_rd_r=2W24B9CN7YJ7XZJ0C1QX&pf_rd_s=merchandised-search-4&pf_rd_t=40901&ref_=dbs_f_r_shv_ts_1e20bfac-204d-447d-a4af-0d811e967a9e_38&pf_rd_i=362167031');

--
-- 转储表的索引
--

--
-- 表的索引 `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
