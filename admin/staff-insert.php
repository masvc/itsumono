<?php

// POSTデータを取得
$sid = $_POST['sid'];
$spw = $_POST["spw"];
$role_flg = $_POST["role_flg"];

// DB接続 XammpなのでrootでOK
try {
    $pdo = new PDO('mysql:dbname=itsumono;host=localhost;charset=utf8', 'root', '');
} catch (PDOException $e) {
    exit('DB_ConnectError:' . $e->getMessage());
}

// データ登録SQL作成
$sql = 'INSERT INTO staff (sid, spw, role_flg, life_flg, indate) VALUES (:sid, :spw, :role_flg, 1, sysdate())';
$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':sid', $sid, PDO::PARAM_STR);
$stmt->bindValue(':spw', $spw, PDO::PARAM_STR);
$stmt->bindValue(':role_flg', $role_flg, PDO::PARAM_INT);

// 実行
$status = $stmt->execute(); //実行結果(ture or falses)を$statusに格納

// データ登録処理後
if ($status == false) {
    $error = $stmt->errorInfo();
    exit('SQL_Error:' . $error[2]);
}

// リダイレクト
header('Location: staff-register.php');
exit();
