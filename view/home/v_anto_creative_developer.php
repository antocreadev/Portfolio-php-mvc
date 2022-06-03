<section class="anto_creative_developer">
    <section class="anto">
        <img class="anto_rempli" src="view/assets/img/<?= $logo_img[0]['name']; ?>" alt="">
        <!-- SVG : antò -->
        <?php 
    echo file_get_contents("view/assets/img/".$logo_img[2]['name']);
    ?>
    </section>

    <section class="creative_developer_section">
        <!-- SVG : creative developer -->
        <?php 
      echo file_get_contents("view/assets/img/".$logo_img[1]['name']);
    ?>
    </section>
</section>