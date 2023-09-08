<?php
    session_start();

    if($_SESSION['user']) {
        header('location: ../profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="Style/main.css">
</head>
<body>

<form action="inc/signin.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p>
        У вас нет аккаунта? - <a href="registr.php">Зарегистрируйтесь</a>!
    </p>
    
    <?php
        if ($_SESSION['message']) {
            echo '<p class="msg">' . $_SESSION['message'] . ' </p>';
        }
            unset($_SESSION['message']);
     ?>


</form>
    
</body>
</html>