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
  <link rel="stylesheet" type="text/css" href="Formulaire_Inscription_CSS.css">

  <title>Inscription</title>

</head>

<body>

  <form action="inscription.php" method="POST">

  <!-- Création du header = contenu de la page-->
  <header class="page-header header container-fluid">

    <!-- Le script permet la mise en place d'une image de fond, à personneliser avec CSS-->
      <script type="text/javascript">
      $(document).ready(function(){
        $('.header').height($(window).height());
        });
      </script>

      <div class="overlay"></div>  <!--Permet de superposer sur le fond d'écran-->
  </header>


  <div class="overlay"></div>

  <!--Création du formulaire-->
  <div class="Formulaire" style="text-align: center;">

    <h3>Complétez le formulaire suivant pour vous inscrire :</h3><br>

    <!--Champs du formulaire-->
    <form>
      <table>
        <p>L'ensemble des champs est obligatoire</p>

        <!-- Champ statut -->
        <tr>
          <td>Statut</td>
          <td>
          <select name="Statut">
            <option>Choisir un statut</option>
            <option>Vendeur</option>
            <option>Acheteur</option>
          </select>
          </td>
        </tr>

        <!--Champs du nom-->
        <tr>
          <td><label>Nom :</label></td>
          <td><input type="text" name="Nom" placeholder="Nom" required="required"></td>
        </tr>

        <!--Champs du prénom-->
        <tr>
          <td><label>Prénom :</label></td>
          <td><input type="text" name="Prénom" placeholder="Prénom" required="required"></td>
        </tr>

        <!--Champs de la date de naissance-->
        <tr>
          <td><label>Date de naissance : </label></td>
          <td><input type="date" name="DateN" placeholder="Date de naissance" required="required"></td>
        </tr>

        <!--Champs de l'adresse-->
        <tr>
          <td><label>Adresse</label></td>
          <td><input type="text" name="Numerodevoie" placeholder="N° de voie" required="required"></td>

          <td><input type="text" name="Typedevoie" placeholder="Rue, Boulevard..." required="required"></td>
          <td><input type="text" name="Complément" placeholder="Bâtiment, étage..." required="required"></td>

          <td><input type="number" name="Codepostal" placeholder="Code postal" required="required"></td>
        </tr>

        <!--Champs de l'adresse e-mail-->
        <tr>
          <td><label>E-Mail :</label></td>
          <td><input type="mail" name="Mail" placeholder="E-mail" required="required"></td>
        </tr>

        <!--Champs du pseudo de l'utilisateur-->
        <tr>
          <td><label>Pseudo :</label></td>
          <td><input type="text" name="Pseudo" placeholder="Pseudo" required="required"></td>
        </tr>

        <!--Champs du mot de passe-->
        <tr>
          <td><label>Mot de passe :</label></td>
          <td><input type="password" name="MDP" placeholder="Mot de passe" required="required"></td>
        </tr>

      </table>


    <!--Case d'acceptation de la charte-->
    <div>
        <input type="checkbox" name="Accepter" required="required">
        <label for="Accepter">J'accepte la charte du site</label>
    </div>

    <!--Permet l'accession à la charte-->
    <p>Pour aller à la charte, <a href="#charte">cliquez ici</a></p>

    <!--Bouton de soumission de l'inscription-->
    <tr colspan="2">
      <td><input type="submit" name="Inscription" value="Inscription"></td>
    </tr>

  </div>

  <!--Footer = bas de page-->
  <footer class="page-footer" style="background: black; color: white">

    <!--Création d'un cadre d'écriture-->
    <div class="container">
    <div class="row">

      <!--Cadre Nous contacter-->
      <div class="col-lg-8 col-md-8 col-sm-12">
        <h5><strong>Nous contacter :</strong></h5><br>
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
    <br><br><br><br><br><br>

<!-- Charte-->
  <p id="charte">En vous inscrivant sur le site vous acceptez les règles suivantes :</p>
  <ul>
    <li>Pour toute offre faite sur un article, vous vous engagez à verser la somme indiquée en cas d'acceptation du vendeur.</li>
    <li>Pour un achat en "Meilleure offre" il vous est possible de négocier 5 fois le prix. Après cela il ne vous sera plus possible de le faire.</li>
  </ul>
</form>


</body>

</html>
