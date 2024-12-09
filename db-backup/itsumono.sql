-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 12 月 09 日 18:59
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
  `indate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `img_details`
--

INSERT INTO `img_details` (`id`, `uid`, `front_image`, `side_image`, `back_image`, `other_image`, `star`, `comment`, `tagid`, `indate`) VALUES
(1, 1, '../uploads/1/front1.jpeg', '../uploads/1/side1.jpeg', '../uploads/1/back1.jpeg', NULL, 3, '初めてのアップロード', 1, '2023-10-11 00:00:00'),
(2, 1, '../uploads/1/front2.jpeg', '../uploads/1/side2.jpeg', '../uploads/1/back2.jpeg', NULL, 4, '2回目のアップロード', 2, '2023-10-12 00:00:00'),
(3, 2, '../uploads/2/front1.jpeg', '../uploads/2/side1.jpeg', '../uploads/2/back1.jpeg', NULL, 5, '新しいスタイル', 3, '2023-10-13 00:00:00'),
(4, 2, '../uploads/2/front2.jpeg', '../uploads/2/side2.jpeg', '../uploads/2/back2.jpeg', NULL, 2, 'スタイルの変更', 4, '2023-10-14 00:00:00'),
(5, 3, '../uploads/3/front1.jpeg', '../uploads/3/side1.jpeg', '../uploads/3/back1.jpeg', NULL, 1, 'シンプルなデザイン', 5, '2023-10-15 00:00:00'),
(6, 3, '../uploads/3/front2.jpeg', '../uploads/3/side2.jpeg', '../uploads/3/back2.jpeg', NULL, 3, 'デザインの更新', 6, '2023-10-16 00:00:00'),
(7, 4, '../uploads/4/front1.jpeg', '../uploads/4/side1.jpeg', '../uploads/4/back1.jpeg', NULL, 4, 'カジュアルスタイル', 7, '2023-10-17 00:00:00'),
(8, 4, '../uploads/4/front2.jpeg', '../uploads/4/side2.jpeg', '../uploads/4/back2.jpeg', NULL, 5, 'フォーマルスタイル', 8, '2023-10-18 00:00:00'),
(9, 5, '../uploads/5/front1.jpeg', '../uploads/5/side1.jpeg', '../uploads/5/back1.jpeg', NULL, 3, '新しい試み', 9, '2023-10-19 00:00:00'),
(10, 5, '../uploads/5/front2.jpeg', '../uploads/5/side2.jpeg', '../uploads/5/back2.jpeg', NULL, 4, '試みの続き', 10, '2023-10-20 00:00:00'),
(11, 6, '../uploads/6/front1.jpeg', '../uploads/6/side1.jpeg', '../uploads/6/back1.jpeg', NULL, 5, 'クラシックスタイル', 11, '2023-10-21 00:00:00'),
(12, 6, '../uploads/6/front2.jpeg', '../uploads/6/side2.jpeg', '../uploads/6/back2.jpeg', NULL, 2, 'モダンスタイル', 12, '2023-10-22 00:00:00'),
(13, 7, '../uploads/7/front1.jpeg', '../uploads/7/side1.jpeg', '../uploads/7/back1.jpeg', NULL, 1, 'シンプルでエレガント', 13, '2023-10-23 00:00:00'),
(14, 7, '../uploads/7/front2.jpeg', '../uploads/7/side2.jpeg', '../uploads/7/back2.jpeg', NULL, 3, 'エレガントな更新', 14, '2023-10-24 00:00:00'),
(15, 8, '../uploads/8/front1.jpeg', '../uploads/8/side1.jpeg', '../uploads/8/back1.jpeg', NULL, 4, 'スポーティスタイル', 15, '2023-10-25 00:00:00'),
(16, 8, '../uploads/8/front2.jpeg', '../uploads/8/side2.jpeg', '../uploads/8/back2.jpeg', NULL, 5, 'スポーティな更新', 16, '2023-10-26 00:00:00'),
(17, 9, '../uploads/9/front1.jpeg', '../uploads/9/side1.jpeg', '../uploads/9/back1.jpeg', NULL, 3, 'ビジネスカジュアル', 17, '2023-10-27 00:00:00'),
(18, 9, '../uploads/9/front2.jpeg', '../uploads/9/side2.jpeg', '../uploads/9/back2.jpeg', NULL, 4, 'ビジネススタイル', 18, '2023-10-28 00:00:00'),
(19, 10, '../uploads/10/front1.jpeg', '../uploads/10/side1.jpeg', '../uploads/10/back1.jpeg', NULL, 5, 'フォーマルな装い', 19, '2023-10-29 00:00:00'),
(20, 10, '../uploads/10/front2.jpeg', '../uploads/10/side2.jpeg', '../uploads/10/back2.jpeg', NULL, 2, 'フォーマルな更新', 20, '2023-10-30 00:00:00'),
(21, 11, '../uploads/11/front1.jpeg', '../uploads/11/side1.jpeg', '../uploads/11/back1.jpeg', NULL, 4, 'カジュアルな感じがGOOD\r\n次回相談してみたい髪型！', 21, '2024-11-30 00:00:00'),
(22, 11, '../uploads/11/front2.jpeg', '../uploads/11/side2.jpeg', '../uploads/11/back2.jpeg', NULL, 3, '今と似た感じの髪型。デフォルトとして保存しておく。', 22, '2023-11-12 00:00:00'),
(23, 11, '../uploads/11/front3.jpeg', '../uploads/11/side3.jpeg', '../uploads/11/back3.jpeg', NULL, 4, 'おしゃれでかっこいい感じ。前髪が足りないかもしれないから相談してみたい。', 23, '2023-11-18 00:00:00'),
(46, 11, '../uploads/11/front.jpeg', '../uploads/11/side.jpeg', NULL, '../uploads/11/other.jpeg', 5, '髪の毛が伸びてきたらパーマもいいかも。今は足りない、、', NULL, '2024-12-10 01:54:02'),
(48, 11, '../uploads/11/front5.jpeg', '../uploads/11/side5.jpeg', '../uploads/11/back5.jpeg', NULL, 2, 'モデルさんがかっこよくて、自分だと似合わないかも。だけど、気になるので保存。', NULL, '2024-11-20 01:56:42');

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
(23, 11, 1, '2024-12-12 14:00:00', 'パーマとトリートメント'),
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
  `spw` varchar(255) NOT NULL,
  `role_flg` tinyint(1) NOT NULL,
  `life_flg` tinyint(1) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `staff`
--

INSERT INTO `staff` (`id`, `sid`, `spw`, `role_flg`, `life_flg`, `indate`) VALUES
(1, 'Yoshida', '$2y$10$stJ7tAajMz9ynCK1Wa1uvuJkq9/8klyBJLYYilekN63npv2ogasAW', 1, 1, '2024-12-08 22:49:55'),
(2, 'Tanaka', '$2y$10$ZzTgXnbcSZ.MpgWaBEQB9unQkvVPesDEAuENND6gD.aVDwRE2l1C6', 0, 1, '2024-10-02 11:00:00'),
(3, 'Sato', '$2y$10$LqnlTWo50YBSbmn1euRYfechN2aNN8T0860FTYtTZ5sHGmkKhdVp6', 0, 0, '2024-10-03 12:00:00'),
(4, 'Takahashi', '$2y$10$tkC1hbYX9zCDk.MzI7lAsO/kF2NJeepHIdvEh/gvFYn/U/LopRwnu', 0, 1, '2024-11-04 13:00:00'),
(5, 'Kobayashi', '$2y$10$4brNOz7b4njOhYfkkZOcMu285qCLBee5jkZx4Pl4i8RLZJS7JZd4e', 0, 1, '2024-11-05 14:00:00'),
(6, 'Nakamura', '$2y$10$7TYBtnEJMVXYtFk55ZBBF.zvZRAJGOdXHFDymhjUUTs2/8XqlzHz2', 0, 0, '2024-11-06 15:00:00'),
(7, 'Yamamoto', '$2y$10$fdDMBqk.JYl/UU1/zEYw1uzNkhINTPOQqfGpZg85wl38CKXvRLvPq', 0, 1, '2024-11-07 16:00:00'),
(8, 'Inoue', '$2y$10$unQFcQ5hQoF6pGJfkNoCOeFXEFxOYKrnG8DnI006UybOSMjZh9P4u', 0, 1, '2024-12-08 17:00:00'),
(9, 'Kimura', '$2y$10$CMMWf8uBDSBFX6QFi1vPhOgFcvER5kboeb7ASaNhJqx7yPpQpg56G', 0, 0, '2024-12-09 18:00:00'),
(10, 'Shimizu', '$2y$10$5r5qF/.3NYfPiASqwxB16esMRpFDLR4eC3CcHB2KqmlZ6.7C4j3s.', 0, 1, '2024-12-10 19:00:00');

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
  `upw` varchar(255) NOT NULL,
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
(1, '山田太郎', 'yamada@example.com', '$2y$10$WzcyNnLG1Vjuc7o6vjeFt.Ku5O.IiD8u6apGqN5nI10wO/AEDFI1C', 1, 0, 1, 1, '2023-10-01 10:00:00'),
(2, '鈴木花子', 'suzuki@example.com', '$2y$10$epC4qQKXbHm3juiWMFh2x.hmILzdN0wb32UTc6lNUQFP2d2aFnq4C', 0, 1, 0, 1, '2023-10-02 11:00:00'),
(3, '佐藤次郎', 'sato@example.com', '$2y$10$nKv/l.z31Cz9k6tPTKe3zO6ZzycRUSCqTdjNY090Zfcoesfvv5.AS', 1, 1, 1, 0, '2023-10-03 12:00:00'),
(4, '田中美咲', 'tanaka@example.com', '$2y$10$9yTjbf3vsP4KeirO//W5GuYTmXz64uu1TWi8ho0R1gdALZrwBR0NS', 0, 0, 1, 1, '2023-10-04 13:00:00'),
(5, '高橋健', 'takahashi@example.com', '$2y$10$W.81xvRF1mAmt/2i0kV/PO1klpJMMeIjlkHnNX6jw2eHxqq3nGWem', 1, 1, 0, 1, '2023-10-05 14:00:00'),
(6, '伊藤舞', 'ito@example.com', '$2y$10$.Om1LVvyhoAmzMxskloqr.QmSuUJZaKQTRNAgNPIEb1TlS2O2Vyoy', 0, 1, 1, 0, '2023-10-06 15:00:00'),
(7, '渡辺大輔', 'watanabe@example.com', '$2y$10$lHTVN4He5uxOM6gpZJJnQOGaS4.r6NsXfnkV54qa9Q/IS4oxTgqyG', 1, 0, 0, 1, '2023-10-07 16:00:00'),
(8, '中村優子', 'nakamura@example.com', '$2y$10$pnliS4cFz3vrtiW9lUkbjO.aLTwgOoCZ6Ptm2GjzuEHZzsOmVfXPi', 0, 1, 1, 1, '2023-10-08 17:00:00'),
(9, '小林直樹', 'kobayashi@example.com', '$2y$10$a8AakmS/KB6jP/ShCEmFsuEKaBq6fcIXjxQ59a69VQ2XQLjNkEENm', 1, 1, 0, 0, '2023-10-09 18:00:00'),
(10, '加藤愛', 'katou@example.com', '$2y$10$Ue555aKfqNuo3PfdzkFiGueXAfZklxPO57ol7Sa6yB7N4fjVjIf9i', 0, 0, 1, 1, '2023-10-10 19:00:00'),
(11, '吉田 テス男', 'yoshida@test.com', '$2y$10$YgU/nweB7h3y7aSniu5zYupYhj6/Q1XOxX07djkHt3oeYhBeBj1u.', 1, 1, 1, 1, '2024-12-09 21:13:23');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- テーブルの AUTO_INCREMENT `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- テーブルの AUTO_INCREMENT `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- テーブルの AUTO_INCREMENT `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
