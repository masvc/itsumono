<!-- ダミーデータのPWをハッシュ化してデータベースに更新 -->

<?php

include('../funcs.php'); // データベース接続用の関数を含むファイル
$pdo = db_connect(); // データベースに接続

// スタッフデータを取得
$stmt = $pdo->query('SELECT id, spw FROM staff');
$staffData = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($staffData as $staff) {
    $id = $staff['id'];
    $plainPassword = $staff['spw'];

    // パスワードをハッシュ化
    $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

    // ハッシュ化されたパスワードをデータベースに更新
    $updateStmt = $pdo->prepare('UPDATE staff SET spw = :spw WHERE id = :id');
    $updateStmt->bindValue(':spw', $hashedPassword, PDO::PARAM_STR);
    $updateStmt->bindValue(':id', $id, PDO::PARAM_INT);
    $updateStatus = $updateStmt->execute();

    if ($updateStatus === false) {
        echo "ID {$id} のパスワード更新に失敗しました。\n";
    }
}

echo "パスワードをハッシュ化してデータベースを更新しました。\n";
