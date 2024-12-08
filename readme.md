ミッション：体験価値の向上に寄与する

# ① 課題名

美容院でーた（髪型）に特化した写真クラウド

## ② 課題内容（どんな作品か）

- 〇〇〇〇〇〇〇〇
- 〇〇〇〇〇〇〇〇

## ③ アプリのデプロイ URL

デプロイしている場合は URL を記入（任意）

## ④ アプリのログイン用 ID または Password（ある場合）

- ID: 〇〇〇〇〇〇〇〇
- PW: 〇〇〇〇〇〇〇〇

## ⑤ 工夫した点・こだわった点

- 〇〇〇〇〇〇〇〇
- 〇〇〇〇〇〇〇〇
- 〇〇〇〇〇〇〇〇

staff テーブルと reservation テーブルと users テーブルと img_details テーブルを結合してデータを取得
４つのテーブル結合は、訳わかんなくてデバッグで全部 Var_dump でデータを見てやりました。データを全て見るのを 3 回くらい繰り返してやりました。

複数人でやってもわかるように、フォルダ分けしたり、git を細かくコミットした。つもり

画面デザインが多いので、php のファイルも html の状態で Golive 使ってデザインと概ねの画面を作ってから作った。
作った順序
火曜日：コンセプト
水曜日：ユーザーヒヤリング
木曜日：html と css でメインの画面の作成
金曜日：作った画面を元に display 整理、form の整理、DB の整理してから MYSQL で DB の作成、ダミーデータの作成と挿入、一部画像データの挿入、
土曜日：php のファイルの作成と家族優先
日曜日：家族優先＋スタッフ側完成
月曜日：

画像をあげるときに

- 例: `/uploads/users/{user_id}/`
  となるようにした

DB 作成において、スプレッドシートで整理した上でまとめた。
https://docs.google.com/spreadsheets/d/1bLKDo5W-z-HETPwMNLKm8k_q92GeYIrKzwE8ZLqB_Bs/edit?usp=sharing

## ⑥ 難しかった点・次回トライしたいこと（又は機能）

- 〇〇〇〇〇〇〇〇
- 〇〇〇〇〇〇〇〇
- 〇〇〇〇〇〇〇〇

## ⑦ フリー項目（感想、シェアしたいこと等なんでも）

- [感想]
- [参考記事]
  - 1. [URL をここに記入]
  - 2. [URL をここに記入]

色の参考：
https://saruwakakun.com/design/gallery/palette

雪のアニメーション：
https://animate-club.com/background/snow/

写真の EXIF データから日時を読み取る方法：
https://syncer.jp/php-exif-read-data

アイコン：
https://icooon-mono.com/
