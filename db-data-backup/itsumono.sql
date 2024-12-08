-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 12 月 08 日 11:25
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `itsumono`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `img_details`
--

CREATE TABLE `img_details` (
  `id` int(12) NOT NULL,
  `uid` int(12) DEFAULT NULL,
  `front_image` varchar(256) DEFAULT NULL,
  `side_image` varchar(256) DEFAULT NULL,
  `back_image` varchar(256) DEFAULT NULL,
  `other_image` varchar(256) DEFAULT NULL,
  `star` tinyint(5) DEFAULT NULL,
  `comment` varchar(256) DEFAULT NULL,
  `tagid` int(12) DEFAULT NULL,
  `ymd` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `img_details`
--

INSERT INTO `img_details` (`id`, `uid`, `front_image`, `side_image`, `back_image`, `other_image`, `star`, `comment`, `tagid`, `ymd`) VALUES
(1, 1, 'uploads/1/front.jpg', 'uploads/1/side.jpg', 'uploads/1/back.jpg', NULL, 3, '普通のスタイル', 1, '2024-12-06 21:27:37'),
(2, 2, 'uploads/2/front.jpg', 'uploads/2/side.jpg', 'uploads/2/back.jpg', NULL, 4, '良い感じです', 2, '2024-12-06 21:27:37'),
(3, 3, 'uploads/3/front.jpg', 'uploads/3/side.jpg', 'uploads/3/back.jpg', NULL, 5, '最高です！', 3, '2024-12-06 21:27:37');

-- --------------------------------------------------------

--
-- テーブルの構造 `reservation`
--

CREATE TABLE `reservation` (
  `id` int(12) NOT NULL,
  `uid` int(12) DEFAULT NULL,
  `sid` int(12) DEFAULT NULL,
  `reserve_date` datetime DEFAULT NULL,
  `staff_memo` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `reservation`
--

INSERT INTO `reservation` (`id`, `uid`, `sid`, `reserve_date`, `staff_memo`) VALUES
(1, 3, 7, '2024-10-01 09:00:00', '新規カットとカラー'),
(2, 5, 2, '2024-10-05 11:30:00', 'リタッチカラー'),
(3, 8, 4, '2024-10-10 14:00:00', 'パーマとトリートメント'),
(4, 2, 9, '2024-10-15 10:00:00', 'ショートカット'),
(5, 7, 1, '2024-10-20 13:30:00', 'ヘアセット（結婚式）'),
(6, 10, 3, '2024-10-25 16:00:00', '前髪カット'),
(7, 1, 6, '2024-10-30 09:30:00', 'メンズカット'),
(8, 4, 8, '2024-11-02 15:00:00', 'カラーとスタイリング'),
(9, 6, 5, '2024-11-05 12:00:00', 'ヘッドスパ'),
(10, 9, 10, '2024-11-10 17:00:00', 'スタイリングアドバイス'),
(11, 2, 3, '2024-11-12 09:00:00', '新規カット'),
(12, 7, 7, '2024-11-15 11:30:00', 'カラーとトリートメント'),
(13, 5, 1, '2024-11-18 14:00:00', 'パーマ'),
(14, 10, 4, '2024-11-20 10:00:00', 'ショートカット'),
(15, 3, 9, '2024-11-22 13:30:00', 'ヘアセット（パーティー）'),
(16, 8, 2, '2024-11-25 16:00:00', '前髪カット'),
(17, 6, 5, '2024-11-28 09:30:00', 'メンズカット'),
(18, 1, 8, '2024-12-01 15:00:00', 'カラーとスタイリング'),
(19, 4, 10, '2024-12-03 12:00:00', 'ヘッドスパ'),
(20, 9, 6, '2024-12-05 17:00:00', 'スタイリングアドバイス'),
(21, 5, 3, '2024-12-07 09:00:00', '新規カットとカラー'),
(22, 2, 7, '2024-12-10 11:30:00', 'リタッチカラー'),
(23, 10, 1, '2024-12-12 14:00:00', 'パーマとトリートメント'),
(24, 3, 4, '2024-12-15 10:00:00', 'ショートカット'),
(25, 7, 9, '2024-12-18 13:30:00', 'ヘアセット（結婚式）'),
(26, 8, 2, '2024-12-20 16:00:00', '前髪カット'),
(27, 1, 5, '2024-12-22 09:30:00', 'メンズカット'),
(28, 6, 8, '2024-12-25 15:00:00', 'カラーとスタイリング'),
(29, 4, 10, '2024-12-28 12:00:00', 'ヘッドスパ'),
(30, 9, 6, '2024-12-30 17:00:00', 'スタイリングアドバイス');

-- --------------------------------------------------------

--
-- テーブルの構造 `staff`
--

CREATE TABLE `staff` (
  `id` int(12) NOT NULL,
  `sid` varchar(64) NOT NULL,
  `spw` varchar(64) NOT NULL,
  `role_flg` tinyint(1) NOT NULL,
  `life_flg` tinyint(1) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `staff`
--

INSERT INTO `staff` (`id`, `sid`, `spw`, `role_flg`, `life_flg`, `indate`) VALUES
(1, 'Yoshida', 'test', 1, 1, '2024-10-01 10:00:00'),
(2, 'Tanaka', 'test', 0, 1, '2024-10-02 11:00:00'),
(3, 'Sato', 'test', 0, 0, '2024-10-03 12:00:00'),
(4, 'Takahashi', 'test', 0, 1, '2024-11-04 13:00:00'),
(5, 'Kobayashi', 'test', 0, 1, '2024-11-05 14:00:00'),
(6, 'Nakamura', 'test', 0, 0, '2024-11-06 15:00:00'),
(7, 'Yamamoto', 'test', 0, 1, '2024-11-07 16:00:00'),
(8, 'Inoue', 'test', 0, 1, '2024-12-08 17:00:00'),
(9, 'Kimura', 'test', 0, 0, '2024-12-09 18:00:00'),
(10, 'Shimizu', 'test', 0, 1, '2024-12-10 19:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(12) NOT NULL,
  `tagname` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `tags`
--

INSERT INTO `tags` (`tag_id`, `tagname`) VALUES
(1, 'カラー'),
(2, 'パーマ'),
(3, 'ショートカット'),
(4, '前髪'),
(5, 'ロングヘアー'),
(6, 'メッシュ'),
(7, 'ツーブロック'),
(8, '眉毛'),
(9, 'スタイリング'),
(10, 'トリートメント'),
(11, 'ヘアセット'),
(12, 'ボブ'),
(13, 'セミロング'),
(14, 'アップスタイル'),
(15, 'ウェーブ'),
(16, 'ストレート'),
(17, 'カール'),
(18, 'ナチュラル'),
(19, 'フェミニン'),
(20, 'クール'),
(21, 'エレガント'),
(22, 'カジュアル'),
(23, 'ポニーテール'),
(24, '編み込み'),
(25, 'ハイライト');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `uname` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `upw` varchar(64) NOT NULL,
  `q1` tinyint(1) NOT NULL,
  `q2` tinyint(1) NOT NULL,
  `q3` tinyint(1) NOT NULL,
  `life_flg` tinyint(1) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `upw`, `q1`, `q2`, `q3`, `life_flg`, `indate`) VALUES
(1, '山田太郎', 'yamada@example.com', 'test', 1, 0, 1, 1, '2023-10-01 10:00:00'),
(2, '鈴木花子', 'suzuki@example.com', 'test', 0, 1, 0, 1, '2023-10-02 11:00:00'),
(3, '佐藤次郎', 'sato@example.com', 'test', 1, 1, 1, 0, '2023-10-03 12:00:00'),
(4, '田中美咲', 'tanaka@example.com', 'test', 0, 0, 1, 1, '2023-10-04 13:00:00'),
(5, '高橋健', 'takahashi@example.com', 'test', 1, 1, 0, 1, '2023-10-05 14:00:00'),
(6, '伊藤舞', 'ito@example.com', 'test', 0, 1, 1, 0, '2023-10-06 15:00:00'),
(7, '渡辺大輔', 'watanabe@example.com', 'test', 1, 0, 0, 1, '2023-10-07 16:00:00'),
(8, '中村優子', 'nakamura@example.com', 'test', 0, 1, 1, 1, '2023-10-08 17:00:00'),
(9, '小林直樹', 'kobayashi@example.com', 'test', 1, 1, 0, 0, '2023-10-09 18:00:00'),
(10, '加藤愛', 'katou@example.com', 'test', 0, 0, 1, 1, '2023-10-10 19:00:00');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `img_details`
--
ALTER TABLE `img_details`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `img_details`
--
ALTER TABLE `img_details`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- テーブルの AUTO_INCREMENT `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- テーブルの AUTO_INCREMENT `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
