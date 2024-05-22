<?php

require_once('db.php');
$input = $_POST['name'];
$text =  $_POST['text'];

$sql = "INSERT INTO `history`(`name`, `history`) VALUES ('$input', '$text')";

$conect->query($sql);


