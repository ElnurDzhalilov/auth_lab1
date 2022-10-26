<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма регистрации</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container mt-4">
    <h1>Форма регистрации</h1>
    <form action="check.php" method="post">
      <input type="text" class="form-control" name="login" id="login" placeholder ="Введите логин"><br>
      <input type="text" class="form-control" name="name" id="name" placeholder ="Введите имя"><br>
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
      <button class="btn btn-success" type='submit'>Зарегистрироваться</button>
    </form>
  </div>
</body>
</html>
