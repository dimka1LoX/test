<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING) ;
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING) ;
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING) ;
if(mb_strlen($login) < 5 || mb_strlen ($login) > 90) {
echo "Недоспутимая длина логина";
exit();
} else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
echo "Недоспутимая длина имени";
exit();
}else if(mb_strlen ($name) < 3 || mb_strlen ($name) > 50) {
echo "Недоспутимая длина имени";
exit();
}
$mysql = new mysqli( 'localhost', 'root', '', 'register-bd');
$mysql->query ("INSERT INTO `users` (`name`,`login`, `pass`)
VALUES ('$name','$login', '$pass')");
$mysql->close () ;
header ('Location: /');

?>