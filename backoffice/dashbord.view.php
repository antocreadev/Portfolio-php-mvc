<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/assets/style/dashbord.css">
    <title>Dashboard d'<?= $_SESSION["admin_fullname"]; ?></title>

</head>

<body>




    <h1 class="titre">Dashboard d'<?= $_SESSION["admin_fullname"];?></h1>

    <!-- --------------------------------------------- PARTIE RESUME ------------------------------------------------------->
    <div id="conteneur-resume">

        <!-- nombre d'user inscrit-->
        <div class="enfant-conteneur-resume">
            <h2>Nombre d'inscrit : </h2>
            <div><?= $_SESSION["total_user"]; ?></div>
        </div>



        <!-- nombre de message envoyé -->
        <div class="enfant-conteneur-resume">
            <h2>Nombre de message total : </h2>
            <div><?php echo(count($_SESSION['tab_message'])); ?></div>
        </div>

    </div>

    <!----------------------------------------------- PARTIE MESSAGE ------------------------------------------------------->

    <div class="flex-center"><button id="afficher_message">Afficher les message</button></div>


    <div id="conteneur_mail">
        <div id="message">
            <?php foreach ($_SESSION['tab_message'] as $message) : ?>
            <ul>
                <li><?= $message ?></li>
            </ul>
            <?php endforeach; ?>

        </div>

        <div id="message">
            <?php foreach ($_SESSION['tab_email'] as $message) : ?>
            <ul>
                <li><?= $message ?></li>
            </ul>
            <?php endforeach; ?>
        </div>


        <div id="titre">
            <?php foreach ($_SESSION['tab_titre'] as $message) : ?>
            <ul>
                <li><?= $message ?></li>
            </ul>
            <?php endforeach; ?>
        </div>

    </div>
    </div>

    <!----------------------------------------------- UPDATE texte  ------------------------------------------------------->

    <div class="flex-center">
        <button id="afficher-modif-home">
            Afficher : modifier texte
        </button>
    </div>


    <div id="conteneur-home">
        <form action="model/update.php" method="POST">

            <select name="choice" id="texte-logo">


                <!-- logo texte -->
                <?php 
                  $max = count($logo_texte)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $logo_texte[$i]["value"] ?>"><?php echo $logo_texte[$i]["value"] ?></option>

                <?php }?>



                <!-- home_texte -->
                <?php 
                  $max = count($home_texte)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $home_texte[$i]["value"] ?>"><?php echo $home_texte[$i]["value"] ?></option>

                <?php }?>


                <!-- hover_projet_texte -->
                <?php 
                  $max = count($hover_projet_texte)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $hover_projet_texte[$i]["value"] ?>">
                    <?php echo $hover_projet_texte[$i]["value"] ?></option>

                <?php }?>


                <!-- $about_me_texte -->
                <?php 
                  $max = count($about_me_texte)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $about_me_texte[$i]["value"] ?>"><?php echo $about_me_texte[$i]["value"] ?>
                </option>

                <?php }?>

                <!-- $contact_text -->
                <?php 
                  $max = count($contact_texte)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $contact_texte[$i]["value"] ?>"><?php echo $contact_texte[$i]["value"] ?>
                </option>

                <?php }?>


                <!-- $contact_text -->
                <?php 
                  $max = count($competence_texte)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $competence_texte[$i]["value"] ?>">
                    <?php echo $competence_texte[$i]["value"] ?></option>

                <?php }?>




            </select>
            <!-- entrez du nom  -->
            <p>
                <label for="value">value :</label>
                <textarea name="value" id="value" cols="30" rows="10"></textarea>
            </p>

            <!-- envoie des données -->
            <div>
                <input type="submit" value="Envoyer le formulaire">
            </div>

        </form>



    </div>





    <!----------------------------------------------- UPDATE photo  ------------------------------------------------------->

    <div class="flex-center">
        <button id="afficher-modif-photo">
            Afficher : modifier photo
        </button>
    </div>


    <div id="conteneur-photo">
        <form action="model/update.php" enctype="multipart/form-data" method="POST">

            <select name="choice" id="texte-logo">

                <!-- logo texte -->
                <?php 
                  $max = count($logo_img)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $logo_img[$i]["name"] ?>"><?php echo $logo_img[$i]["name"] ?></option>

                <?php }?>



                <!-- reseaux_img -->
                <?php 
                  $max = count($reseaux_img)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $reseaux_img[$i]["name"] ?>"><?php echo $reseaux_img[$i]["name"] ?>
                </option>

                <?php }?>

                <!-- gif_home_img -->
                <?php 
                  $max = count($gif_home_img)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $gif_home_img[$i]["name"] ?>"><?php echo $gif_home_img[$i]["name"] ?>
                </option>

                <?php }?>
                <!-- competence_img -->
                <?php 
                  $max = count($competence_img)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $competence_img[$i]["name"] ?>">
                    <?php echo $competence_img[$i]["name"] ?></option>

                <?php }?>



                <!-- $about_me_img -->
                <?php 
                  $max = count($about_me_img)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $about_me_img[$i]["name"] ?>"><?php echo $about_me_img[$i]["name"] ?>
                </option>

                <?php }?>



                <!-- $hover_projet_img -->
                <?php 
                  $max = count($hover_projet_img)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $hover_projet_img[$i]["name"] ?>"><?php echo $hover_projet_img[$i]["name"] ?>
                </option>

                <?php }?>




            </select>
            <!-- entrez du nom  -->
            <p>
                <label for="name">name :</label>
                <input type="file" name="name" id="name">
            </p>

            <!-- envoie des données -->
            <div>
                <input type="submit" value="Envoyer le formulaire">
            </div>

        </form>
    </div>
    <!----------------------------------------------- mdifier projet  ------------------------------------------------------->


    <div class="flex-center">
        <button id="afficher-modif-projet">
            Afficher : modifier projet
        </button>
    </div>


    <div id="conteneur-mdofier-projet">
        <form action="model/modifier_projet.model.php" enctype="multipart/form-data" method="POST">
            <select name="id_projet" id="id_projet">
                <?php 
                  $max = count($statement_result_projet)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $statement_result_projet[$i]["id_projet"] ?>">
                    <?php echo $statement_result_projet[$i]["name"] ?>
                </option>

                <?php }?>

            </select>

            <label for="name">name :</label>
            <input required="required" type="text" name="name" id="name">

            <label for="description">description :</label>
            <input required="required" type="text" name="description" id="description">

            <label for="annee">annee :</label>
            <input required="required" type="number" name="annee" id="annee">

            <label for="temps">temps :</label>
            <input required="required" type="texte" name="temps" id="temps">

            <label for="media">media :</label>
            <input required="required" type="file" name="media" id="media">

            <label for="link">link :</label>
            <input required="required" type="text" name="link" id="link">

            <!-- input submit -->
            <input type="submit" value="Envoyer le formulaire">

        </form>
    </div>




    <!----------------------------------------------- Ajouter projet  ------------------------------------------------------->
    <!-- formulaire ajouter projet -->
    <div class="flex-center">
        <button id="afficher-ajout-projet">
            Afficher : ajouter projet
        </button>
    </div>

    <div id="conteneur-ajouter-projet">
        <form action="model/insert_projet.model.php" enctype="multipart/form-data" method="POST">
            <select name="practice" id="practice">
                <option value="10">DEV FRONT</option>
                <option value="11">DESIGN GRAPHIQUE</option>
                <option value="12">UI DESIGN</option>
                <option value="13">ANIMATION & VIDÉO</option>
                <option value="14">DEV BACK</option>

            </select>

            <label for="name">name :</label>
            <input required="required" type="text" name="name" id="name">

            <label for="description">description :</label>
            <input required="required" type="text" name="description" id="description">

            <label for="annee">annee :</label>
            <input required="required" type="number" name="annee" id="annee">

            <label for="temps">temps :</label>
            <input required="required" type="texte" name="temps" id="temps">

            <label for="media">media :</label>
            <input required="required" type="file" name="media" id="media">

            <label for="link">link :</label>
            <input required="required" type="text" name="link" id="link">

            <!-- input submit -->
            <input type="submit" value="Envoyer le formulaire">

        </form>
    </div>
    <!----------------------------------------------- supprimer projet ------------------------------------------------------->
    <div class="flex-center">
        <button id="afficher-supprimer-projet">
            Afficher : supprimer projet
        </button>
    </div>
    <div id="conteneur-supprimer-projet">
        <form action="model/delete_projet.model.php" enctype="multipart/form-data" method="POST">
            <select name="id_projet" id="id_projet">
                <?php 
                  $max = count($statement_result_projet)-1;
                  for ($i = 0; $i <= $max; $i++) {
        ?>
                <option value="<?php echo $statement_result_projet[$i]["id_projet"] ?>">
                    <?php echo $statement_result_projet[$i]["name"] ?>
                </option>

                <?php }?>

            </select>

            <!-- input submit -->
            <input type="submit" value="Supprimer le projet">

        </form>



        <footer></footer>
        <script defer src="view/assets/script/dahsbord.js"></script>
</body>

</html>