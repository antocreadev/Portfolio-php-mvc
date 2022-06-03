<aside class="reso">
    <!-- <img src="img//github.svg" alt="">
    <img src="img//linkedin.svg" alt="">
    <img src="img//twitter.svg" alt="">
    <img src="img//instagram.svg" alt=""> -->

</aside>
<section class="contact">



    <div class="h1">

    </div>
    <form method="POST" action="model/insert.model.php">

        <label for="email"><?php echo $contact_texte[1]["value"]?></label>
        <input id="email" type="email" required="required" placeholder="<?php echo $contact_texte[2]["value"]?>"
            name="email">

        <label for="titre"><?php echo $contact_texte[3]["value"]?></label>
        <input id="titre" type="text" required="required" name="titre"
            placeholder="<?php echo $contact_texte[4]["value"]?>">

        <label for="message"><?php echo $contact_texte[5]["value"]?></label>
        <textarea id="message" name="message" required="required" id=""
            placeholder="<?php echo $contact_texte[6]["value"]?>" cols="30" rows="10"></textarea>


        <input type="submit" value="<?php echo $contact_texte[7]["value"]?>">



    </form>

    <aside>

    </aside>
</section>