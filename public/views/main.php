<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="public/css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Home</title>
</head>
<body>
<?php include 'blocks/header.php'; ?>
<?php if (isset($_COOKIE['login'])): ?>
  <div class="form">
    <label for="url">Плоный Url</label>
    <input type="text" id="url" class="form-control">
    <label for="shortUrl">Желаемое сокращение</label>
    <input type="text" id="shortUrl" class="form-control">
  <div class="arlet" id="alert"></div>
  <button class="btn btn-danger" id="createUrl">Сократить</button>
  </div>
<?php else: ?>
  <div class="form">
    <label for="login">Login</label>
    <input class="form-control" id="login" type="text">
    <label for="email">Email</label>
    <input class="form-control" id="email" type="email">
    <label for="password">Password</label>
    <input class="form-control" id="password" type="password">
  <div class="text-warning" id="alert"></div>
  <button class="btn btn-danger form__button">Зарегестрироваться</button>
  </div>
<?php endif; ?>
<?php include 'blocks/footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php if(!isset($_COOKIE['login'])): ?>
<script src="http://micro/public/js/sendReg.js"></script>
<?php else:?>
<script src="http://micro/public/js/sendUrl.js"></script>
<?php endif;?>
</body>
</html>