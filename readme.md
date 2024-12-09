# ① アプリ名

「itsumono」 〜あなたのいつもをもっと快適に〜

## ② 課題内容（どんな作品か）

- 自身のミッションである「体験価値の向上に寄与する」を達成するために、美容院データ（髪型）に特化した写真クラウドを作成しました。
- 自分の髪型データをクラウドで保存し、そのデータを美容師にも共有することで、「お互いの当たり前」がすれ違う事を防ぎ、より快適なコミュニケーションを促進します。
- 「いつもの感じで」、「前回よりも短く」といったコミュニケーションがやりやすくなる事を目指しました。

## ③ アプリのデプロイ URL

デプロイしている場合は URL を記入（任意）

ユーザー：スマホ推奨
https://aamaa.jp/itsumono/

ADMIN：PC想定
https://aamaa.jp/itsumono/admin/staff-login.php

## ④ アプリのログイン用 ID または Password（ある場合）

ユーザー

- ID: yoshida@test.com
- PW: test

ADMIN

- ID: yoshida
- PW: test

## ⑤ 工夫した点・こだわった点

- [db-seiri.md](db-seiri.md) や [display-seiri.md](display-seiri.md)
  で事前に整理することで、複数人での作業でも大丈夫になるような進め方を意識し、どこで何をやればいいか分かりやすくした。
- [story.md](story.md) でコンセプトを整理して、少人数だがユーザーのヒアリングも実施してから、サービスを作成した。

- 計５つのテーブルデータを作成したので、かなりこんがらがった。統合に関しても最大４つのテーブルをしたのが大変でした。途中 var_dump でデータを一つずつ見るのを複数回繰り返すレベルでエラー対応の大変さを学べました。 -　今回約１週間で作成したので、git を細かくコミットして、仮に誰かがコードを見てもわかるようにしたかったが、なかなか慣れていなかったので、粒度が荒くなった。数を重ねて行きたい。
- 画面デザインが多いので、php のファイルも html の状態で Golive 使ってデザインと概ねの画面を作ってから php のファイルにして作成した。
- 画像のアップロードにおいて、uploads フォルダ内にユーザーごとのフォルダを作成し、その中に画像を保存するようにして分かりやすくした。

## ⑥ 難しかった点・次回トライしたいこと（又は機能）

- 複数データベースの組み合わせは、事前にデータを整理しておくことが大切でした。
- 複数の画像をアップロードできるようにするところが複雑で時間がかかりました。
- タグデータの実装が時間少し足りなかったため、今回は見送りました。次回以降タイミング合えば、実装したいです。

## ⑦ フリー項目（感想、シェアしたいこと等なんでも）

# ファイル構造

```
.
├── admin
│   ├── staff-customer-details.php
│   ├── staff-customer.php
│   ├── staff-delete.php
│   ├── staff-insert.php
│   ├── staff-kanri.php
│   ├── staff-login-action.php
│   ├── staff-login.php
│   ├── staff-logout.php
│   ├── staff-pw-hash.php
│   ├── staff-register.php
│   ├── staff-top.php
│   ├── staff-update-action.php
│   └── staff-update.php
├── css
│   ├── admin.css
│   ├── destyle.css
│   └── style.css
├── db-backup
│   └── itsumono.sql
├── dummy-data
│   ├── img_details.csv
│   ├── reservation-sample.csv
│   ├── staff-sample.csv
│   ├── tags-sample.csv
│   └── users-sample.csv
├── funcs.php
├── img
│   ├── add.png
│   ├── home.png
│   ├── icon.png
│   ├── logout.png
│   ├── setting.png
│   ├── staff-favicon.png
│   ├── star.png
│   └── talk.png
├── inc
│   ├── control-nav.php
│   └── header.php
├── index.html
├── js
│   └── main.js
├── md
│   ├── db-seiri.md
│   ├── display-seiri.md
│   ├── presentation.md
│   ├── story.md
│   └── userhearing.md
├── readme.md
├── uploads
│   ├── 1
│   │   ├── back1.jpeg
│   │   ├── back2.jpeg
│   │   ├── front1.jpeg
│   │   ├── front2.jpeg
│   │   ├── side1.jpeg
│   │   └── side2.jpeg
│   ├── 10
│   │   ├── back1.jpeg
│   │   ├── back2.jpeg
│   │   ├── front1.jpeg
│   │   ├── front2.jpeg
│   │   ├── side1.jpeg
│   │   └── side2.jpeg
│   ├── 11
│   │   ├── back1.jpeg
│   │   ├── back2.jpeg
│   │   ├── back3.jpeg
│   │   ├── front1.jpeg
│   │   ├── front2.jpeg
│   │   ├── front3.jpeg
│   │   ├── side1.jpeg
│   │   ├── side2.jpeg
│   │   └── side3.jpeg
│   ├── 2
│   │   ├── back1.jpeg
│   │   ├── back2.jpeg
│   │   ├── front1.jpeg
│   │   ├── front2.jpeg
│   │   ├── side1.jpeg
│   │   └── side2.jpeg
│   ├── 3
│   │   ├── back1.jpeg
│   │   ├── back2.jpeg
│   │   ├── front1.jpeg
│   │   ├── front2.jpeg
│   │   ├── side1.jpeg
│   │   └── side2.jpeg
│   ├── 4
│   │   ├── back1.jpeg
│   │   ├── back2.jpeg
│   │   ├── front1.jpeg
│   │   ├── front2.jpeg
│   │   ├── side1.jpeg
│   │   └── side2.jpeg
│   ├── 5
│   │   ├── back1.jpeg
│   │   ├── back2.jpeg
│   │   ├── front1.jpeg
│   │   ├── front2.jpeg
│   │   ├── side1.jpeg
│   │   └── side2.jpeg
│   ├── 6
│   │   ├── back1.jpeg
│   │   ├── back2.jpeg
│   │   ├── front1.jpeg
│   │   ├── front2.jpeg
│   │   ├── side1.jpeg
│   │   └── side2.jpeg
│   ├── 7
│   │   ├── back1.jpeg
│   │   ├── back2.jpeg
│   │   ├── front1.jpeg
│   │   ├── front2.jpeg
│   │   ├── side1.jpeg
│   │   └── side2.jpeg
│   ├── 8
│   │   ├── back1.jpeg
│   │   ├── back2.jpeg
│   │   ├── front1.jpeg
│   │   ├── front2.jpeg
│   │   ├── side1.jpeg
│   │   └── side2.jpeg
│   └── 9
│       ├── back1.jpeg
│       ├── back2.jpeg
│       ├── front1.jpeg
│       ├── front2.jpeg
│       ├── side1.jpeg
│       └── side2.jpeg
└── users
    ├── add-insert.php
    ├── add.php
    ├── detail.php
    ├── home.php
    ├── insert.php
    ├── login-action.php
    ├── login.php
    ├── logout.php
    ├── register.php
    ├── setting-update.php
    └── setting.php

22 directories, 121 files
```

色の参考：
https://saruwakakun.com/design/gallery/palette

雪のアニメーション：
https://animate-club.com/background/snow/

写真の EXIF データから日時を読み取る方法：
https://syncer.jp/php-exif-read-data

アイコン：
https://icooon-mono.com/

画像のアップロード：
https://webukatu.com/wordpress/blog/20969/

複数画像のアップロード：
https://qiita.com/satorunooshie/items/f9ff5a9c3ece45b5a6ce
