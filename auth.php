<?php
$login = ($_POST['login']);
$pass = md5($_POST['pass']);

include("bd.php");
//$result = mysqli_query ($db,"INSERT INTO users (login,pass,name) VALUES('$login','$pass','$name')");
//->
//$result = mysqli_query($db, 'que')
$result = mysqli_query($db,  "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if($user == NULL) {
  echo "Такой пользователь не найден";
  exit();
}
setcookie('user', $user['name'], time() + 3600, "/");
$result->close();
$test = $user['name'];
header("Location:2page.php?test=$test");

/*    if ($result=='TRUE')
    {
    header('Location:2page.php');}
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
*/

//header('Location: /');
 ?>
