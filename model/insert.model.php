<?php
$pdo = require_once 'config/connect.php';


$email= $_POST['email'];  // recupère les données du formulaire 
$titre = $_POST['titre'];
$message = $_POST['message'];

// securise donnée 
$email = htmlspecialchars($email);
$titre = htmlspecialchars($titre);
$message = htmlspecialchars($message);

// trim donnée
$email = trim($email);
$titre = trim($titre);
$message = trim($message);

// stripslashes donnée
$email = stripslashes($email);
$titre = stripslashes($titre);
$message = stripslashes($message);

$sql = 'INSERT INTO contact  (email, titre, message) VALUES(:email, :titre, :message)'; 




$statement = $pdo->prepare($sql); // prepare l'exution
$statement->execute(array(
':email' => $email,
':titre' => $titre,
':message' => $message,
)); // execute et rentre les valeurs pour le sql 

header('Location: ../index.php'); // redirige vers la page index.html
exit();

?>

<!-- <script>

document.location.href="../index.php"; 

</script> -->