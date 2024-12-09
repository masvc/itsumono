<?php

include('../funcs.php');

$uname = $_POST['uname'];
$email = $_POST['email'];
$upw = $_POST['upw'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$upw_hash = password_hash($upw, PASSWORD_DEFAULT);

$pdo = db_connect();

$sql = 'INSERT INTO users (uname, email, upw, q1, q2, q3, life_flg, indate) VALUES (:uname, :email, :upw, :q1, :q2, :q3, 1, sysdate())';
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':uname', $uname, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':upw', $upw_hash, PDO::PARAM_STR);
$stmt->bindValue(':q1', $q1, PDO::PARAM_INT);
$stmt->bindValue(':q2', $q2, PDO::PARAM_INT);
$stmt->bindValue(':q3', $q3, PDO::PARAM_INT);

$status = $stmt->execute();

if ($status == false) {
    sql_error($stmt);
}

redirect('home.php');
