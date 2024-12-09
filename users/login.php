<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/destyle.css" />
  <script src="../js/main.js" defer></script>
  <title>Login | itsumono</title>
</head>
<style>
  .loginpage {
    background-color: #ffffff;
    padding: 50px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin: 150px 20px 0 20px;
  }

  .page-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 50px;
  }

  @media screen and (min-width: 768px) {
    .loginpage {
      margin: 200px auto;
      max-width: 500px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .page-title {
      font-size: 28px;
    }

    input[type="email"],
    input[type="password"] {
      width: 80%;
    }

    button[type="submit"] {
      width: 80%;
    }
  }

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

  .back-button {
    font-size: 14px;
    color: var(--text-color);
    margin: 10px;
    border-bottom: 1px solid var(--text-color);
  }

  .error-message {
    color: red;
    font-weight: bold;
    margin: 10px;
    font-size: 16px;
  }
</style>

<body class="login">
  <main class="loginpage">
    <div class="page-title">
      <h2>ログインはこちらで</h2>
      <?php
      session_start();
      if (isset($_SESSION["error_msg"])) {
        echo '<p class="error-message">' . $_SESSION["error_msg"] . '</p>';
        unset($_SESSION["error_msg"]);
      }
      ?>
    </div>

    <form method="post" action="login-action.php" name="form">
      <input type="email" name="email" placeholder="メールアドレス" required />
      <input type="password" name="upw" placeholder="パスワード" required />
      <button type="submit">ログイン</button>
      <button type="button" onclick="location.href='../index.html'">
        <p class="back-button">戻る</p>
      </button>
    </form>
  </main>
</body>

</html>