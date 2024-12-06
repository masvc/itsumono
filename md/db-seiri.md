# Admin 側：

## DB 名：staff

id: スタッフ ID int 12 A.I
sid: セッション ID varchar 64
spw: スタッフ用パスワード varchar 64
role_flg: ロールフラグ tinyint 1
life_flg: ライフフラグ tinyint 1
indate: 登録日時 datetime ※スタッフ情報の変更があったときにある方が良さそう

[staff-sample.csv](./itsumono/data/staff-sample.csv)

## DB 名：users

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
