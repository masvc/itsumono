<?php
session_start();

include('../funcs.php');

$id = $_SESSION['id'];
$star = $_POST['star'];
$comment = $_POST['comment'];
$tagid = $_POST['tagid'];

$pdo = db_connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$files = ['front_image', 'side_image', 'back_image', 'other_image'];
$uploadedFiles = [];
$allFilesUploaded = true; // すべてのファイルがアップロードされたかどうかを追跡

foreach ($files as $file) {
    if (isset($_FILES[$file]) && $_FILES[$file]['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../uploads/' . $id . '/';
        $uploadFile = $uploadDir . basename($_FILES[$file]['name']);

        if (move_uploaded_file($_FILES[$file]['tmp_name'], $uploadFile)) {
            $uploadedFiles[$file] = $uploadFile;
        } else {
            $allFilesUploaded = false; // アップロードに失敗した場合
            echo 'ファイルのアップロードに失敗しました。';
            exit();
        }
    } else {
        $uploadedFiles[$file] = null; // ファイルがアップロードされていない場合はnullを設定
    }
}

if ($allFilesUploaded) {
    echo 'すべてのファイルが正常にアップロードされました。';
}

try {
    $stmt = $pdo->prepare('INSERT INTO img_details (uid, front_image, side_image, back_image, other_image, star, comment, tagid, indate) VALUES (:uid, :front_image, :side_image, :back_image, :other_image, :star, :comment, :tagid, sysdate())');
    $stmt->bindValue(':uid', $id, PDO::PARAM_INT);
    $stmt->bindValue(':front_image', $uploadedFiles['front_image'], PDO::PARAM_STR);
    $stmt->bindValue(':side_image', $uploadedFiles['side_image'], PDO::PARAM_STR);
    $stmt->bindValue(':back_image', $uploadedFiles['back_image'], PDO::PARAM_STR);
    $stmt->bindValue(':other_image', $uploadedFiles['other_image'], PDO::PARAM_STR);
    $stmt->bindValue(':star', $star, PDO::PARAM_INT);
    $stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
    $stmt->bindValue(':tagid', $tagid, PDO::PARAM_INT);
    $stmt->execute();
} catch (PDOException $e) {
    echo 'データベースエラー: ' . $e->getMessage();
    exit();
}

$pdo = null;

// リダイレクトを追加
redirect('home.php');
