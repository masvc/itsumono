<?php
session_start();
include('../funcs.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/destyle.css" />
  <script src="../js/main.js" defer></script>
  <title>Register | itsumono</title>

  <style>
    .registerpage {
      background-color: #ffffff;
      padding: 50px 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
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
      margin: 10px 0;
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
  <main class="registerpage">
    <div class="page-title">
      <h2>新規登録はこちらで</h2>
    </div>

    <section class="discription">
      <div class="features">
        <h3>主な機能</h3>
        <ul>
          <li>
            ✨ 髪型の写真をカンタン保存（前後左右からの撮影など複数保存可）
          </li>
          <li>📅 いつ、どんなカットをしてもらったかを記録</li>
          <li>⭐️ お気に入りの髪型をマーク＆検索</li>
          <li>💬 美容師さんとスムーズなコミュニケーション</li>
          <li>📝 スタイリングのメモや評価も残せる</li>
        </ul>
      </div>

      <form method="post" action="insert.php">
        <input type="text" placeholder="ユーザーネーム" name="uname" />
        <input type="email" placeholder="メールアドレス" name="email" />
        <input type="password" placeholder="パスワード" name="upw" />

        <div>
          <p class="question-txt">
            ※施術についてのアンケートにご協力ください。
          </p>
        </div>
        <div class="question">
          <p class="question-txt">Q1. 美容師と話すことが好きですか？</p>
          <input type="radio" id="yes1" name="q1" value="yes" />
          <label for="yes1">はい</label>
          <input type="radio" id="no1" name="q1" value="no" />
          <label for="no1">いいえ</label>
        </div>
        <div class="question">
          <p class="question-txt">
            Q2. 雑誌やスマホを見ながら受けたいですか？
          </p>
          <input type="radio" id="yes2" name="q2" value="yes" />
          <label for="yes2">はい</label>
          <input type="radio" id="no2" name="q2" value="no" />
          <label for="no2">いいえ</label>
        </div>
        <div class="question">
          <p class="question-txt">
            Q3. 美容院ではゆっくりと過ごしたいですか？
          </p>
          <input type="radio" id="yes3" name="q3" value="yes" />
          <label for="yes3">はい</label>
          <input type="radio" id="no3" name="q3" value="no" />
          <label for="no3">いいえ</label>
        </div>
        <div class="button-container">
          <button type="submit">新規登録</button>
          <button type="button" onclick="location.href='../index.html'">
            <p class="back-button">戻る</p>
          </button>
        </div>
      </form>
    </section>
  </main>
</body>

</html>