<?php
require "config.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>الصفحة الرئيسية</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container welcome">
    <h1>مرحباً 👋</h1>
    <p>
        أهلاً بك
        <strong><?= htmlspecialchars($_SESSION["username"]) ?></strong>
        في النظام
    </p>

    <br>

    <a href="logout.php" class="logout-btn">تسجيل الخروج</a>
</div>

</body>
</html>

