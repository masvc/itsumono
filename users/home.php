<?php
session_start();
include('../funcs.php');
users_sschk();
$pdo = db_connect();

$id = $_SESSION['id'];

$sql = 'SELECT * FROM img_details WHERE uid = :id ORDER BY indate DESC'; // 投稿日時の降順で取得
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
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
  <link rel="stylesheet" href="../css/destyle.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="icon" href="../img/icon.png" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <title>HOME | itsumono</title>

  <style>
    .img-board {
      margin: 10px 20px;
      font-size: 18px;
      padding: 5px;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      overflow-y: auto;
      max-height: 500px;
      box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
    }

    .detail-link {
      margin: 10px 5px;
      font-weight: bold;
      box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
      padding: 5px;
    }

    .img-board-item-img {
      display: flex;
    }

    .user-info {
      margin: 10px 20px;
      font-size: 18px;
      font-weight: bold;
      text-align: right;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .user-info p {
      border-bottom: 2px solid var(--text-color);
      padding: 5px;
    }

    @media screen and (max-width: 768px) {
      .user-info {
        flex-direction: column;
        align-items: flex-end;
      }

      .user-info p {
        margin: 10px;
      }

      .user-info .sort-order {
        margin: 10px;
      }
    }

    .ymd {
      margin: 5px;
    }

    .star-rating {
      margin: 5px;
    }

    .star-img {
      width: 50px;
      height: auto;
      padding: 0;
      margin: 0;
    }

    .sort-order {
      font-size: 16px;
      margin: 10px 20px;
      font-weight: bold;
      border: 1px solid var(--text-color);
      border-radius: 5px;
      padding: 10px;
      background-color: var(--primary-color);
      color: white;
      cursor: pointer;
      text-align: center;
    }

    .sort-order:hover {
      background-color: var(--secondary-color);
      color: var(--text-color);
      border: 1px solid var(--text-color);
    }


    .detail-link-text-container {
      display: flex;
      justify-content: flex-end;
      margin: 10px 20px 5px 20px;
      padding: 5px;
      border-radius: 5px;
    }

    .detail-link-text {
      font-size: 12px;
      color: var(--text-color);
      text-align: right;
    }
  </style>
</head>

<body>
  <?php include('../inc/header.php'); ?>

  <section class="user-info">
    <p>ログイン中：<?php echo h($_SESSION['uname']); ?>さん</p>

    <select class="sort-order" id="sort-order">
      <option value="star-desc">評価が高い順</option>
      <option value="star-asc">評価が低い順</option>
      <option value="date-asc">投稿日時が古い順</option>
      <option value="date-desc">投稿日時が新しい順</option>
    </select>

  </section>

  <div class="detail-link-text-container">
    <p class="detail-link-text">※写真をクリックすると詳細ページが見られます。</p>
  </div>

  <section class="img-board">
    <div class="img-board-item" id="img-board-item">
      <?php foreach ($v as $value): ?>
        <div class="detail-link" data-star="<?= $value['star']; ?>">
          <div class="ymd"> <?= h(date('Y/m/d', strtotime($value['indate']))); ?></div>
          <div class="img-board-item-img" onclick="location.href='detail.php?id=<?= $value['id']; ?>'" style="cursor: pointer;">
            <img src="<?= $value['front_image']; ?>" alt="">
            <img src="<?= $value['side_image']; ?>" alt="">
            <img src="<?= $value['back_image']; ?>" alt="">
            <img src="<?= $value['other_image']; ?>" alt="">
          </div>
          <div class="star-rating">
            <div>
              <p>評価：</p>
              <?php for ($i = 0; $i < $value['star']; $i++): ?>
                <img class="star-img" src="../img/star.png" alt="star" />
              <?php endfor; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <?php include('../inc/control-nav.php'); ?>
  <script>
    $(document).ready(function() {
      $('#sort-order').change(function() {
        var order = $(this).val();
        sortImages(order);
      });

      function sortImages(order) {
        var $container = $('#img-board-item');
        var $items = $container.children('.detail-link').get();

        $items.sort(function(a, b) {
          if (order.includes('star')) {
            let starA = parseInt($(a).data('star'), 10);
            let starB = parseInt($(b).data('star'), 10);
            return order === 'star-desc' ? starB - starA : starA - starB;
          } else if (order.includes('date')) {
            let dateA = new Date($(a).find('.ymd').text());
            let dateB = new Date($(b).find('.ymd').text());
            return order === 'date-desc' ? dateB - dateA : dateA - dateB;
          }
        });

        $.each($items, function(index, item) {
          $container.append(item);
        });
      }
    });
  </script>
</body>

</html>