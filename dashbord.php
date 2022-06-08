<?php 
// si la session existe
session_start();

if (isset($_SESSION['admin_fullname'])) {
 
    require_once 'model/home.model.php';
    require_once 'model/select_projet.model.php';
 

    // recup dans la table img (parametre = practice -> id_hm de home_modele    )
     $logo_img = getImg('logo');
     $gif_home_img = getImg('gif-home');
     $reseaux_img = getImg('reseaux');
     $competence_img = getImg('competence');
     $about_me_img = getImg('about-me');
     $hover_projet_img = getImg('hover-projet');

     // recup dans la table texte (parametre = practice)
     $logo_texte = getTexte('logo');
     $home_texte = getTexte('home');
     $hover_projet_texte = getTexte('hover-projet');
     $about_me_texte = getTexte('about-me');
     $contact_texte = getTexte('contact');
     $competence_texte = getTexte('competence');


    require_once "view/backoffice/dashbord.view.php";

}
else {
    echo("<script>alert('Vous devez vous connecter');</script>");
    // clean url get in js

    echo("<script>document.location =
    'login.php';</script>");
}

?>