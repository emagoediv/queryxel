<?php

require_once './vendor/autoload.php';

use exelrel\method\Generate;

$conn = new PDO('mysql:youdomain;dbname=yourdatabase', 'youruser', 'yourpass');
$query = "SELECT nameUser, userId FROM users";
$teste = new Generate($conn, $query, 'arquivosExel/', ['name of user', 'id of user']);
$teste->generateExel();