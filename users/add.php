<?php
session_start();
include('../funcs.php');
users_sschk();

$pdo = db_connect();

// tagsテーブルからデータを取得
$stmt = $pdo->prepare("SELECT tag_id, tagname FROM tags");
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/destyle.css" />
  <script src="../js/main.js" defer></script>
  <title>Add | itsumono</title>
  <style>
    .addpage {
      background-color: #ffffff;
      /* padding: 50px 20px; */
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .add-container {
      padding: 50px 20px 0px 20px;
    }

    .page-title {
      font-size: 24px;
      margin-bottom: 50px;
      font-weight: bold;
    }

    input[type="file"],
    select,
    textarea {
      width: 100%;
      padding: 15px;
      margin: 10px auto;
      border: 1px solid #ccc;
      border-radius: 4px;
      text-align: start;
    }

    button[type="submit"] {
      background-color: var(--secondary-color);
      color: white;
      padding: 15px;
      margin: 10px auto;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }


    .add-txt {
      text-align: start;
      margin: 5px;
      font-weight: bold;
    }

    .back-button {
      font-size: 14px;
      color: var(--text-color);
      margin: 10px;
      border-bottom: 1px solid var(--text-color);
    }

    .upload-message {
      color: green;
      font-size: 14px;
      text-decoration: underline;
      text-underline-offset: 4px;
      text-decoration-color: green;
      font-weight: bold;
      margin: 20px;
    }
  </style>
</head>

<body>
  <?php include('../inc/header.php'); ?>

  <main>
    <div class="addpage">
      <div class="add-container">
        <div class="page-title">
          <h2>写真の追加はこちらから</h2>
          <?php
          if (isset($_SESSION["upload_msg"])) {
            echo '<p class="upload-message">' . $_SESSION["upload_msg"] . '</p>';
            unset($_SESSION["upload_msg"]);
          }
          ?>
        </div>
        <form method="POST" action="add-insert.php" enctype="multipart/form-data">
          <p class="add-txt">フロント：</p>
          <input type="file" name="front_image" id="front_image" />
          <p class="add-txt">サイド：</p>
          <input type="file" name="side_image" id="side_image" />
          <p class="add-txt">バック：</p>
          <input type="file" name="back_image" id="back_image" />
          <p class="add-txt">その他：</p>
          <input type="file" name="other_image" id="other_image" />
          <p class="add-txt">評価（1~5）：</p>
          <select name="star">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <p class="add-txt">コメント：</p>
          <textarea name="comment" cols="30" rows="10"></textarea>

          <button type="submit" value="追加">追加</button>
          <button type="button" onclick="location.href='home.php'">
            <p class="back-button">戻る</p>
          </button>
        </form>
      </div>
      <?php include('../inc/control-nav.php'); ?>
    </div>
  </main>
</body>

</html>