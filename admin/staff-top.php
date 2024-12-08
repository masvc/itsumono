<?php

session_start();

include('../funcs.php');

sschk();

$pdo = db_conn();



?>

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
    <h1>スタッフ専用ページ</h1>
  </section>
  <section class="main">
    <h2>管理画面</h2>
    <div>
      <a href="staff-kanri.php">
        <p>スタッフ情報管理/一覧</p>
      </a>
    </div>
    <div>
      <a href="staff-customer.php">
        <p>お客様情報管理/一覧</p>
      </a>
    </div>
  </section>
  <section class="footer">
    <!-- <button onclick="location.href='staff-top.html'">トップ画面に戻る</button> -->
    <button onclick="location.href='staff-logout.php'">ログアウト</button>
  </section>
  <footer>&copy; 2024 itsumono All rights reserved.</footer>
</body>

</html>