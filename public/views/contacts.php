<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="public/css/main.css">
  <title>Document</title>
</head>
<body>
<?php include 'blocks/header.php' ?>
<form class="container my-5">
  <h1>Форма обратной связи</h1>
  <input type="text" placeholder="Имя" name="name" class="form-control my-3">
  <input type="email" placeholder="Email" name="email" class="form-control my-3">
  <input type="number" placeholder="Возраст" name="age" class="form-control my-3">
  <textarea class="w-100 my-3 from-control" name="massage" placeholder="Сообщение" rows="5"></textarea>
  <p id="alert"></p>
  <button class="btn btn-danger" type="button" id="sendMail">Отправить</button>
</form>
<?php include 'blocks/footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="public/js/sendMail.js"></script>
</body>
</html>