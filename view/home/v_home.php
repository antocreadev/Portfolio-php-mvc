<section class="home">

    <style>
    .img-home1 {
        background-image: url("view/assets/img/<?php echo $gif_home_img[0]['name']; ?>");
    }

    .img-home2 {
        background-image: url("view/assets/img/<?php echo $gif_home_img[3]['name']; ?>");
    }

    .img-home3 {
        background-image: url("view/assets/img/<?php echo $gif_home_img[1]['name']; ?>");
    }

    .img-home4 {
        background-image: url("view/assets/img/<?php echo $gif_home_img[2]['name']; ?>");
    }



    .text-img4:hover {

        background: url("view/assets/img/<?php echo $gif_home_img[3]['name']; ?>");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: 1s ease;

    }

    .text-img2:hover {
        transition: 1s ease;
        background: url("view/assets/img/<?php echo $gif_home_img[2]['name']; ?>");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;


    }

    .text-img1:hover {
        transition: 1s ease;
        background: url("view/assets/img/<?php echo $gif_home_img[1]['name']; ?>");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;


    }

    .text-img3:hover {
        transition: 1s ease;
        background: url("view/assets/img/<?php echo $gif_home_img[0]['name']; ?>");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    </style>


    <?php 
// echo($logo_texte[1]['value']);
$a = $logo_texte[0]['value'][0];

$n = $logo_texte[0]['value'][1];

$t = $logo_texte[0]['value'][2];

$o = $logo_texte[0]['value'][3].$logo_texte[0]['value'][4];

// echo($a." ".$n." ".$t." ".$o)

?>
    <div class="home-logo tracking-in-expand">
        <p id="home-logo-a"><?php echo $a ?></p>
        <p id="home-logo-n"><?php echo $n ?></p>
        <p id="home-logo-t"><?php echo $t ?></p>
        <p id="home-logo-o"><?php echo $o ?></p>

    </div>

    <div class="home-paragraphe">
        <?php
// print_r($home_texte);
// echo $home_texte
?>

        <h1>
            <span class="text-img4"><?php echo $home_texte[5]['value']; ?></span>&nbsp;
            <span class="text-img3"><?php echo $home_texte[6]['value']; ?></span>
            <div class="img-home1"></div>
        </h1>
        <h1>
            LIER L'
            <span class="text-img2"><?php echo $home_texte[8]['value']; ?></span>
            <div class="img-home2"></div>
            <?php echo $home_texte[9]['value']; ?>
            <span class="text-img1"><?php echo $home_texte[10]['value']; ?></span>
        </h1>
        <h1>
            <?php echo $home_texte[11]['value']; ?>&nbsp;
            <span class="text-img3"><?php echo $home_texte[12]['value']; ?></span>
            <div class="img-home3"></div>
        </h1>
        <h1>
            <?php echo $home_texte[13]['value']; ?>&nbsp;
            <span class="text-img2"><?php echo $home_texte[14]['value']; ?>&nbsp;</span>
            <?php echo $home_texte[15]['value']; ?>
            <div class="img-home4"></div>
            <span
                class="text-img4"><?php echo $home_texte[16]['value']; ?></span><?php echo $home_texte[17]['value']; ?>
        </h1>
    </div>

    <div>


</section>