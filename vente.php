<?php
	$title = "vente";
	include("include/init.php");

    // Recpetion du formulaire et inscription de la personne
    if(!empty($_POST)){



      $nom = $_POST['nom'];
      $description = $_POST['description'];
      $prix = $_POST['prix'];
      $type = $_POST['type'];
      $cat = $_POST['cat'];
      $vendeurId = $currentUser["id"];

      $sql = "INSERT INTO objets (id_vendeur, nom, description, prix, type, cat) VALUES ('$vendeurId', '$nom', '$description', '$prix', '$type', '$cat')";
      $result = mysqli_query($bdd, $sql);

      if($result) {
        // Add avec success
        header("Location: account.php");
      } else {
        // Formulaire echec
				echo "Error description: " . mysqli_error($bdd);
      }
    }


    include("include/header.php");

?>
<body style="background-image: url('img/Fond_Vente.jpg'); background-size: 120%;">
      <script type="text/javascript">
      $(document).ready(function(){
        $('.headerV').height($(window).height());
        });
      </script>
      <div class="overlay1"></div>

      <!--Création d'un bloc de contenu-->
            <div class="VenteC text-center">

          <div class="row">
              <h2>Bienvenu dans l'espace de vente.</h2><br><br><br><br>

          <!--Première colonne de largeur 4/12-->
          <div class="COL1 col-sm-5 well" style="background-color: rgba(0, 0, 0, 0.1); margin-left: 7%; margin-right: 50px">

            <h3>Si vous souhaitez vendre un de vos objets c'est par ici que ça se passe !<br>
               Complétez intégralement le formulaire ci-dessous :</h3><br>
            <h4>*L'ensemble des champs est obligatoire</h4><br><br>

            <!--Champs du formulaire-->
            <form method="POST">
              <table>

                <!--Champs du nom-->
                <tr style="font-size: 16px">
                  <td><label>Nom de l'objet en vente :</label></td>
                  <td><input type="text" name="nom" placeholder="nom" required></td>
                </tr>

                <!--Champs de description-->
                <tr style="font-size: 16px">
                  <td><strong>Descriptions et caractéristiques :</strong></td>
                  <td><input type="description" name="Caracteristiques" rows=4 cols=50 placeholder:"Qualité/Défauts" style="margin-top: 10px; margin-left: 20px" required></td>
                </tr>

                <!--Champ du prix de l'objet-->
                <tr style="font-size: 16px">
                  <td><label>Prix :</label></td>
                  <td><input type="prix" name="prix" placeholder="€" style="margin-top: 10px" required></td>
                </tr>

                <!-- Sélection type de vente-->
                <tr style="font-size: 16px">
            			  <td><strong>Type de vente</strong></td>
            				<td>
            						<select name="type" style="margin-top: 10px">
													<option>Sélectionnez un type de vente</option>
													<?php foreach ($TYPE as $key => $value): ?>
														<option value="<?= $key ?>"><?= $value ?></option>
													<?php endforeach; ?>
            						</select>
            				</td>
            		</tr>

                <!--Sélection de la catégorie-->
                <tr style="font-size: 16px">
            			  <td><strong>Catégorie</strong></td>
            				<td>
            						<select name="cat" style="margin-top: 10px">
                                <option>Sélectionnez une catégorie</option>
																<?php foreach ($CAT as $key => $value): ?>
																	<option value="<?= $key ?>"><?= $value ?></option>
																<?php endforeach; ?>
            						</select>
            				</td>
            		</tr>

              </table>


            <!--Certification du vendeur-->
            <div>
                <input type="checkbox" name="Accepter" required>
                <label for="Accepter" style="font-size: 16px">J'atteste que les informations sont exactes.</label>
            </div>

            <!--Bouton de soumission de l'inscription-->
            <tr colspan="2">
                <td><input type="submit" name="vente" value="Mettre en vente"></td>
            </tr>


          <!--Fermeture de la 1ère colonne-->
        </form>
    </div>


          <!--Deuxième colonne de largeur 4/12-->
          <div class="COL2 col-sm-4" style="background-color: rgba(0, 0, 0, 0.1); margin-right: 7%; margin-left: 7%">
              <h3>Ajoutez une image et/ou des vidéos de votre objet sans plus tarder</h3>
              <img src="avatar.jpg" alt="Photo de profil" title="Votre photo" style="height:150px; widht: 110px"><br><br>
              <input type="file" name="image">
              <img src="avatar.jpg" alt="Photo de profil" title="Votre photo" style="height:150px; widht: 110px"><br><br>
              <input type="file" name="file">
              <img src="avatar.jpg" alt="Photo de profil" title="Votre photo" style="height:150px; widht: 110px"><br><br>
              <input type="file" name="file">
          </div>
          <!--Fermeture de la 2ème colonne-->

        </div>
      </div>
</body>

<?php
	include("include/footer.php");
 ?>
