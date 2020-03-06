<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="http://micro/public/css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>dashboard</title>
</head>
<body>
<?php include 'public/views/blocks/header.php';?>
<?=$_COOKIE['login']; ?>
<button class="btn btn-danger" id="logOut">log out</button>
<?php include 'blocks/footer.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="http://micro/public/js/logOut.js"></script>
</body>
</html>