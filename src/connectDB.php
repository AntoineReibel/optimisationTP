<?php

$servername = getenv("APP_DATABASE_HOST");
$username = getenv("APP_DATABASE_USER");
$password = getenv("APP_DATABASE_PASSWORD");
$database = getenv("APP_DATABASE_NAME");

$pdo = new PDO(
    "mysql:host=$servername;port=3306;dbname=$database",
    $username,
    $password
);

$conn = new mysqli($servername, $username, $password);
