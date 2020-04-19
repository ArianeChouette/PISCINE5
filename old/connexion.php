<?php

// $bdd = new PDO("mysqlhost:localhost; dbname=inscription", "root", "");

// $pseudo =$_POST['mail'];
// $verif=$bdd->query("SELECT Pseudo FROM client WHERE Pseudo='$pseudo'");
// $req=$verif;
    // nom de la base de donnees
	$database="inscription";
    //connexion base de donnees
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    // declaration des variables
    $pseudo=$_POST['mail'];
    $motdepasse=$_POST['mdp'];
    $statut_bdd=$_POST['Statut'];
    // requetes
    $sql1 = "SELECT * FROM client WHERE Pseudo='$pseudo'";
    $result1=mysqli_query($db_handle, $sql1);
    $sql2 = "SELECT * FROM client WHERE MDP='$motdepasse' AND Pseudo='$pseudo'";
	$result2=mysqli_query($db_handle, $sql2);
	$sql3 = "SELECT * FROM client WHERE STATUT='$statut_bdd' AND Pseudo='$pseudo' AND MDP='$motdepasse'";
	$result3 = mysqli_query($db_handle, $sql3);

    // test presence du client
if(mysqli_num_rows($result1)==false || mysqli_num_rows($result2)==false || mysqli_num_rows($result3)==false)
{
	echo "pseudo pas vu";
}
else
{
	echo 'pseudo vu !!!!!!!';
}

?>

