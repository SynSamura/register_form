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

<form action="inc/singnup.php" method="post" enctype="multipart/form-data">
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите полное имя">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Почта</label>
    <input type="text" name="email" placeholder="Введите адрес почты">
    <label>Изображение профиля</label>
    <input type="file"name="avatar">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit">Готово</button>
    <p>
        У вас уже есть аккаунт? - <a href="/">Авторезируйтесь</a>!
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