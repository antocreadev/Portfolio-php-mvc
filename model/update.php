<?php
$pdo = require_once 'config/connect.php';
if (!empty($_FILES) ){
// declaration des variables lié à $_FILES
$tmpName_photo = $_FILES['name']['tmp_name'];
$type_photo = $_FILES['name']['type'];
$name_photo = $_FILES['name']['name'];
$size_photo = $_FILES['name']['size'];
$error_photo = $_FILES['name']['error'];
// declaration des variables lié à $_POST
$choice = $_POST['choice'];
// declariation des vraibale pour condition
$error = false;
$type_valide = ['image/png', 'image/jpeg', 'image/gif', 'image/jpg', 'image/svg' , 'image/webp' ,'image/svg+xml'];
$size_valide = 3000000;
// test si le fichier type est valide
if (in_array($type_photo, $type_valide)) {
}
else {
    $error = true;
    echo '<p>le fichier n\'est pas valide</p>';
}
 // test si le fichier est vide
if($error_photo !== 0) {
    $error = true;
    echo("CODE ERREUR");
  }
// test la taille du fichier 
if($size_photo > $size_valide) {
    echo("TAILLE FICHIER TROP GRAND");
    $error = true;
}
//remove file

if(file_exists('../view/assets/img/'.$choice)) {
    unlink('../view/assets/img/'.$choice);
    // echo("FICHIER SUPPRIMER");
}
//unique nom pour le fichier
$name_photo = uniqid().$name_photo;

// déplace le fichier dans le dossier img
if($error == false){
    move_uploaded_file($tmpName_photo, '../view/assets/img/'.$name_photo);

        // UPDATE img SET name='anto_rempli.svg1' WHERE name='anto_rempli.svg'
        $sql = "UPDATE img SET name=:name_photo WHERE name=:choice"; // met à jour les données dans la tavle lorsque code client est égal à l'id ( il faut l'auto incrément )

        $statement = $pdo->prepare($sql); // prepare l'exution
        $statement->execute(array(
        ':name_photo' => $name_photo,
        ':choice' => $choice
)); // execute et rentre les valeurs pour le sql 
}
}
//------------------------------------------------------------------------------------------
if (!empty($_POST["value"]) ){
$value = $_POST["value"];
$choice = $_POST["choice"];
        // UPDATE texte SET value='test' WHERE value='lol';
$sql = "UPDATE texte SET value=:value WHERE value=:choice"; // met à jour les données dans la tavle lorsque code client est égal à l'id ( il faut l'auto incrément )
$statement = $pdo->prepare($sql); // prepare l'exution
$statement->execute(array(
':value' => $value,
':choice' => $choice
)); // execute et rentre les valeurs pour le sql 
    }
// ?>
<script>
document.location =
    "../dashbord.php"; // renvoie a visualiser article ( le header(), exit() en php ne fonctionnait pas, il n'y a pas de données sensible le javascript est convenable )
</script>