<?php
$pdo = require_once 'config/connect.php';


$sql_projet = "DELETE FROM projet WHERE id_projet = :id_projet";
$statement_requete_projet = $pdo->prepare($sql_projet);
$statement_requete_projet->bindValue(':id_projet', $_POST['id_projet'], PDO::PARAM_INT);
$statement_requete_projet->execute();

?>
<script>
document.location =
    "../dashbord.php"; // renvoie a visualiser article ( le header(), exit() en php ne fonctionnait pas, il n'y a pas de données sensible le javascript est convenable )
</script>