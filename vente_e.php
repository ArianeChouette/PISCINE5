<?php
header( 'content-type: text/html; charset=utf-8' );
//Si l'utilisateur est un acheteur il faut le réorienter sur la page connexion vendeur avec un MessageFormatte
//Ou l'inciter à se créer un compte vendeur

  //Nomination de la base :
  $database="inscription";

  //Connexion de la BDD :
  $db_handle = mysqli_connect('localhost', 'root', '');
  $db_found = mysqli_select_db($db_handle, $database);

  // Déclaration des variables :
  $ID=$_POST['ID'];
  $Nom=$_POST['Nom'];
  $Description=$_POST['Description'];
  $Prix=$_POST['Prix'];
  $Quantite=$_POST['Quantite'];
  $Temps=$_POST['Temps'];
  $Photo=$_POST['Photo'];
  $Type=$_POST['Type'];
  $Categorie=$_POST['Categorie'];
  $error = "";



  // Conditions à respecter pour enregistrement dans la BDD :

  if($Nom == "")
    {
      $error .= "Nom vide<br />";
    }

  if($Description == "")
    {
      $error .= "Description vide<br />";
    }

  if(($Prix < "0")||($Prix == ""))
    {
      $error .= "Prix incorrect<br />";
    }

  if(($Quantite < 0)||($Quantite == 0)||($Quantite == ""))
    {
      $error .= "Quantité incorrecte<br />";
    }

  if($Temps == "Sélectionnez une durée de vente")
    {
      $error .= "Sélectionnez une durée<br />";
    }

  if($Photo == "")
    {
      $error .= "Ajoutez au moins une photo<br />";
    }

  if($Type == "Sélectionnez un type de vente")
    {
      $error .= "Sélectionnez un type de vente<br />";
    }

  if($Categorie == "Sélectionnez une catégorie")
    {
      $error .= "Sélectionnez une catégorie<br />";
    }

//Si toutes les conditions sont remplies (ie toutes les cases sont remplies) alors on enregistre la vente
  else {

    $sql = "INSERT INTO vente(ID, Nom, Description, Prix, Quantite, Temps, Photo, Type, Categorie) VALUES('$ID', '$Nom', '$Description', '$Prix', '$Quantite', '$Temps', '$Photo', '$Type', '$Categorie')";
    $result = mysqli_query($db_handle, $sql);
            echo "Vente mise en ligne." . "<br>";
       }

?>
