<?php
session_start();
include('../funcs.php');
sschk();
$pdo = db_connect();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/admin.css" />
  <link rel="icon" href="../img/staff-favicon.png" />
  <title>スタッフ専用ページ</title>
</head>

<body>

  <section class="header">
    <h1>スタッフ専用ページ</h1>
    <p>ログイン中：
      <?php echo h($_SESSION['sid']); ?>さん
      <?php
      if ($_SESSION['role_flg'] == 0) {
        echo '';
      } else if ($_SESSION['role_flg'] == 1) {
        echo "(" . '責任者' . ")";
      }; ?></p>
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