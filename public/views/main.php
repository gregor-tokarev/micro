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

<p class="form">
  <label for="login">Login</label>
  <input class="form-control" id="login" type="text">
  <label for="email">Email</label>
  <input class="form-control" id="email" type="email">
  <label for="password">Password</label>
  <input class="form-control" id="password" type="password">
  <button class="btn btn-danger form__button" >Зарегестрироваться</button>
  <span class="text-warning" id="alert"></span>
</p>

<?php include 'blocks/footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="public/js/sendReg.js"></script>
</body>
</html>