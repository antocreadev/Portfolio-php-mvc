<?php
$pdo = require_once 'config/connect.php';
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

// sécurise donnée
$fullname = htmlspecialchars($fullname);
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);

// trim donnée
$fullname = trim($fullname);
$email = trim($email);
$password = trim($password);

// stripslashes donnée
$fullname = stripslashes($fullname);
$email = stripslashes($email);
$password = stripslashes($password);

$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql = 'INSERT INTO admin  (fullname, email, password) VALUES(:fullname, :email, :password)'; 
$statement = $pdo->prepare($sql); // prepare l'exution
$statement->execute(array(
':fullname' => $fullname,
':email' => $email,
':password' => $hash,
)); // execute et rentre les valeurs pour le sql 
header('Location: ../login.php'); // redirige vers la page index.html
exit();
?>