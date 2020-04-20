<?php
	$title = "Livraison";
	include("include/init.php");
	include("include/header.php");
?>

<body style="text-align: center;">
<h2><span id="A">① - ② </span>- ③</h2>
        <p><small> Panier  --  Livraison  --  Paiement</small></p>

        <h3 style="text-decoration: underline;">Veuillez compléter l'adresse de livraison :</h3>
        <p>*L'ensemble des champs est obligatoire</p><br>

        <!--Création du cadre pour saisir les informations de livraison-->
        <div class="Paiement row">

        <!--Formulaire à remplir par l'acheteur-->
        <form>
          <table>

            <!--Champs du nom-->
            <tr>
              <td><label>Nom :</label></td>
              <td><input type="text" name="Nom" placeholder="Nom" style="margin-bottom: 7px;" required="required"></td>
            </tr>

            <!--Champs du prénom-->
            <tr>
              <td><label>Prénom :</label></td>
              <td><input type="text" name="Prénom" placeholder="Prénom" style="margin-bottom: 7px;" required="required"></td>
            </tr>

            <!--Champs de la date de naissance-->
            <tr>
              <td><label>Téléphone : </label></td>
              <td><input type="tel" name="Number" placeholder="Number" style="margin-bottom: 7px;" required="required"></td>
            </tr>

            <!--Champs de l'adresse-->
            <tr>
              <td><label>N° de voie</label></td>
              <td><input type="text" name="Numero de voie" placeholder="N° de voie" style="margin-bottom: 7px;" required="required"></td>
              <td><input type="text" name="Type de voie" placeholder="Rue, Boulevard..." style="margin-bottom: 7px;" required="required"></td>
              <td><input type="text" name="Complément" placeholder="Bâtiment, étage..." style="margin-bottom: 7px;" required="required"></td>
              <td><input type="number" name="Code postal" placeholder="Code postal" style="margin-bottom: 7px;" required="required"></td>
            </tr>

            <!--Champ Pays-->
            <tr>
              <td><label>Pays :</label></td>
              <td><input type="country" name="Pays" placeholder="Pays" style="margin-bottom: 7px;" required="required"></td>
            </tr>

            <!--Champs de l'adresse e-mail-->
            <tr>
              <td><label>E-Mail :</label></td>
              <td><input type="mail" name="Mail" placeholder="E-mail" required></td>
            </tr>

          </table>
        </form>

      </div>

      <!--Bouton de validation de l'adresse-->
      <br><br>
      <button class="btn"><a href="paiment.php">Valider mes coordonnées</a></button>

</body>

<?php
	include("include/footer.php");
 ?>