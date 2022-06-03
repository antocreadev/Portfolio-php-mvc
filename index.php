<?php 

require_once 'model/home.model.php';


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





//debug
// var_dump($gif_home_img);
// exit;



require_once('view/home/head.php');

require_once("view/home/v_anto_creative_developer.php");
require_once("view/home/nav_scroll.php");
require_once("view/home/v_home.php");
require_once("view/home/projet.php");
require_once("view/home/old_index.php");

require_once('view/home/foot.php');
?>