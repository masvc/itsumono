<?php
include('../funcs.php');

$pdo = db_connect();

$sql = 'SELECT * FROM staff';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

$values = "";
if ($status == false) {
  sql_error($stmt);
}

$values = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/admin.css" />
  <title>スタッフ情報管理/一覧</title>
  <style>
    .staff-info-item {
      border: 1px solid #000;
      padding: 10px;
      margin: 10px;
    }

    .staff-info {
      max-height: 600px;
      overflow-y: auto;
    }
  </style>
</head>

<body>
  <section class="header">
    <h1>スタッフ情報管理/一覧</h1>
  </section>
  <section class="main">
    <h2>スタッフ情報</h2>
    <div class="staff-info">
      <?php foreach ($values as $v) { ?>
        <div class="staff-info-item">
          <h2>ID:<?= h($v['id']); ?></h2>
          <p>スタッフID:<?= h($v['sid']); ?></p>
          <p>パスワード:<?= h($v['spw']); ?></p>
          <p>入社日:<?= h($v['indate']); ?></p>
          <div>
            <a href="staff-update.php?id=<?= h($v['id']); ?>">更新</a>
            <a href="staff-delete.php?id=<?= h($v['id']); ?>">削除</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
  <section class="main">
    <button onclick="location.href='staff-register.php'">
      新規スタッフ情報登録
    </button>
  </section>
  <section class="footer">
    <button onclick="location.href='staff-top.html'">トップ画面に戻る</button>
    <button onclick="location.href='staff-logout.php'">ログアウト</button>
  </section>
  <footer>&copy; 2024 itsumono All rights reserved.</footer>
</body>

</html>