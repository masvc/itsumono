<?php
session_start();

include('../funcs.php');
sschk();

$id = $_SESSION['id'];
$pdo = db_connect();

// staffテーブルとreservationテーブルとusersテーブルを結合してデータを取得
$sql = 'SELECT 
    s.id as staff_id, 
    s.sid as staff_name, 
    s.role_flg,
    r.id as reservation_id,
    r.uid as user_id,
    r.sid as reservation_sid,
    r.reserve_date,
    r.staff_memo,
    u.id as user_id, 
    u.uname,
    u.email, 
    u.q1,
    u.q2,
    u.q3,
    u.indate as user_registerdate
FROM 
    staff s
JOIN
    reservation r ON s.id = r.sid
JOIN 
    users u ON r.uid = u.id
WHERE 
    r.sid = :reservation_sid
ORDER BY 
    r.reserve_date DESC';

// クエリの実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':reservation_sid', $id, PDO::PARAM_INT);
$status = $stmt->execute();
if (!$status) {
  sql_error($stmt);
}

$v = [];
if ($status) {
  $v = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/admin.css" />
  <link rel="icon" href="../img/staff-favicon.png" />
  <title>お客様情報管理/一覧</title>
  <style>
    .reservation-list-container {
      display: flex;
      flex-direction: column;
      gap: 10px;
      height: 600px;
      overflow-y: auto;
    }

    .reservation-list {
      border: 1px solid #000;
      padding: 10px;
      margin-bottom: 10px;
    }

    img {
      width: 200px;
      height: auto;
    }

    .detail-button {
      padding: 5px 20px;
      border: none;
      cursor: pointer;
      background-color: #007bff;
      color: #fff;
    }
  </style>
</head>

<body>
  <section class="header">
    <h1>お客様情報管理/一覧</h1>
    <label for="staff-id"> </label>
  </section>
  <section class="main">
    <h2>担当のお客様情報（ID : <?= h($v[0]['staff_id']); ?> <?= h($v[0]['staff_name']); ?>）</h2>
    <div>
      <h3>予約情報一覧</h3>
      <div class="reservation-list-container">
        <?php foreach ($v as $value): ?>
          <div class="reservation-list">
            予約日時：<?= h($value['reserve_date']); ?><br>
            スタッフメモ: <?= h($value['staff_memo']); ?><br>
            お客様ID：<?= h($value['user_id']); ?><br>
            お客様名：<?= h($value['uname']); ?><br>
            メールアドレス：<?= h($value['email']); ?><br>
            Q1. 美容師と話すことが好きですか？: <?= h($value['q1'] == 1 ? 'はい' : 'いいえ'); ?><br>
            Q2. 雑誌やスマホを見ながら受けたいですか？: <?= h($value['q2'] == 1 ? 'はい' : 'いいえ'); ?><br>
            Q3. 美容院ではゆっくりと過ごしたいですか？: <?= h($value['q3'] == 1 ? 'はい' : 'いいえ'); ?><br>
            <button class="detail-button" onclick="location.href='staff-customer-details.php?reservation_id=<?= h($value['reservation_id']); ?>'">詳細</button>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="footer">
    <button onclick="location.href='staff-top.php'">トップ画面に戻る</button>
    <button onclick="location.href='staff-logout.php'">ログアウト</button>
  </section>
  <footer>&copy; 2024 itsumono All rights reserved.</footer>
</body>

</html>