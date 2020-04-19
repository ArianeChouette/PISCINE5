<?php

    // Nom de la BDD :
    $database="inscription";

    // Connexion de la BDD :
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

    // Déclaration des variables utiles :
    $Statut=$_POST['Statut'];

    // Requêtes :
    $sql1 = "SELECT Statut FROM client WHERE &Statut="Vendeur"";
    $R1=mysqli_query($db_handle, $sql1);

    $sql2 = "SELECT Statut FROM client WHERE &Statut="Administrateur"";
    $R2=mysqli_query($db_handle, $sql2);

    $sql3 = "SELECT Statut FROM client WHERE &Statut="Acheteur"";
    $R3=mysqli_query($db_handle, $sql3);

    // Test et affiliation en fonction du résultat :

    /*Cas d'un utilisateur vendeur :*/
    if ($R1=="Vendeur") {
      header('Location: http://localhost/piscine/Vente_HTML.html');
      exit();
    }

    else ($R2=="Vendeur") {
      header('Location: http://localhost/piscine/Accueil_Administrateur_HTML.html');
      exit();
    })

    else if ($R2=="Administrateur") {
      header('Location: file:///C:/Users/choue/OneDrive/Desktop/html/Piscine_Hubert/Achat_HTML.html');
      exit();
    })
?>
