<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма авторизации</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container mt-4">
    <h1>Форма авторизации</h1>
    <form action="auth.php" method="post">
      <input type="text" class="form-control" name="login" id="login" placeholder ="Введите логин"><br>
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
      <button class="btn btn-success" type='submit'>Войти</button>
    </form>
    <a href="index2.php" title="Регистрация" >Зарегистрироваться</a>
  </div>
</body>
</html>
