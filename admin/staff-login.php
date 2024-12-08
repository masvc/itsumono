<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/admin.css" />
  <title>Document</title>
</head>

<body>
  <section class="header">
    <h2>スタッフログイン</h2>
  </section>
  <section class="main">
    <h3>
      ※新規スタッフ、パスワードがわからなくなった人は各店舗責任者に連絡してください。
    </h3>
    <h4>BIYOUSHITSU 原宿店 責任者：吉田（090-1234-5678）</h4>
  </section>
  <section class="main">
    <form method="post" action="staff-login-action.php" class="login-form">
      <div>
        <div>
          <label for="sid">スタッフID：</label>
          <input
            type="text"
            id="sid"
            name="sid"
            placeholder="スタッフIDを入力してください" />
        </div>
        <div>
          <label for="spw">パスワード：</label>
          <input
            type="password"
            id="spw"
            name="spw"
            placeholder="パスワードを入力してください" />
        </div>
        <div class="login-btn">
          <button type="submit" value="login">ログイン</button>
        </div>
      </div>
    </form>
  </section>
  <footer>&copy; 2024 itsumono All rights reserved.</footer>
</body>

</html>