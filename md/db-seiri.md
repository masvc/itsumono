# Admin 側：

## DB 名：staff

id: スタッフ ID int 12 A.I
sid: セッション ID varchar 10
spw: スタッフ用パスワード varchar 10
role_flg: ロールフラグ tinyint 1
life_flg: ライフフラグ tinyint 1
indate: 登録日時 datetime ※スタッフ情報の変更があったときにある方が良さそう

[staff-sample.csv](./itsumono/data/staff-sample.csv)

## DB 名：customer
