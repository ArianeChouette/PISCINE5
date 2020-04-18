<?php
    // nom de la base de donnees
    $database="inscription";
    //connexion base de donnees
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
//declaration des variables
    $Statut=$_POST['Statut'];
    $Nom=$_POST['Nom'];
    $Prenom=$_POST['Prénom'];
    $date_naiss=$_POST['DateN'];
    $Mail=$_POST['Mail'];
    $Pseudo=$_POST['Pseudo'];
    $MDP=$_POST['MDP'];
// Pour l'adresse
    $Num=$_POST["Numerodevoie"];
    $Type=$_POST["Typedevoie"];
    $Complement=$_POST["Complément"];
    $Code=$_POST["Codepostal"];
    $Adresse=$Num .'-'.$Type. '-' .$Complement. '-'.$Code;

    $sql = "INSERT INTO client (date_naissance, Nom, Prenom, Mail, Adresse, Pseudo, MDP, STATUT) VALUES('$date_naiss', '$Nom', '$Prenom', '$Mail', '$Adresse', '$Pseudo', '$MDP', '$Statut')";
    $result = mysqli_query($db_handle, $sql);
        echo "Add successful." . "<br>";


?>
