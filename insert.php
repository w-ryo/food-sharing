<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $expiry = $_POST['expiry'];
    $area = $_POST['area'];
    $created_at = date('Y-m-d H:i:s');

    $db = new PDO('sqlite:db.sqlite');
    $stmt = $db->prepare("INSERT INTO foods (name, expiry, area, created_at) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $expiry, $area, $created_at]);

    header('Location: index.php');
    exit;
} else {
    echo "不正なアクセスです。";
}
