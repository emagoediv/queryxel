# Gere arquivos exel com o resultado de consulta no banco de dados de forma rápida

# Generate exel files with the query result in the database quickly


## Utilização:


## To use:


Para utilizar essa dependência, siga o exemplo abaixo:


```php
<?php

    require_once './vendor/autoload.php';

    use exelrel\method\Generate;

    $conn = new PDO('mysql:youdomain;dbname=yourdatabase', 'youruser', 'yourpass');
    $query = "SELECT nameUser, userId FROM users";
    $test = new Generate($conn, $query, 'arquivosExel/', ['name of user', 'id of user']);
    $test->generateExel();  
´´´



Image of result:
![exemple](https://user-images.githubusercontent.com/81570051/163396714-2fb34f7b-7ea3-442d-8a7f-9e61c2d06a3c.JPG)
