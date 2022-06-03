<?php

$pdo = require_once 'config/connect.php';
require_once 'recup_contact.php';
$email = $_POST["email"];
$password = $_POST["password"];
// sécurise donnée
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);
// trim donnée
$email = trim($email);
$password = trim($password);
// stripslashes donnée
$email = stripslashes($email);
$password = stripslashes($password);

    if (!empty($_POST) ){
    $tab_contact_message = [];
    $tab_contact_email = [];
    $tab_contact_titre = [];
    foreach ($statement_result_contact as $value_contact){
        array_push($tab_contact_message, $value_contact["message"]);
        array_push($tab_contact_email, $value_contact["email"]);
        array_push($tab_contact_titre, $value_contact["titre"]);
    }
    $sql = "SELECT email, password, fullname FROM admin";
    $statement_requete = $pdo->query($sql);
    $statement_result = $statement_requete->fetchAll(PDO::FETCH_ASSOC); 
    $tab_email = [];
    $tab_password = [];
    $tab_fullname = []; 
    foreach ($statement_result as $value){
        array_push($tab_email, $value["email"]);
        array_push($tab_password, $value["password"]);
        array_push($tab_fullname, $value["fullname"]);
    }
    $in_base = false;
    $total_user = count($tab_email);
    if(in_array($email, $tab_email) and password_verify($password, $tab_password[0]))
    {
        $in_base = true;
        session_start();
        if($email == $tab_email[0] and password_verify($password, $tab_password[0]))
        {
            $_SESSION["admin_fullname"]= $tab_fullname[0];
            $_SESSION["total_user"]= $total_user;
            $_SESSION["tab_message"]= $tab_contact_message;
            $_SESSION["tab_email"]= $tab_contact_email;
            $_SESSION["tab_titre"]= $tab_contact_titre;
            header('Location: ../dashbord.php');
            exit();
        }
        
    }
    if(!in_array($email, $tab_email))
    {
        header('Location: ../login.php?inconnue=1');
        exit();
    }

    if(in_array($email, $tab_email))
    {
        $key = array_search($email, $tab_email);
        if(password_verify($password, $tab_password[$key])){
            header('Location: ../login.php?connecter=1');
            exit();
        }
        else{
            header('Location: ../login.php?incorrect=1');
            exit();
        }

    }

}


?>