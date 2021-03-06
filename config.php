<?php

define('URL', 'http://localhost:8888/'); // a changer pour la mise en ligne

define('DB_HOST', 'localhost');
define('DB_NAME', 'h2_mes_premiers_mois'); // mettre le nom de la bonne base de donnée
define('DB_USER', 'root');
define('DB_PASS', 'root'); // '' par défaut sur windows

try
{
    // Try to connect to database
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';port=8889',DB_USER,DB_PASS);

    // Set fetch mode to object
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}
catch (Exception $e)
{
    // Failed to connect
    die('Could not connect');
}

// die("connect");
