<?php

$pdo = require_once 'config/connect.php'; // récupère les données de config.php

$sql = 'SELECT * FROM projet'; // insere les valeurs dans la base ( il faut l'auto incremente )

$statement_requete = $pdo->query($sql); // fait une requette
$statement_result = $statement_requete->fetchAll(PDO::FETCH_ASSOC); // récupère toute les lignes fetch() prend suelement la première ligne
echo json_encode($statement_result); // json_encode
?>