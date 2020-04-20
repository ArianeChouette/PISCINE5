<?php

// Insertion code init
 $title = "Admin";
  include("include/init.php");

  if(!isConnect() || $currentUser["admin"] == 0){
      header("Location: index.php");
  }

//suppression d'un user
 if(isset($_GET["delete_user"]) && !empty($_GET["delete_user"])){
     $id = $_GET["delete_user"];
     $req = "DELETE FROM utilisateurs WHERE id = '$id'";
     $result = mysqli_query($bdd, $req);
     if($result){
         header("Location: admin.php");
         die();
     } else {
         echo "Error description: " . mysqli_error($bdd);
     }
 }
//suppression d'une vente
 if(isset($_GET["delete_objet"]) && !empty($_GET["delete_objet"])){
     $id = $_GET["delete_objet"];
     $req = "DELETE FROM objets WHERE id = '$id'";
     $result = mysqli_query($bdd, $req);
     if($result){
         header("Location: admin.php");
         die();
     } else {
         echo "Error description: " . mysqli_error($bdd);
     }
 }


// Requête de récupération des données de l'utilisateur
  $info = mysqli_query($bdd, "SELECT * FROM utilisateurs");

  $vente = mysqli_query($bdd, "SELECT * FROM objets");


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
          <button class="btn"><a href="admin.php?delete_user=<?= $data["id"] ?>">Supprimer le compte</a></button></p></li>
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
        €<button class="btn"><a href="admin.php?delete_objet=<?= $data["id"] ?>">Supprimer la vente</a></button></p></li>
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
