<?php  
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);  
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);  
$mysql = new mysqli('localhost', 'root', '', 'register-bd');  
$result = $mysql->query("SELECT * FROM users WHERE login = '$login' AND pass = '$pass'");  
 
if ($result->num_rows == 0) {  
    echo "Такой пользователь не найден";  
    exit();  
}  
 
$user = $result->fetch_assoc();  
setcookie('user', $user['name'], time() + 3600, "/"); 

$mysql->close();  

// Вывод сообщения об успешной авторизации и способа выйти из учетной записи
echo "Добро пожаловать, $user[name]! Вы успешно авторизовались. Чтобы выйти, нажмите <a href='/index1.html'>здесь</a>";

exit();
header('Location: /');  
?>