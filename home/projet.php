<section id="titre-projet" class="titre-projet">
    <h1><?php echo $hover_projet_texte[5]['value']; ?></h1>

</section>

<style>
.image1 {
    background-image: url("view/assets/img/<?php echo $hover_projet_img[0]['name']; ?>");
}

.image2 {
    background-image: url("view/assets/img/<?php echo $hover_projet_img[1]['name']; ?>");
}

.image3 {
    background-image: url("view/assets/img/<?php echo $hover_projet_img[2]['name']; ?>");
}

.image4 {
    background-image: url("view/assets/img/<?php echo $hover_projet_img[3]['name']; ?>");
}

.image5 {
    background-image: url("view/assets/img/<?php echo $hover_projet_img[4]['name']; ?>");
}


.parent-marquee-div {
    background-image: url("view/assets/img/<?php echo $gif_home_img[4]['name']; ?>?>");
}
</style>



<div class="maindiv dev_front">
    <div id="div1" class="div1-devFront">
        <div class="image1"></div> <span><?php echo $hover_projet_texte[0]['value']; ?></span>
        <div class="image1"></div><span><?php echo $hover_projet_texte[0]['value']; ?></span>

    </div>
    <div id="div2" class="div2-devFront">
        <div class="image1"></div><span><?php echo $hover_projet_texte[0]['value']; ?></span>
        <div class="image1"></div> <span><?php echo $hover_projet_texte[0]['value']; ?></span>
    </div>
</div>




<div class="maindiv design_graphique">
    <div id="div1" class="div1-design_graphique">
        <div class="image2"></div> <span><?php echo $hover_projet_texte[1]['value']; ?></span>
        <div class="image2"></div><span><?php echo $hover_projet_texte[1]['value']; ?></span>

    </div>
    <div id="div2" class="div2-design_graphique">
        <div class="image2"></div> <span><?php echo $hover_projet_texte[1]['value']; ?></span>
        <div class="image2"></div><span><?php echo $hover_projet_texte[1]['value']; ?></span>
    </div>
</div>



<div class="maindiv ui_design">
    <div id="div1" class="div1-UIDesign">
        <div class="image3"></div> <span><?php echo $hover_projet_texte[2]['value']; ?></span>
        <div class="image3"></div><span><?php echo $hover_projet_texte[2]['value']; ?></span>

    </div>
    <div id="div2" class="div2-UIDesign">
        <div class="image3"></div><span><?php echo $hover_projet_texte[2]['value']; ?></span>
        <div class="image3"></div> <span><?php echo $hover_projet_texte[2]['value']; ?></span>
    </div>
</div>

<div class="maindiv AnimationVideo">
    <div id="div1" class="div1-AnimationVideo">
        <div class="image4"></div> <span><?php echo $hover_projet_texte[3]['value']; ?></span>
        <div class="image4"></div><span><?php echo $hover_projet_texte[3]['value']; ?></span>

    </div>
    <div id="div2" class="div2-AnimationVideo">
        <div class="image4"></div> <span><?php echo $hover_projet_texte[3]['value']; ?></span>
        <div class="image4"></div><span><?php echo $hover_projet_texte[3]['value']; ?></span>
    </div>
</div>


<div class="maindiv dev_back">
    <div id="div1" class="div1-DevBack">
        <div class="image5"></div> <span><?php echo $hover_projet_texte[4]['value']; ?></span>
        <div class="image5"></div><span><?php echo $hover_projet_texte[4]['value']; ?></span>

    </div>
    <div id="div2" class="div2-DevBack">
        <div class="image5"></div> <span><?php echo $hover_projet_texte[4]['value']; ?></span>
        <div class="image5"></div><span><?php echo $hover_projet_texte[4]['value']; ?></span>
    </div>
</div>



<div class="parent-marquee dev_back">
    <div class="parent-marquee-div m1">
        <h2><?php echo $hover_projet_texte[0]['value']; ?></h2>
    </div>
    <div class="parent-marquee-div m2">
        <h2><?php echo $hover_projet_texte[1]['value']; ?></h2>
    </div>
    <div class="parent-marquee-div m3">
        <h2><?php echo $hover_projet_texte[2]['value']; ?></h2>
    </div>
    <div class="parent-marquee-div m4">
        <h2><?php echo $hover_projet_texte[3]['value']; ?></h2>
    </div>
    <div class="parent-marquee-div m5">
        <h2><?php echo $hover_projet_texte[4]['value']; ?></h2>
    </div>
</div>

<section id="competence" class="competence">
    <h1>
        <?php
echo $competence_texte[0]["value"];
?>

    </h1>
    <!-- 1 -->


    <div class="motionPath mp1">

        <div id="mp1-fp1" class="followPath fp1">
            <img class="followPathImg" src="view/assets/img/<?php echo($competence_img[1]["name"]) ?>" alt="">
        </div>

        <div id="mp1-fp2" class="followPath fp2">
            <img class="followPathImg" src="view/assets/img/<?php echo($competence_img[2]["name"]) ?>" alt="">
        </div>

        <div id="mp1-fp3" class="followPath fp3">
            <img class="followPathImg" src="view/assets/img/<?php echo($competence_img[3]["name"]) ?>" alt="">
        </div>

        <?php 
      echo file_get_contents("view/assets/img/".$competence_img[12]['name']);
    ?>


    </div>

    <!-- 2 -->
    <div class="motionPath mp2">

        <div id="mp2-fp1" class="followPath fp1">
            <img class="followPathImg" src="view/assets/img/<?php echo($competence_img[8]["name"]) ?>" alt="">
        </div>

        <div class="followPath fp2">
            <img class="followPathImg" src="view/assets/img/<?php echo($competence_img[5]["name"]) ?>" alt="">
        </div>

        <div class="followPath fp3">
            <img class="followPathImg" src="view/assets/img/<?php echo($competence_img[4]["name"]) ?>" alt="">
        </div>


        <?php 
      echo file_get_contents("view/assets/img/".$competence_img[13]['name']);
    ?>
    </div>

    <!-- 3 -->
    <div class="motionPath mp3">

        <div class="followPath fp1">
            <img class="followPathImg" src="view/assets/img/<?php echo($competence_img[6]["name"]) ?>" alt="">
        </div>

        <div class="followPath fp2">
            <img class="followPathImg" src="view/assets/img/<?php echo($competence_img[7]["name"]) ?>" alt="">
        </div>

        <div class="followPath fp3">
            <img class="followPathImg" src="view/assets/img/<?php echo($competence_img[10]["name"]) ?>" alt="">
        </div>



        <?php 
      echo file_get_contents("view/assets/img/".$competence_img[14]['name']);
    ?>

        </svg>
    </div>




</section>


<section class="about-me">
    <h1 id="titre-about-me" class="titre-about-me"><?php echo $about_me_texte[6]['value']; ?></h1>


    <div class="about-me-text">

        <h1><?php echo $about_me_texte[0]['value']; ?></h1>
        <p>
            <?php echo $about_me_texte[1]['value']; ?>
        </p>


        <h1><?php echo $about_me_texte[2]['value']; ?></h1>
        <p>
            <?php echo $about_me_texte[3]['value']; ?>
        </p>

        <h1><?php echo $about_me_texte[4]['value']; ?></h1>
        <p><?php echo $about_me_texte[5]['value']; ?></p>
    </div>

    <div class="about-me-img"> <img class="about-me-img-moi" src="view/assets/img/moi.png" alt=""></div>




</section>






<section id="titre-contact" class="titre-contact">
    <h1><?php echo $contact_texte[0]["value"]?></h1>
</section>