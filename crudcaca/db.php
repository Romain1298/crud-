<?php
$dsn = 'mysql:host=localhost;dbname=company';
$username = 'toto';
$password = 'toto';
$options = [];

$pdo = new PDO($dsn, $username, $password, $options);
