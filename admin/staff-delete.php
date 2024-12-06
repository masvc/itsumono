<?php
$id = $_GET['id'];

include('../funcs.php');
$pdo = db_connect();

$sql = 'DELETE FROM staff WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    sql_error($stmt);
} else {
    redirect('staff-kanri.php');
}
