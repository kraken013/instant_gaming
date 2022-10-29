<?php
// Souvent on identifie cet objet par la variable $conn ou $db
$bdd = new PDO(
    'mysql:host=localhost;
    dbname=mydb;
    charset=utf8',
    'root',
    ''
);

?>