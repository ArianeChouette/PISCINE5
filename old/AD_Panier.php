<?php
	session_start();
    header( 'content-type: text/html; charset=utf-8' );

	$database = "vente";
	$db_handle = mysqli_connect('localhost','root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	// Création du panier
	if(!isset($_SESSION["panier"])) {
		$_SESSION['panier']=array();
      	$_SESSION['panier']['id'] = array();
      	$_SESSION['panier']['prix'] = array();
        $_SESSION['panier']['qte'] = array()
    }
    
	$action = isset($_GET["action"])?$_GET["action"]:"";
	$id_article = isset($_GET["id_article"])?$_GET["id_article"]:"";
	$prix = isset($_POST["prix"])?$_POST["prix"]:"";

	if($action == "ajout") {
		//Si le produit existe déjà on ajoute seulement la quantité
		$positionProduit = array_search($id_article,  $_SESSION['panier']['id']);

		if ($positionProduit !== false) //Si $positionProduit est différent de false ou n'est pas un booléan
		{
			$_SESSION['panier']['qte'][$positionProduit] += 1 ;
		}
		else
		{
			//Sinon on ajoute le produit
			array_push($_SESSION['panier']['id'], $id_article);
			array_push($_SESSION['panier']['prix'], $prix);
		}

	} else if($action == "supprimer") {
		$tmp=array();
		$tmp['id'] = array();
		$tmp['prix'] = array();

		for($i = 0; $i < count($_SESSION['panier']['id']); $i++)
		{
			if ($_SESSION['panier']['id'][$i] !== $id_article)
			{
				array_push($tmp['id'],$_SESSION['panier']['id'][$i]);
				array_push($tmp['prix'],$_SESSION['panier']['prix'][$i]);
			}

		}
		//On remplace le panier en session par notre panier temporaire à jour
		$_SESSION['panier'] =  $tmp;
		//On efface notre panier temporaire
		unset($tmp);
	}
?>


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
  <link rel="stylesheet" type="text/css" href="Panier_CSS.css">
  <link href="Accueil_Client.html" rel="stylesheet" type="text/html" />
  <link href="Vente_HTML.html" rel="stylesheet" type="text/html" />
  <link href="Panier_HTML.html" rel="stylesheet" type="text/html" />

                <title>Panier</title>

</head>

<body>

    <!--Création de la barre supérieure-->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">

          <!-- Création du bouton ECE Enchères-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="ECE_Encheres_HTML.html">ECE Enchères</a>   <!--Bouton ECE Enchères-->
        </div>
        <!-- Fin du bouton ECE-->

          <!-- Ajout des boutons sur la barre de navigation-->
          <div class="collapse navbar-collapse" >
            <!--Création d'une liste pour ajouter x bouttons-->
            <ul class="nav navbar-nav">
              <li><a href="Vente_HTML.html">Vendre</a></li>
              <li><a href="Achat_HTML.html">Acheter</a></li>
              <li><a href="Accueil_Client.html">Mon compte</a></li>
            </ul>
            <!--Fin des boutons sur la barre de recherche-->

          <!--Insertion du panier-->
          <form class="navbar-form navbar-right">
            <button class="btn btn-default" type="button">
              <a href="Panier_HTML.html">Panier <img src="panier.jpg" style="height:20px; width: 20px;"></a>
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

      <header style="text-align: center;">
        <h2><span id="A">①</span> - ② - ③</h2>
        <p><small> Panier  --  Livraison  --  Paiement</small></p>


        <div class="row">


        <div class="Articles col-sm-7">
          <h2 class="active"><strong>Mon panier</strong></h2>
          <div class="row well">
            <p>Photo de l'article + description + prix</p>
            <td><input type="number" name="Quantité" placeholder="Quantité" required></td>
          </div>

        </div>

        <div class="Total col-sm-4">

          <h2><strong>Total de la commande</strong></h2>

          <div class="row well">

            <h4>Nombre d'articles :</h4><br>
            <h4> Prix total :</h4><br>

            <!--Bouton de validation du panier-->
            <button class="btn"><a href="Paiement_HTML.html">Valider mon panier</a></button>
          </div>

        </div>

        </div>

      </header>

<br><br><br><br><br><br><br><br><br>

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
            <p><small> 2020 Copyright | Droit d'auteur: Zakaria, Hubert, Ariane</small></p>
          </div>
          <!--Fin Copyright-->

        </div>
      </div>


      </footer>
      <!--Fin du footer-->

  </body>

</html>