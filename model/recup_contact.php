<?php
$sql_contact = "SELECT email, titre, message FROM contact"; // récupère toutes les données de la table
$statement_requete_contact = $pdo->query($sql_contact); // fait une requette
$statement_result_contact = $statement_requete_contact->fetchAll(PDO::FETCH_ASSOC); 
?>