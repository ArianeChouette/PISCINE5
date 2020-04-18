<!DOCTYPE html>
<html>

<head>

  <!--Chargement des modules nécessaires-->
  <meta charset="utf-8" />
  <script type="text/javascript" src="fonction_champ_vide.js">  </script> <!--JavaScript-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  <!--Bootstrap-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  <!-- Jquery-->

  <!--Lien des différentes pages entre elles-->
  <link href="Accueil_Client.html" rel="stylesheet" type="text/html" />
  <link href="Vente_HTML.html" rel="stylesheet" type="text/html" />
  <link href="Panier_HTML.html" rel="stylesheet" type="text/html" />

  <link href="Formulaire_Inscription.php" rel="stylesheet" type="text/html" />
  <link rel="stylesheet" type="text/css" href="Formulaire_Acces_CSS.css">

                <title>Accueil</title>

</head>

<body>

  <!--Création de la barre supérieur-->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">

        <!-- Création du bouton ECE Enchères-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="AD_ECE_Encheres_HTML.html">ECE Enchères</a>   <!--Bouton ECE Enchères-->
      </div>
      <!-- Fin du bouton ECE-->

        <!-- Ajout des boutons sur la barre de navigation-->
        <div class="collapse navbar-collapse" >
          <!--Création d'une liste pour ajouter x bouttons-->
          <ul class="nav navbar-nav">
            <li><a href="AD_Vente_HTML.html">Vendre</a></li>
            <li><a href="AD_Achat_HTML.html">Acheter</a></li>
            <li><a href="Accueil_Administrateur_HTML.html">Mon compte</a></li>
          </ul>
          <!--Fin des boutons sur la barre de recherche-->

        <!--Insertion du panier-->
        <form class="navbar-form navbar-right">
          <button class="btn btn-default" type="button">
            <a href="AD_Panier_HTML.html">Panier <img src="panier.jpg" style="height:20px; width: 20px;"></a>
          </button>
        </form>
        <!--Fin insertion du panier-->

        <!-- Création de la barre de recherche-->
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group input-group">
            <input type="text" class="form-control" placeholder="Rechercher un article">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
          </div>
        </form>
        <!--Fin de la barre de recherche-->
        </div>
      </div>
    </nav>
    <!--Fin de la barre supérieure-->
<form action="connexion.php" method="POST">
    <header class="FA">
    <!--Mise en place de la supersposition avec l'image COL1-->
      <script type="text/javascript">
      $(document).ready(function(){
        $('.FA').height($(window).height());
        });
      </script>
      <div class="overlay"></div>  <!--Superposition sur le fond d'écran-->


    <!--Création d'un espace pour le texte à superposer-->
    <div class="Texte_Superpose well" style="top: 35%">
      <h1>Identification :</h1>
      <p>Si vous possédez déjà un compte identifiez vous ci-dessous.<br>
         Si c'est votre première connexion afin de créer un compte,<a href="Formulaire_Inscription.php" title="Créer un compte" target="_blank"> cliquez ici</a></p>

      <!-- Création du formulaire d'accès en fonction du statut : Admin/Acheteur/Vendeur-->
      <div class="Acces" style="padding-left: 18%;">
      <form>
      <table>

      <!--Partie Pseudo-->
      <tr>
        <td><label>Pseudo ou E-mail :</label></td>
        <td><input type="text" name="mail" placeholder="E-mail" style="color: black" required></td>
      </tr>

      <!--Partie MDP-->
      <tr>
         <td>Mot de passe:</td>
         <td><input type="password" name="mdp" placeholder="Mot de passe" style="color: black; margin-top: 10px" required></td>
      </tr>

      <!--Partie Statut avec choix de ce que l'on est-->
      <tr>
          <td>Statut</td>
          <td>
      <select name="Statut" style="color: black; margin-top: 10px" required>
              <option>Choisir un statut</option>
              <option>Administrateur</option>
              <option>Vendeur</option>
              <option>Acheteur</option>
      </select>
           </td>
      </tr>

          <!--Bouton soumission-->
          <br><br>
          <tr colspan="2">
            <div class="button">
            <td><input type="submit" name="Connnexion" value="Connexion" style="color: black; margin-top: 10px"></td>
            </div>
          </tr>
        </div>
      </div>

      </table>
      </form>
</form>
</header>

    <!--Footer = bas de page-->
    <footer class="page-footer" style="background: black; color: white">

      <!--Création d'un cadre d'écriture-->
      <div class="container">
      <div class="row">

        <!--Cadre Nous contacter-->
        <div class="col-lg-8 col-md-8 col-sm-12">
          <h3><strong>Nous contacter :</strong></h3><br>
          <ul>
            <li>Par <a href="mailto:ece.encheres@gmail.com">mail</a></li>
            <li>Par téléphone : 01-37-94-53-81</li>
          </ul>
        </div>
        <!--Fin cadre Nous contacter-->

        <!--Création Copyright-->
        <div class="col-lg-8 col-md-8 col-sm-12 text-right">
          <p> 2020 Copyright | Droit d'auteur: Zakaria, Hubert, Ariane</p>
        </div>
        <!--Fin Copyright-->

      </div>
      </div>

    </footer>
    <!--Fin du footer-->

</body>

</html>
