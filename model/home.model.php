<?php

$pdo = require_once 'config/connect.php'; // récupère les données de config.php

function getImg($id_practice) {
    global $pdo;

    // $sql = "SELECT name FROM img WHERE practice=:practice"; // récupère toutes les données de la table


    $sql = "SELECT img.name, home_model.practice FROM `img` LEFT JOIN home_model ON img.practice = home_model.id_hm WHERE home_model.practice = :id_practice";

    $statement_requete = $pdo->prepare($sql); // fait une requette
    $statement_requete->execute([
        ':id_practice' => $id_practice
    ]);
    return $statement_requete->fetchAll();
}
function getTexte($id_practice) {
    global $pdo;

    $sql = "SELECT texte.value, home_model.practice FROM `texte` LEFT JOIN home_model ON texte.practice = home_model.id_hm WHERE home_model.practice = :id_practice";

    $statement_requete = $pdo->prepare($sql); // fait une requette
    $statement_requete->execute([
        ':id_practice' => $id_practice
    ]);
    return $statement_requete->fetchAll();
}

?>