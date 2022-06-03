<?php
$pdo = require_once 'config/connect.php';
if (!empty($_FILES) ){
// declaration des variables lié à $_FILES
$tmpName_photo = $_FILES['media']['tmp_name'];
$type_photo = $_FILES['media']['type'];
$name_photo = $_FILES['media']['name'];
$size_photo = $_FILES['media']['size'];
$error_photo = $_FILES['media']['error'];
// declaration des variables lié à $_POST
$practice = $_POST['practice'];
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

if(file_exists('../view/assets/img/'.$name_photo)) {
    unlink('../view/assets/img/'.$name_photo);
    // echo("FICHIER SUPPRIMER");
}
//unique nom pour le fichier
$name_photo = uniqid().$name_photo;

// déplace le fichier dans le dossier img
if($error == false){
    move_uploaded_file($tmpName_photo, '../view/assets/img/'.$name_photo);

        // UPDATE img SET name='anto_rempli.svg1' WHERE name='anto_rempli.svg'
        $sql = "INSERT INTO projet (name, description, annee, temps, media, practice, link) VALUES(:name, :description, :annee, :temps, :media, :practice, :link)"; 

        $statement = $pdo->prepare($sql); // prepare l'exution
        $statement->execute(array(
        ':name' => $_POST['name'],
        ':description' => $_POST['description'],
        ':annee' => $_POST['annee'],
        ':temps' => $_POST['temps'],
        ':media' => $name_photo,
        ':practice' => $practice,
        ':link' => $_POST['link'],
 
)); // execute et rentre les valeurs pour le sql 
}
}
//---------------------------------------------------------------------------------
// ?>
<script>
document.location =
    "../dashbord.php"; // renvoie a visualiser article ( le header(), exit() en php ne fonctionnait pas, il n'y a pas de données sensible le javascript est convenable )
</script>