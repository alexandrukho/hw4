<?php

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$dsn = "mysql:host=localhost;dbname=hw4;charset=utf8";
$pdo = new PDO($dsn, 'root', '', $options);
