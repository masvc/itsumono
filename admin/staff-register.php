<?php
session_start();
include('../funcs.php');
sschk();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/admin.css" />
  <link rel="icon" href="../img/staff-favicon.png" />
  <title>スタッフ新規登録</title>

  <style>
    .role-flg-label {
      text-align: center;
      display: flex;
      align-items: center;
      background-color: #f0f0f0;
      border-radius: 5px;
    }

    .role-flg-text {
      width: 100px;
      padding: 5px;
    }
  </style>
</head>

<body>
  <section class="header">
    <h2>スタッフ新規登録</h2>
  </section>
  <section class="main">
    <h3>店舗責任者は、新規スタッフの入社日に渡せるように用意すること。</h3>
    <h4>
      ※スタッフIDは、スタッフの苗字をローマ字で登録してください。ログイン用のIDとなります。
    </h4>
    <h4>ex. 吉田 太郎 → yoshida</h4>
  </section>
  <section class="main">
    <form method="post" action="staff-insert.php" class="login-form">
      <div>
        <div>
          <label for="sid">スタッフID：</label>
          <input
            type="text"
            id="sid"
            name="sid"
            required
            placeholder="ローマ字、苗字のみ、ex. yoshida" />
        </div>
        <div>
          <label for="spw">パスワード：</label>
          <input
            type="password"
            id="spw"
            name="spw"
            required
            placeholder="初期はtestで、本人が変更するのを推奨。" />
        </div>
        <div class="role-flg">
          <label for="role">権限：</label>
          <br />
          <label class="role-flg-label" for="role">
            <p class="role-flg-text">責任者</p>
            <input type="radio" id="role" name="role_flg" value="admin" required />
          </label>
          <br />
          <label class="role-flg-label" for="role">
            <p class="role-flg-text">スタッフ</p>
            <input type="radio" id="role" name="role_flg" value="staff" required checked />
          </label>
        </div>
        <div class="login-btn">
          <button type="submit">新規登録</button>
          <button type="button" onclick="location.href='staff-kanri.php'">戻る</button>
        </div>
      </div>
    </form>
  </section>
  <section class="footer">
    <button onclick="location.href='staff-top.php'">トップ画面に戻る</button>
    <button onclick="location.href='staff-logout.php'">ログアウト</button>
  </section>
  <footer>&copy; 2024 itsumono All rights reserved.</footer>
</body>

</html>