<?php
include('../funcs.php');

// POSTデータを取得
$sid = $_POST['sid'];
$spw = $_POST["spw"];
$role_flg = $_POST["role_flg"];
$id = $_POST["id"];

// DB接続 XammpなのでrootでOK
$pdo = db_connect();

// データ登録SQL作成
$sql = 'UPDATE staff SET sid = :sid, spw = :spw, role_flg = :role_flg, indate = sysdate() WHERE id = :id';
$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':sid', $sid, PDO::PARAM_STR);
$stmt->bindValue(':spw', $spw, PDO::PARAM_STR);
$stmt->bindValue(':role_flg', $role_flg, PDO::PARAM_INT);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

// 実行
$status = $stmt->execute(); //実行結果(ture or falses)を$statusに格納

// データ登録処理後
if ($status == false) {
    sql_error($stmt);
}

// リダイレクト
redirect('staff-kanri.php');
