<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="paracss.css" rel="stylesheet">
</head>
<body>
<form action="zapolnenie.php" method="post">
    <div class="container">
        <h1>Истории</h1>
        <label>Введите имя</label>
        <input class="input" name="name" type="text" placeholder="Имя"><br>
        <label>Ваша история</label>
        <textarea class="textarea" name="text" placeholder="Введите свою историю"></textarea><br>

        <div class="submit">Кнопка</div><br>
    </div>
</form>
</body>
<script src="jquery.js"></script>
<script src="main_js.js"></script>
</html>
