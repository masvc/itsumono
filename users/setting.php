<?php
session_start();
include('../funcs.php');
users_sschk();

$id = $_SESSION['id'];
$uname = $_SESSION['uname'];
$email = $_SESSION['email'];
$upw = $_SESSION['upw'];
$q1 = $_SESSION['q1'];
$q2 = $_SESSION['q2'];
$q3 = $_SESSION['q3'];

$pdo = db_connect();

$sql = 'SELECT * FROM users WHERE id = :id';
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
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/destyle.css" />
  <script src="../js/main.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Setting | itsumono</title>

  <style>
    .settingpage {
      background-color: #ffffff;
      /* padding: 50px 20px; */
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .setting-container {
      padding: 50px 20px 0px 20px;
    }

    .page-title {
      font-size: 24px;
      margin-bottom: 50px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
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

    .discription {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .discription h3 {
      font-size: 20px;
      color: #333;
      margin-bottom: 10px;
    }

    .discription h4 {
      font-size: 16px;
      color: #555;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .features {
      background-color: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin: 20px;
    }

    .features ul {
      list-style-type: none;
      padding: 0;
    }

    .features li {
      font-size: 14px;
      color: #666;
      margin-bottom: 10px;
      padding-left: 20px;
      position: relative;
    }

    .features li:before {
      content: "•";
      color: #ff6f61;
      position: absolute;
      left: 0;
      top: 0;
    }

    /* ラジオボタンのカスタムスタイル */
    input[type="radio"] {
      display: none;
      /* デフォルトのラジオボタンを非表示に */
    }

    input[type="radio"]+label {
      display: inline-block;
      padding: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 10px;
    }

    input[type="radio"]:checked+label {
      background-color: var(--secondary-color);
      color: white;
      border-color: var(--secondary-color);
    }

    .question-txt {
      font-size: 14px;
      color: var(--text-color);
      margin: 10px;
      text-align: start;
    }

    .question {
      margin: 15px;
      text-align: start;
    }

    .back-button {
      font-size: 14px;
      color: var(--text-color);
      margin: 10px;
      border-bottom: 1px solid var(--text-color);
    }
  </style>
</head>

<body>
  <?php include('../inc/header.php'); ?>

  <main class="settingpage">
    <div class="setting-container">
      <div class="page-title">
        <h2>登録情報の変更はこちらで</h2>
      </div>

      <section class="discription">
        <form method="POST" action="setting-update.php">
          <input type="text" placeholder="ユーザーネーム" name="uname" value="<?= h($value['uname']); ?>" />
          <input type="email" placeholder="メールアドレス" name="email" value="<?= h($value['email']); ?>" />
          <input type="password" placeholder="パスワード" name="upw" value="<?= h($value['upw']); ?>" />

          <div>
            <p class="question-txt">
              ※施術についてのアンケートにご協力ください。
            </p>
          </div>
          <div class="question">
            <p class="question-txt">① 美容師と話すことが好きですか？</p>
            <input type="radio" id="yes1" name="q1" value="1" <?= $value['q1'] == '1' ? 'checked' : ''; ?> />
            <label for="yes1">はい</label>
            <input type="radio" id="no1" name="q1" value="0" <?= $value['q1'] == '0' ? 'checked' : ''; ?> />
            <label for="no1">いいえ</label>
          </div>
          <div class="question">
            <p class="question-txt">② 雑誌やスマホを見ながら受けたいですか？</p>
            <input type="radio" id="yes2" name="q2" value="1" <?= $value['q2'] == '1' ? 'checked' : ''; ?> />
            <label for="yes2">はい</label>
            <input type="radio" id="no2" name="q2" value="0" <?= $value['q2'] == '0' ? 'checked' : ''; ?> />
            <label for="no2">いいえ</label>
          </div>
          <div class="question">
            <p class="question-txt">③ 美容院ではゆっくりと過ごしたいですか？</p>
            <input type="radio" id="yes3" name="q3" value="1" <?= $value['q3'] == '1' ? 'checked' : ''; ?> />
            <label for="yes3">はい</label>
            <input type="radio" id="no3" name="q3" value="0" <?= $value['q3'] == '0' ? 'checked' : ''; ?> />
            <label for="no3">いいえ</label>
          </div>
          <div class="button-container">
            <button type="submit">更新</button>
            <button type="button" onclick="location.href='home.php'">
              <p class="back-button">戻る</p>
            </button>
          </div>
        </form>
      </section>
    </div>
    <?php include('../inc/control-nav.php'); ?>
  </main>
</body>

</html>