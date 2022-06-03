<style>
nav {
    background-image: url("view/assets/img/<?php echo $gif_home_img[4]['name']; ?>");
}
</style>

<nav class="nav">
    <div class="parent_logo"> <img class="logo" src="view/assets/img/<?php echo $logo_img[0]['name']; ?>" alt=""></div>
    <ul class="ul">
        <li><a class="a" href="#home-logo-a"><?php echo $home_texte[4]['value']; ?></a></li>
        <li><a class="a" href="#titre-projet"><?php echo $home_texte[0]['value']; ?></a></li>
        <li><a class="a" href="#competence"><?php echo $home_texte[1]['value']; ?></a></li>
        <li><a class="a" href="#titre-about-me"><?php echo $home_texte[2]['value']; ?></a></li>
        <li><a class="a" href="#titre-contact"><?php echo $home_texte[3]['value']; ?></a></li>
    </ul>

</nav>
<?php 

?>
<nav class="nav-static">
    <ul>
        <li><a class="a" href="#titre-projet"><?php echo $home_texte[0]['value']; ?></a></li>
        <li><a class="a" href="#competence"><?php echo $home_texte[1]['value']; ?></a></li>
        <li><a class="a" href="#titre-about-me"><?php echo $home_texte[2]['value']; ?></a></li>
        <li><a class="a" href="#titre-contact"><?php echo $home_texte[3]['value']; ?></a></li>
    </ul>

</nav>