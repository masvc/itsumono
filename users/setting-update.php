<?php
session_start();
include('../funcs.php');

$id = $_SESSION['id'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$upw = $_POST['upw'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];

$pdo = db_connect();

$sql = 'UPDATE users SET uname = :uname, email = :email, upw = :upw, q1 = :q1, q2 = :q2, q3 = :q3 WHERE id = :id';
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':uname', $uname, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':upw', $upw, PDO::PARAM_STR);
$stmt->bindValue(':q1', $q1, PDO::PARAM_STR);
$stmt->bindValue(':q2', $q2, PDO::PARAM_STR);
$stmt->bindValue(':q3', $q3, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute();

if ($status == false) {
    sql_error($stmt);
}

redirect('home.php');
