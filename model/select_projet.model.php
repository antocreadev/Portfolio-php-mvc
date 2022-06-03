<?php

$sql_projet = "SELECT * FROM projet";
$statement_requete_projet = $pdo->query($sql_projet);
$statement_result_projet = $statement_requete_projet->fetchAll(PDO::FETCH_ASSOC); 

?>