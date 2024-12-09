<?php
session_start();

$email = $_POST['email'];
$upw = $_POST['upw'];

include('../funcs.php');
$pdo = db_connect();

$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND life_flg = 1');
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    sql_error($stmt);
}

$val = $stmt->fetch();

$pw = password_verify($upw, $val['upw']);

if ($pw && $val) {
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["id"] = $val['id'];
    $_SESSION["uname"] = $val['uname'];
    $_SESSION["email"] = $val['email'];
    $_SESSION["q1"] = $val['q1'];
    $_SESSION["q2"] = $val['q2'];
    $_SESSION["q3"] = $val['q3'];
    $_SESSION["indate"] = $val['indate'];

    redirect('home.php');
} else {
    $_SESSION["error_msg"] = "※IDまたはパスワードが間違えています。ログインしなおしてください。";
    redirect('login.php');
}

exit();
