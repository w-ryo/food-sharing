<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>投稿フォーム - FoodShare</title>
</head>
<body>
    <h1>食品を投稿する</h1>
    <form action="insert.php" method="post">
        食品名: <input type="text" name="name" required><br><br>
        賞味期限: <input type="date" name="expiry" required><br><br>
        地域: <input type="text" name="area" required><br><br>
        <input type="submit" value="投稿する">
    </form>
    <p><a href="index.php">← 一覧に戻る</a></p>
</body>
</html>
