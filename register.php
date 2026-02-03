<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>إنشاء حساب</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>إنشاء حساب</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="اسم المستخدم" required>
        <input type="password" name="password" placeholder="كلمة المرور" required>
        <button type="submit">تسجيل</button>
    </form>

    <p>
        لديك حساب بالفعل؟
        <a href="login.php">تسجيل الدخول</a>
    </p>

    <?php if (isset($error)) echo '<div class="error">'.htmlspecialchars($error).'</div>'; ?>
</div>

</body>
</html>

