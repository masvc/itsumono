<?php
session_start();
include('../funcs.php');
users_sschk();

$id = $_GET['id'];

$pdo = db_connect();
$sql = 'SELECT * FROM img_details WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if (!$status) {
  sql_error($stmt);
}

$v = [];
if ($status) {
  $v = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/destyle.css" />
  <script src="../js/main.js" defer></script>
  <title>Detail | itsumono</title>
  <style>
    .ymd {
      padding: 30px 20px 10px 20px;
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .img-board {
      margin: 10px 20px;
      font-size: 18px;
      padding: 20px;
      justify-content: center;
      flex-wrap: wrap;
      overflow-y: auto;
      max-height: 600px;
      box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
    }

    .img-board-item-img {
      margin: 10px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .star {
      margin-bottom: 10px;
    }

    .tag {
      margin: 10px;
    }

    .comment {
      margin-bottom: 10px;
    }

    .star-rating {
      margin: 5px;
      font-weight: bold;
    }

    .star-img {
      width: 50px;
      height: auto;
      padding: 0;
      margin: 0;
    }


    .tag {
      font-weight: bold;
    }

    .comment-title {
      font-weight: bold;
      font-size: 18px;
      padding: 5px 0;
    }

    .comment-content {
      font-size: 16px;
      font-weight: normal;
      padding: 5px 0;

    }
  </style>
</head>

<body>
  <?php include('../inc/header.php'); ?>

  <main>
    <section class="img-board">
      <div>
        <div class="ymd"> <?= h(date('Y/m/d', strtotime($v['indate']))); ?></div>
      </div>
      <div class="img-board-item-img" style="cursor: pointer;">
        <img src="<?= $v['front_image']; ?>" alt="">
        <img src="<?= $v['side_image']; ?>" alt="">
        <img src="<?= $v['back_image']; ?>" alt="">
        <img src="<?= $v['other_image']; ?>" alt="">
      </div>
      <div class="star-rating">
        <div>
          <p>評価：</p>
          <?php for ($i = 0; $i < $v['star']; $i++): ?>
            <img class="star-img" src="../img/star.png" alt="star" />
          <?php endfor; ?>
        </div>
      </div>

      <div class="tag">#ロング #前髪</div>

      <?php if (!empty($v['comment'])): ?>
        <div class="comment">
          <p class="comment-title">comment：</p>
          <p class="comment-content"><?= h($v['comment']); ?></p>
        </div>
      <?php else: ?>
        <div class="comment">
          <p class="comment-title">comment：</p>
          <p class="comment-content">null</p>
        </div>
      <?php endif; ?>
    </section>

    <?php include('../inc/control-nav.php'); ?>
  </main>
</body>

</html>