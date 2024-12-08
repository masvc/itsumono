<?php
session_start();

$sid = $_POST['sid'];
$spw = $_POST['spw'];

include('../funcs.php');
$pdo = db_conn();

$stmt = $pdo->prepare('SELECT * FROM staff WHERE sid = :sid AND life_flg = 0'); // life_flg = 0 は退職したスタッフ
$stmt->bindValue(':sid', $sid, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    sql_error($stmt);
}

$val = $stmt->fetch();

$pw = password_verify($spw, $val['spw']);

if ($pw) {
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["role_flg"] = $val['role_flg'];
    redirect('staff-top.php');
} else {
    redirect('staff-login.php');
}

exit();
