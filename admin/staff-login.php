<!-- このページはSESSIONチェックつけない -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/admin.css" />
  <link rel="icon" href="../img/staff-favicon.png" />
  <title>スタッフログイン</title>
  <style>
    .error-message {
      color: red;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <section class="header">
    <h2>スタッフログイン</h2>
  </section>
  <section class="main">
    <?php
    session_start();
    if (isset($_SESSION["error_msg"])) {
      echo '<p class="error-message">' . $_SESSION["error_msg"] . '</p>';
      unset($_SESSION["error_msg"]);
    }
    ?>
    <h3>
      ※新規スタッフ、パスワードがわからなくなった人は各店舗責任者に連絡してください。
    </h3>
    <h4>BIYOUSHITSU 原宿店 責任者：吉田（090-1234-5678）</h4>
  </section>
  <section class="main">
    <form method="post" action="staff-login-action.php" class="login-form" name="loginForm">
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