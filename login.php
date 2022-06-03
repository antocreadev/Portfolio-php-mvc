<?php
require_once "view/backoffice/login.view.php";
;
// script alert
if (isset($_GET['error'])) {
    echo("<script>alert('Vous devez vous connecter');</script>");
    // clean url get in js
    echo("<script>history.go(-1);</script>");
}
if (isset($_GET['inconnue'])) {
    echo("<script>alert(`votre email n'existe pas, veuillez vous inscrire`);</script>");
    echo("<script>history.go(-1);</script>");
}
if (isset($_GET['incorrect'])) {
    echo("<script>alert('Votre mot de passe est incorrect');</script>");
    echo("<script>history.go(-1);</script>");
}




// login ok mais pad ADMIN
if (isset($_GET['connecter'])) {
    echo("<script>alert('Vous êtes connecté');</script>");
    echo("<script>history.go(-1);</script>");
    echo("<script>document.location =
    'index.php';</script>");
}
?>