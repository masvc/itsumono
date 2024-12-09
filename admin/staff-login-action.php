<?php
session_start();

$sid = $_POST['sid'];
$spw = $_POST['spw'];

include('../funcs.php');
$pdo = db_connect();

$stmt = $pdo->prepare('SELECT * FROM staff WHERE sid = :sid AND life_flg = 1'); // life_flg = 1 がアクティブスタッフ
$stmt->bindValue(':sid', $sid, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    sql_error($stmt);
}

$val = $stmt->fetch();

$pw = password_verify($spw, $val['spw']);

if ($pw && $val) {
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["role_flg"] = $val['role_flg'];
    $_SESSION["sid"] = $val['sid'];
    $_SESSION["id"] = $val['id'];
    redirect('staff-top.php');
} else {
    $_SESSION["error_msg"] = "※IDまたはパスワードが間違えています。ログインしなおしてください。";
    redirect('staff-login.php');
}

exit();
