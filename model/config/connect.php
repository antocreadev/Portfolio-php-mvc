<?php

require_once 'config.php'; // aller chercher les infos et on doit avoir ne renvoit pas d'erreur il faut utiliser require_once

$dsn = "mysql:host=$host;dbname=$db;charset=utf8"; // la chaine de caractère pour se connecter a mysql


try {
    $pdo = new PDO($dsn, $user, $password); // cree la connection
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    if ($pdo) {
        return $pdo; // si pdo existe renvoie pdo
    }
} catch (PDOException $e) {
    echo $e->getMessage(); // sinon message d'erreur 
}

?>