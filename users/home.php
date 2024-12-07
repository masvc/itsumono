<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/destyle.css" />
    <link rel="icon" href="../img/icon.png" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>HOME | itsumono</title>

    <style>
      .calender {
        padding: 30px 20px 10px 20px;
        text-align: center;
      }

      .year {
        font-size: 24px;
        margin-bottom: 20px;
        font-weight: bold;
      }

      .month {
        margin: 10px;
        border-bottom: 1px solid var(--text-color);
        border-top: 1px solid var(--text-color);
        display: flex;
        justify-content: space-evenly;
      }

      .month-number {
        width: 100px;
        font-size: 20px;
        margin: 10px;
        background-color: var(--primary-color);
        padding: 10px;
        border-radius: 10px;
        color: white;
      }

      .img-board {
        margin: 10px 20px;
        font-size: 18px;
        padding: 20px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        overflow-y: auto;
        max-height: 500px;
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
      }

      .detail-link {
        margin: 10px;
        font-weight: bold;
      }

      .img-board-item-img {
        display: flex;
        margin: 10px;
      }
    </style>
  </head>
  <body>
    <header>
      <div><h1 class="logo">itsumono</h1></div>
    </header>

    <main>
      <section class="calender">
        <div class="year"><p>2024</p></div>
        <div class="month">
          <div class="month-number">12</div>
          <div class="month-number">11</div>
          <div class="month-number">10</div>
        </div>
      </section>

      <section class="img-board">
        <div class="img-board-item">
          <div class="detail-link">
            <div class="ymd">2024/12/10</div>
            <div class="img-board-item-img">
              <div class="img"><img src="../img/talk.png" alt="" /></div>
              <div class="img"><img src="../img/talk.png" alt="" /></div>
            </div>
          </div>
          <div class="detail-link">
            <div class="ymd">2024/12/10</div>
            <div class="img-board-item-img">
              <div class="img"><img src="../img/talk.png" alt="" /></div>
              <div class="img"><img src="../img/talk.png" alt="" /></div>
              <div class="img"><img src="../img/talk.png" alt="" /></div>
              <div class="img"><img src="../img/talk.png" alt="" /></div>
            </div>
          </div>
          <div class="detail-link">
            <div class="ymd">2024/12/10</div>
            <div class="img-board-item-img">
              <div class="img"><img src="../img/talk.png" alt="" /></div>
              <div class="img"><img src="../img/talk.png" alt="" /></div>
            </div>
          </div>
          <div class="detail-link">
            <div class="ymd">2024/12/10</div>
            <div class="img-board-item-img">
              <div class="img"><img src="../img/talk.png" alt="" /></div>
            </div>
          </div>
        </div>
      </section>

      <section class="control-nav">
        <button id="home-button" class="control-nav-button">
          <img class="control-nav-img" src="../img/home.png" alt="ホーム" />
        </button>
        <button id="add-button" class="control-nav-button">
          <img class="control-nav-img" src="../img/add.png" alt="追加" />
        </button>
        <button id="setting-button" class="control-nav-button">
          <img class="control-nav-img" src="../img/setting.png" alt="設定" />
        </button>
        <button id="logout-button" class="control-nav-button">
          <img
            class="control-nav-img"
            src="../img/logout.png"
            alt="ログアウト"
          />
        </button>
      </section>
    </main>
    <script>
      $(document).ready(function () {
        $(".detail-link").click(function () {
          window.location.href = "detail.html";
        });

        $("#home-button").click(function () {
          window.location.href = "home.html";
        });

        $("#add-button").click(function () {
          window.location.href = "add.html";
        });

        $("#setting-button").click(function () {
          window.location.href = "setting.html";
        });

        $("#logout-button").click(function () {
          // ログアウト処理をここに追加
          alert("ログアウトしました");

          window.location.href = "../index.html";
        });
      });
    </script>
  </body>
</html>
