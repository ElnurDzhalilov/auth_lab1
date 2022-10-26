<?php
$login = ($_POST['login']);
$name = ($_POST['name']);
$pass = ($_POST['pass']);

if((mb_strlen($login) < 5) || (mb_strlen($login) > 90)) {
  echo "Недопустимая длина логина";
  exit();
}
else if((mb_strlen($name) < 3) || (mb_strlen($name) > 50)) {
  echo "Недопустимая длина имена";
  exit();
}
else if((mb_strlen($pass) < 2) || (mb_strlen($pass) > 6)) {
  echo "Недопустимая длина пароля (от 2 до 6 символов)";
  exit();
}
include("bd.php");
$result = mysqli_query($db,"SELECT * FROM users WHERE login = $name");
if($result != NULL) {
  echo("Логин занят");
}
$pass = md5($pass);
//НЕ ХЕШИРОВАТЬ ПАРОЛЬ
$result = mysqli_query ($db,"INSERT INTO users (login,pass,name) VALUES('$login','$pass','$name')");

    if ($result=='TRUE')
    {
    header('Location:2page.php');}
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }


//header('Location: /');

 ?>
