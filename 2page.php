<?php
include("bd.php");
$name = ($_COOKIE['user']);
$result = mysqli_query($db,  "SELECT * FROM `users` WHERE `name` = '$name'");
$result = $result->fetch_assoc();
if ($result == NULL or $_COOKIE['user'] == NULL) {
    header('Location: index.php');
}
//var_dump($result);
//var_dump($name);
 ?>
<html lang="ru">
<?php
//echo("Hello");
include("bd");
$name = $_COOKIE['user'];
echo ("Привет,  ");
echo ($name);
echo(" . Чтобы выйти, нажмите ");
?>
<a href="exit.php" title="выход" >здесь</a>
