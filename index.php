<?php
$db = new PDO('sqlite:db.sqlite');
$db->exec("CREATE TABLE IF NOT EXISTS foods (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    expiry TEXT,
    area TEXT,
    created_at TEXT
)");

$foods = $db->query("SELECT * FROM foods ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FoodShare Lite</title>
</head>
<body>
    <h1>FoodShare Lite</h1>
    <p><a href="post.php">➕ 食品を投稿する</a></p>
    <h2>投稿された食品</h2>
    <?php foreach ($foods as $food): ?>
        <div style="border:1px solid #ccc; padding:10px; margin:10px;">
            <strong><?= htmlspecialchars($food['name']) ?></strong><br>
            賞味期限: <?= htmlspecialchars($food['expiry']) ?><br>
            地域: <?= htmlspecialchars($food['area']) ?><br>
            投稿日時: <?= htmlspecialchars($food['created_at']) ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
