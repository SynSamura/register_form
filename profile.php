<?php
    session_start();
    
    if(!$_SESSION['user']) {
        header('location: /');
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

<form>
    <img src="<?= $_SESSION['user']['avatar']?>" width="300" alt="">
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name']?></h2>
    <a href="#"><?= $_SESSION['user']['email']?></a>
    <a href="inc/logout.php" class="logout">Выход</a>
</form>
    
</body>
</html>