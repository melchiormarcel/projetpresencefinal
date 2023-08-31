<?php

session_start();
$idsession= session_id();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="50;url=inscription.php">
  <title>Formulaire d'Inscription</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/js/bootstrap.min.js" rel="stylesheet">
  <link href="bootstrap/css/all.css" rel="stylesheet">
  <script>
        function majuscule(inputElement) {
            inputElement.value = inputElement.value.toUpperCase();
        };
        function maj1erelettre(inputElement) {
    inputElement.value = inputElement.value.replace(/\b\w/g, c => c.toUpperCase());
}

    </script>
</head>

<body class="bg-success">


  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6 ">
        <form action="../../backend/eleves/create.php" method="post" class="border p-4 bg-light">
          <?php if (isset($_SESSION['success_message']) && isset($_SESSION['type'])) {

            echo '<div class="alert alert-'.$_SESSION['type'].'" role="alert">
            '.$_SESSION['success_message'].'
          </div>' ;
          unset($_SESSION['success_message']);
          unset($_SESSION['type']);
            ?> 
          <?php } ?>
          
          <h1 class="col-md-3 mx-auto">Inscription</h1>
        
          <div class="mb-3">
            <label for="nom" class="form-label"> Nom
              <img src="icone/file-person.svg" />:
            </label>
            <input type="text" class="form-control" id="nom" name="nom" oninput="majuscule(this)" required>
          </div>
          <div class="mb-3">
            <label for="prenom" class="form-label">Prénoms
              <img src="icone/file-person.svg" />:
            </label>
            <input type="text" class="form-control" id="prenom" name="prenom" oninput="maj1erelettre(this)" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Sexe</label>

            <div class="mb-3">
              <input class="form-check-input" type="radio" name="sexe" id="sexeHomme" value="Homme " required>
              <label class="form-check-label" for="sexeHomme"> M
              </label>
            </div>
            <div class="mb-3">
              <input class="form-check-input" type="radio" name="sexe" id="sexeFemme" value="Femme" required>
              <label class="form-check-label" for="sexeFemme">
                F
              </label>
            </div>
          </div>
          <div class="mb-3">
            <label for="nationalite" class="form-label">Nationalité <img src="icone/map.svg" />:</label>
            <input type="text" class="form-control" id="nationalite" name="nationalite" value="Bénin" required>
          </div>
          <div class="mb-3">
            <label for="dateNaissance" class="form-label">Date de Naissance:</label>
            <input type="date" class="form-control" id="dateNaissance" name="dateNaissance"  required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail <img src="icone/envelope.svg"></label>
            <input type="email" class="form-control" id="email" name="email" value="@gmail.com" required>
          </div>
          <div class="mb-3">
            <label for="contact" class="form-label">Contact <img src="icone/telephone.svg" />:</label>
            <input type="tel" class="form-control" id="contact" name="contact" required>
          </div>
          <div class="col-md-3 mx-auto">
            <button type="submit" class="btn btn-primary ">Envoyer</button>
          </div>

          <div class="col-md-5 mx-auto mt-2">
          <a href="../../backend/eleves/studentslist.php" class="btn btn-success " >Voir la liste des élèves</a>
          </div>

        </form>
      </div>
    </div>
  </div>


  <?php require_once "../../backend/eleves/includes/copyright.php";?>





</body>

</html>