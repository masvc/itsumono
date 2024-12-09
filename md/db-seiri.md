# Admin 側：

## DB 名：staff（スタッフの情報管理）

id: スタッフ ID int 12 A.I
sid: セッション ID varchar 64
spw: スタッフ用パスワード varchar 64
role_flg: ロールフラグ tinyint 1
life_flg: ライフフラグ tinyint 1
indate: 登録日時 datetime ※スタッフ情報の変更があったときにある方が良さそう

[staff-sample.csv](./itsumono/data/staff-sample.csv)

## DB 名：users（ユーザーの情報管理）

id: ユーザー ID int 12 A.I
uname: ユーザー名 varchar 64
email: メールアドレス varchar 64
upw: パスワード varchar 64
q1: アンケート 1 tinyint 1
q2: アンケート 2 tinyint 1
q3: アンケート 3 tinyint 1
life_flg: ライフフラグ tinyint 1
indate: 登録日時 datetime

# アンケート参考：基本的に 1 がはい、0 がいいえ

Q1. 美容師と話すことが好きですか？
Q2. 雑誌やスマホを見ながら受けたいですか？
Q3. 美容院ではゆっくりと過ごしたいですか？

[users-sample.csv](./itsumono/data/users-sample.csv)

## DB 名：img_details（ユーザーの投稿した情報管理）

id: 詳細 ID int 12 A.I
uid: ユーザー ID int 12
front_image: 正面画像 varchar 256
side_image: 側面画像 varchar 256
back_image: 背面画像 varchar 256
other_image: その他画像 varchar 256
star: 評価(1~5) tinyint 5
comment: コメント varchar 256
tagid: タグ ID int 12 ※複数選択
ymd: 投稿日時 datetime

# ymd から各自表示のために取得する場合は以下の SQL で可能:

- YEAR(ymd) as year # 年を取得
- MONTH(ymd) as month # 月を取得
- DAY(ymd) as day # 日を取得

[img_detail-sample.csv](./itsumono/data/img_detail-sample.csv)

## タグの管理 DB 名　 tags：

tag_id: タグ ID int 12 A.I
tagname: タグ名 varchar 256

[tag-sample.csv](./itsumono/data/tag-sample.csv)

## DB 名：reservation（どのスタッフがどのユーザーに対してどの日時に予約をしたかの情報管理）

id: 予約 ID int 12 A.I
uid: ユーザー ID int 12
sid: スタッフ ID int 12
reserve_date: 予約日時 datetime
staff_memo: スタッフメモ varchar 256

[reservation-sample.csv](./itsumono/data/reservation-sample.csv)

# その他

スプレッドシート：https://docs.google.com/spreadsheets/d/1bLKDo5W-z-HETPwMNLKm8k_q92GeYIrKzwE8ZLqB_Bs/edit?gid=0#gid=0
