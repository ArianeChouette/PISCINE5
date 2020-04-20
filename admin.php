<?php

// Insertion code init
  include("include/init.php");

// Foncction de récupération ID
// Si visite profil d'un vendeur/acheteur
  if(!empty($_GET["id"])){
    $user = getUser($_GET["id"]);
    $title = "Profil";
  }
// Si visite de son propre profil
  else {
    $title = "Mon compte";
    $user = $currentUser;
  }

// Requête de récupération des données de l'utilisateur
  $user_id = $user["id"];
  $info = mysqli_query($bdd, "SELECT * FROM utilisateurs");

  $vente = mysqli_query($bdd, "SELECT * FROM objets");

  $user_role = mysqli_query($bdd, "SELECT admin FROM utilisateurs WHERE id = '$user_id'");

//Insertion de la barre navigateur sur la page
  include("include/header.php");

?>



<!-- Séparation de l'écran en plusieurs cadres/colonnes-->
<div class="container text-center">

      <h1 id="Admin">Administrateur</h1>

  <div class="row">

    <!-- Première séparation de l'écran de manière horizontale = CADRE 1, occupe 3/12ème de la largeur-->

    <!--Gestion des comptes acheteurs par l'utilisateur-->
    <div class="GA col-sm-5 well">

        <h3><strong>Gestion des</strong></h3>
        <h3 id="EGA">comptes utilisateurs :</h3>
        <ul>
        <?php while ($data = mysqli_fetch_array($info)): ?>
          <li><?= $data["pseudo"] ?> : <?= $data["mail"] ?> à <?= $data["id"] ?>
          <button class="btn"><a href="#">Supprimer le compte</a></button></p></li>
        <?php endwhile;?>
      </ul>
    </div>
    <!--Fin du cadre de gauche-->

    <!--Cadre de droite-->
    <!--Gestion des ventes en cours par l'administrateur-->
    <div class="DR col-sm-5 well">

      <h3><strong>Gestion des</strong></h3>
      <h3 id="EDR">ventes en cours :</h3>
      <ul>
      <?php while ($data = mysqli_fetch_array($vente)): ?>
        <li><?= $data["nom"] ?> : <?= $data["id"] ?> à <?= $data["prix"] ?>
        €<button class="btn"><a href="admin.php?delete=<?= $data["id"] ?>">Supprimer la vente</a></button></p></li>
      <?php endwhile;?>
    </ul>

    </div>
    <!--Fin du cadre de droite-->



  </div>


</div>




<?php

  // Insertion footer sur la page account
  include("include/footer.php");

 ?>
