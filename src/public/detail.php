<?php
// データベース接続
$host = 'localhost';
$dbname = 'your_database';
$username = 'your_username';
$password = 'your_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch (PDOException $e) {
    die("データベース接続エラー: " . $e->getMessage());
}

// IDの取得
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // データベースから詳細情報を取得
    $stmt = $pdo->prepare("SELECT id, name, email, gender, type, created_at FROM inquiries WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $inquiry = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($inquiry) {
        echo "<h3>問い合わせ詳細</h3>";
        echo "ID: " . htmlspecialchars($inquiry['id']) . "<br>";
        echo "名前: " . htmlspecialchars($inquiry['name']) . "<br>";
        echo "メールアドレス: " . htmlspecialchars($inquiry['email']) . "<br>";
        echo "性別: " . htmlspecialchars($inquiry['gender']) . "<br>";
        echo "お問い合わせ種類: " . htmlspecialchars($inquiry['type']) . "<br>";
        echo "登録日: " . htmlspecialchars($inquiry['created_at']) . "<br>";
    } else {
        echo "データが見つかりませんでした。";
    }
} else {
    echo "無効なIDが指定されました。";
}
?>
