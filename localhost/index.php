<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<!-- база -->
<?php
$servername = "localhost"; // Имя сервера базы данных (обычно localhost)
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя базы данных
$dbname = "register-bd"; // Имя базы данных

?>
<div class="container mt-4">
<?php
if ($_COOKIE['user'] == ''):
?>
    <h1>Форма регистрации</h1>
    <form action="check.php" method="post">
        <input type="text" class="form-control" name="login"
        id="login" placeholder="Введите логин"> <br>
        <input type="text" class="form-control" name="name"
        id="name" placeholder="Введите имя"><br>
        <input type="password" class="form-control" name="pass"
        id="pass" placeholder="Введите пароль"><br>
        <button class="btn btn-success"
        type="submit">Зарегистрировать</button>
        </form>
</div>
<div class="col">
<h1>Форма авторизации</h1>
<form action="auth.php" method="post">
<input type="text" class="form-control" name="login"
id="login" placeholder="Введите логин"><br>
<input type="password" class="form-control"
name="pass"
id="pass" placeholder="Введите пароль"><br>
<button class="btn btn-success"
type="submit">Авторизоваться</button>
</form>
</div>
<?php else: ?>
    <p>Привет <?=$_COOKIE['user']?>.Чтобы выйти нажмите <a
href="/exit.php">здесь</a>.</p>
<?php endif; ?>
<!-- база -->

     <!-- HEADER -->
     <div class="navbar1"></div>
     <div class="d1">
       </div>
       <div class="logo4"></div>
       <div class="glavlogo"><img src="img/gpt.png" alt="" width="80" height="40"/></div>
      <div class="poisk"><img src="img/loupe.svg" alt="" width="30" height="30"/></div>
     <!-- FILTER -->	
       <div class="navbar3"></div>
       <div class="navbar object">
             <div id="wrapper-sorting">
             <div id="wrapper-title-1">
             <div class="top-rated object">Главная</div>
             <a href="index1.html"><div class="top-rated object">Главная</div></a>
             
             </div>
             
             <div id="wrapper-title-2">
             <a href="Личный кабинет.html"><div class="recent object">Цены</div></a>
                 <div id="fleche-nav-2"></div>
                 <div id="wrapper-title-3">
                   <a href="Цены.html"><div class="oldies object">Личный кабинет</div></a>
                       <div id="fleche-nav-3"></div>
               </div>
             </div>
<!-- PORTFOLIO -->







             <!-- footer -->
             <div class="footer"></div>
             <div class="fottext1">
                 <p>Copyright © 2018. Template by DesignSeer</p>
             </div>
         </body>
         </html>