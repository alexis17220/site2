<?php
/* Connexion à une base MySQL avec l'invocation de pilote */

$dsn = 'mysql:dbname=dbs4835511;host=db5005747289.hosting-data.io';
$user = 'dbu603166';
$password = 'Hollow+172Fica9&3tion';

try {
    $bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'ERROR :' . $e->getMessage();
}



