<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$link = new mysqli($servername, $username, $password, $dbname);
$link->set_charset("utf8");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
