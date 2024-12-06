---
url
何の画面か：
画面での説明や特筆事項
フォームとDBの利用有無（カテゴリー）
---

# Customer 側：

## index

- **LP 画面**
- サービスのデザインページ。新規登録やログインへの遷移
- **フォーム**: なし

## register

- **新規登録画面**
- 機能の説明とユーザー登録用およびアンケートの入力フォーム
- **フォーム**: あり（id, uname,email, upw,q1,q2,q3,indate）

## login

- **ログイン画面**
- ログイン用フォーム
- **フォーム**: あり（id, email, upw）

## home

- **ホーム画面**
- ※ログインしていないと見れない
- ログインしている uid に紐づいているお客さんの情報を表示させる
- アップロードした画像の月別に Month ボタンを表示させる
- **フォーム**: なし

## detail

- **個々の画像詳細画面**
- ※ログインしていないと見れない
- アップロードした画像の詳細を表示させる。日時、img（最大４枚）,評価（星１〜5）、タグ、コメント（あれば）
- **フォーム**: なし

## add

- **画像アップロード画面**
- ※ログインしていないと見れない
- 画像アップロードフォーム
- **フォーム**: あり（id,img_front, img_back, img_side, img_other,star,comment,tag,indate）

## setting

- **ユーザー情報更新画面**
- ※ログインしていないと見れない
- ユーザー情報の更新フォーム
- **フォーム**: あり（id, uname,email, upw,q1,q2,q3,indate）

## logout

- **ログアウト画面**
- 画面なし。ログアウトの処理のみで index 画面にリダイレクト
- **フォーム**: なし

---

# Admin 側：

## staff-login

- **スタッフ用ログイン画面**
- スタッフは自分で新規登録手続きはしないで、責任者がデータベースに登録してくれるからログインのみ
- **フォーム**: あり（id, sid, spw）

## staff-top

- **スタッフ用の管理画面**
- ※ログインしていないと見れない
- 情報管理画面への遷移がある
- **フォーム**: なし

## staff-kanri

- **スタッフ管理ページ**
- ※ログインしていないと見れない
- スタッフ一覧表示と更新・削除ボタン、新規登録への遷移がある
- **フォーム**: なし

## staff-register

- **新規スタッフ登録ページ**
- ※ログインしていないと見れない
- **フォーム**: あり（id, sid, spw, role_flg, life_flg, indate）

## staff-update

- **スタッフ情報更新ページ**
- ※ログインしていないと見れない
- デザインなど構造は staff-register と同じ。いつの情報更新か知りたいので indate も
- **フォーム**: あり（id, sid, spw, role_flg）

## staff-delete

- **スタッフ情報の削除**
- ※ログインしていないと見れない
- staff-kanri のページで削除ボタンを押したら遷移し、本当に削除しますか？という内容
- **フォーム**: なし

## staff-customer

- **スタッフごとの担当しているお客様の情報が見られるページ**
- ※ログインしていないと見れない
- ログインしている sid に紐づいているお客さんを select で選んで情報を取得して表示させる。
- **フォーム**: なし

## staff-logout

- **管理画面からログアウト**
- 画面はなしで処理のみ
- **フォーム**: なし
