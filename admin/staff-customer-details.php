<?php
session_start();

include('../funcs.php');
sschk();

$reservation_id = intval($_GET['reservation_id']); //数字に変換
$pdo = db_connect();

// reservationテーブルとimg_detailsテーブルを結合してデータを取得
$sql = 'SELECT 
    r.id as reservation_id,
    r.uid as user_id,
    u.uname,
    u.email,
    r.sid as staff_id,  
    r.reserve_date,
    r.staff_memo,
    i.id as detail_id,
    i.uid as detail_uid,
    i.front_image,
    i.side_image,
    i.back_image,
    i.other_image,  
    i.star,
    i.comment,
    i.tagid,
    i.indate
FROM 
    reservation r
JOIN
    img_details i ON r.uid = i.uid
JOIN
    users u ON r.uid = u.id
WHERE 
    r.id = :reservation_id
    ORDER BY 
    r.reserve_date DESC, i.indate DESC';

// クエリの実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':reservation_id', $reservation_id, PDO::PARAM_INT);
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
    <title>お客様詳細情報一覧</title>
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

        .back-button {
            margin-top: 10px;

        }
    </style>
</head>

<body>
    <section class="header">
        <h1>お客様情報管理/一覧</h1>
        <label for="staff-id"> </label>
    </section>
    <section class="main">
        <h2> <?= h($v[0]["uname"]); ?>様（お客様ID: <?= h($v[0]['user_id']); ?>）の詳細情報</h2>
        <div>
            <h3>投稿情報一覧</h3>
            <div class="reservation-list-container">
                <?php foreach ($v as $value): ?>
                    <div class="reservation-list">
                        投稿日時: <?= h($value['indate']); ?><br>
                        フロント画像:<br>
                        <?php if (!empty($value['front_image'])): ?>
                            <img src="<?= h($value['front_image']); ?>" alt="フロント画像"><br>
                        <?php else: ?>
                            null<br>
                        <?php endif; ?>
                        サイド画像:<br>
                        <?php if (!empty($value['side_image'])): ?>
                            <img src="<?= h($value['side_image']); ?>" alt="サイド画像"><br>
                        <?php else: ?>
                            null<br>
                        <?php endif; ?>
                        バック画像:<br>
                        <?php if (!empty($value['back_image'])): ?>
                            <img src="<?= h($value['back_image']); ?>" alt="バック画像"><br>
                        <?php else: ?>
                            null<br>
                        <?php endif; ?>
                        その他画像:<br>
                        <?php if (!empty($value['other_image'])): ?>
                            <img src="<?= h($value['other_image']); ?>" alt="その他画像"><br>
                        <?php else: ?>
                            null<br>
                        <?php endif; ?>
                        ユーザー評価: <?= h($value['star']); ?><br>
                        ユーザーコメント: <?= h($value['comment']); ?><br>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <button class="back-button" onclick="location.href='staff-customer.php'">一覧に戻る</button>
    </section>
    <section class="footer">
        <button onclick="location.href='staff-top.php'">トップ画面に戻る</button>
        <button onclick="location.href='staff-logout.php'">ログアウト</button>
    </section>
    <footer>&copy; 2024 itsumono All rights reserved.</footer>
</body>

</html>