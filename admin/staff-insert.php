<?php
include('../funcs.php');
// POSTデータを取得
$sid = $_POST['sid'];
$spw = $_POST["spw"];
$role_flg = $_POST["role_flg"];
$spw_hash = password_hash($spw, PASSWORD_DEFAULT); // ハッシュ化

// DB接続 XammpなのでrootでOK
$pdo = db_connect();

// データ登録SQL作成
$sql = 'INSERT INTO staff (sid, spw, role_flg, life_flg, indate) VALUES (:sid, :spw, :role_flg, 1, sysdate())';
$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':sid', $sid, PDO::PARAM_STR);
$stmt->bindValue(':spw', $spw_hash, PDO::PARAM_STR);
$stmt->bindValue(':role_flg', $role_flg, PDO::PARAM_INT);

// 実行
$status = $stmt->execute(); //実行結果(ture or falses)を$statusに格納

// データ登録処理後
if ($status == false) {
    sql_error($stmt);
}

// リダイレクト
redirect('staff-kanri.php');
