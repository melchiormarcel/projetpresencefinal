<?php $title = "Acceuil"; ?>

<?php ob_start(); ?>
<?php include_once('includes/nav.php') ?>

<section class="container py-2 mx-4">
  <h5 id="dev">Developpement Web & Mobile</h5><br>
  <img class="img-fluid rounded mx-auto d-block w-100" src="../assets/img/image.png">

</section>

<section class="container py-2 mx-4">
  <div class="row">
    <div class="col-4">
      <h2>Marquer sa présence</h2>
      <h5 style="font-size: 10px">cliquez sur une date dans le calendrier</h5>
    </div>
    <div class="col-8">
      <div id="calendar"></div>
    </div>
  </div>
</section>

<footer class="bg-black pad">

  <div class="container">

    <div class="row justify-content-center " style="box-sizing: border-box;">
      <div class="col-lg-4 col-md-12 " style="padding: 0px 15px;position: relative;padding-right: 15px;padding-left: 15px">
        <h2 class="titreinf">Informations</h2><br>
        <div><span class="bg-green text-capitalize footer-title">WhatsApp:</span><br>
          <a href="" style="text-decoration:none;"><b class="goat">+229-54-15-59-34</b></a><br> <br>
        </div><br>

        <div><span class="bg-green text-capitalize footer-title">Email:</span><br>
          <a href="" style="text-decoration:none;"><b class="goat">contact@gmail.com</b></a>
        </div> <br> <br>

        <div><span class="bg-green text-capitalize footer-title">Adresse:</span><br><b style="color: white;">Aibatin 2
            Cotonou, BENIN</b>
        </div><br> <br> <br> <br>
      </div>

      <div class="col-lg-8 col-md-12 ">
        <div class=" part2">
          <p class="line"></p>
          <div class="contact">
            <span class="couleurcontact">Contact</span>
            <h3 class="quest">Avez vous des questions ? Posez-les</h3>
          </div>
          <form>
            <div style="box-sizing: border-box">
              <div class="row col-lg-12 col-md-12 bordure">
                <!--Champ nom et prenom-->
                <div class="col-lg-12 col-md-12">

                  <form action="" method="post">

                    <label for="name" class="fw-bold"></label>
                    <input type="text" class="champs" id="name" class="bg-dark" name="name" placeholder="Nom et prenom">
                </div>

                <div class="col-lg-12 col-md-12">
                  <label for="email" class="fw-bold"></label>
                  <input type="email" class="champs" id="email" class="bg-dark" name="email" placeholder="Email">
                </div>
                <div class="col-lg-12 col-md-12">
                  <label for="objet" class="fw-bold"></label>
                  <input type="text" class="champs" id="objet" class="bg-dark" name="objet" placeholder>

                </div>
                <div class="col-lg-12 col-md-12">
                  <label for="message"></label>
                  <textarea cols="40" rows="10" name="message" id="message" class=" area" placeholder="Message"></textarea>

                </div>

                <div class="case">
                  <input type="checkbox" name="cocher" value="cocher"> &nbsp;En cochant cette case, vous acceptez
                  notre <a href="">Condition</a> et nos <a href="">Politiques de confidentialité</a>
                </div>


                <div class=""><button class="btn btn-primary main-color-btn" id="button">Envoyez</button></div>

          </form>
          <?php if (!empty($erreur)) { ?>;
          <div id="erreur">
            <?= $erreur ?>
          </div>
        <?php } ?>

        </div>
      </div>

    </div>
  </div>

</footer>


<?php $content = ob_get_clean(); ?>



<?php require('template/layout.php') ?>