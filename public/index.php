<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connect = new mysqli("MySQL-5.7", "root", "", "rabota");
    $sql = sprintf("INSERT INTO users (name, login, email, password) VALUES ('%s', '%s', '%s', '%s')",
        $_POST['name'],
        $_POST['login'],
        $_POST['email'],
        $_POST['password']
    );
    $result = $connect->query($sql);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    
</head>
<body>

<header>
    <h1>Регистрация</h1>
</header>

<section>
    <form action="" method="POST">
        <label>Имя</label>
        <input type="text" name="name" required>
<p>
        <label>Логин</label>
        <input type="text" name="login" required>
<p>
        <label>Email</label>
        <input type="email" name="email" required>
<p>
        <label>Пароль</label>
        <input type="password" name="password" required>
<p>
        <button type="submit">Зарегистрироваться</button>
    </form>
</section>

<footer>
    <p>© 2025</p>
</footer>

</body>
</html>