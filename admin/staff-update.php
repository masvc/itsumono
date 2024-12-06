<?php
$id = $_GET['id'];

include('../funcs.php');
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
  <title>Document</title>
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
        <div>
          <label for="role">管理者権限：</label>
          <input type="radio" id="role" name="role_flg" value="1" <?php if ($value['role_flg'] == 1) echo 'checked'; ?> />
          <label for="role">管理者</label>
          <input type="radio" id="role" name="role_flg" value="0" <?php if ($value['role_flg'] == 0) echo 'checked'; ?> />
          <label for="role">スタッフ</label>
        </div>
        <div>
          <input type="hidden" name="id" value="<?= h($value['id']); ?>">
        </div>
        <div class="login-btn">
          <button type="submit">更新</button>
        </div>
      </div>
    </form>
  </section>
  <footer>&copy; 2024 itsumono All rights reserved.</footer>
</body>

</html>