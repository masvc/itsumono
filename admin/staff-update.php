<?php
session_start();
include('../funcs.php');
sschk();

$id = $_GET['id'];
$role_flg = $_GET['role_flg'];

$pdo = db_connect();

$sql = 'SELECT * FROM staff WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$value = "";
if ($status == false) {
  sql_error($stmt);
}

$value = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/admin.css" />
  <link rel="icon" href="../img/staff-favicon.png" />
  <title>スタッフ情報更新ページ</title>
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
    <h2>スタッフ情報更新</h2>
  </section>
  <section class="main">
    <h3>
      スタッフのパスワードなどは厳重に管理してください。何かあれば責任者まで。
    </h3>
    <h4>BIYOUSHITSU 原宿店 責任者：吉田（090-1234-5678）</h4>
  </section>
  <section class="main">
    <form method="POST" action="staff-update-action.php" class="login-form">
      <div>
        <div>
          <label for="sid">スタッフID：</label>
          <input
            type="text"
            id="sid"
            name="sid"
            placeholder="ローマ字、苗字のみ、ex. yoshida"
            value="<?= h($value['sid']); ?>" />
        </div>
        <div>
          <label for="spw">パスワード：</label>
          <input
            type="password"
            id="spw"
            name="spw"
            placeholder="初期はtestで、本人が変更するのを推奨。"
            value="<?= h($value['spw']); ?>" />
        </div>
        <div class="role-flg">
          <label for="role">権限：</label>
          <br />
          <label class="role-flg-label" for="role">
            <p class="role-flg-text">責任者</p>
            <input type="radio" id="role" name="role_flg" value="1" <?= $value['role_flg'] == '1' ? 'checked' : ''; ?> />
          </label>
          <br />
          <label class="role-flg-label" for="role">
            <p class="role-flg-text">スタッフ</p>
            <input type="radio" id="role" name="role_flg" value="0" <?= $value['role_flg'] == '0' ? 'checked' : ''; ?> />
          </label>
        </div>
        <div>
          <input type="hidden" name="id" value="<?= h($value['id']); ?>">
        </div>
        <div class="login-btn">
          <button type="submit">更新</button>
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