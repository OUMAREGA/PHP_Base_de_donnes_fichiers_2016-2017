<?php
$extension_liste = array('.png', '.gif', '.jpg', '.jpeg','.JPG');


      if (!empty($_FILES['fichier']['name'])) // si c'est non vide
      {

                 // strrchr, fonction PHP qui récupère la partie de la chaine à partir du dernier . pour connaître l'extension.
                 $extension_fichier = strrchr($_FILES['fichier']['name'], '.');


				 // is_uploaded_file, fonction PHP qui permet de tester si le fichier uploadé est bien dans le dossier temporaire
				 if (is_uploaded_file($_FILES['fichier']['tmp_name'])) {  


				     // in_array, fonction PHP qui permet de tester si l'élément à gauche figure dans la liste à droite
				     if(!in_array($extension_fichier, $extension_liste)) //Si l'extension n'est pas dans le tableau
				     {
				         echo ' Vous devez uploader un fichier de type png, gif, jpg, jpeg <br>';
				     
				     } // fin de if(!in_array($extension, $extensions))
				     else { 

							if (move_uploaded_file($_FILES["fichier"]["tmp_name"], "image/".$_FILES["fichier"]["name"])) {

							  /*	echo " Le fichier a été déplacé dans le dossier de destination appelé fichier <br><br>";

								echo " Je peux afficher le fichier déplacée : <br><br>";*/

								echo "<img src=\"image/".$_FILES["fichier"]["name"]."\" width=150 height=150>";

							} // fin de if (move_uploaded_file($_FILES["fichier"]["tmp_name"], "fichier/".$_FILES["fichier"]["name"]))

							else echo " Erreur, le fichier n'a pas été déplacé dans le dossier de destination appelé fichier <br>";

					 } // fin de else de if(!in_array($extension, $extensions))

				  } // fin de if (is_uploaded_file($_FILES['fichier']['tmp_name']))
				  else {

				     echo " Le fichier est introuvable dans le dossier temporaire (trop gros ?) <br>";
				  
				  } // fin de else de if (is_uploaded_file($_FILES['fichier']['tmp_name']))

		} // fin de if (!empty($_FILES['fichier']['name']))
		else {

		    echo "Pas de photo<br>";
				  
		} // fin de else de if (!empty($_FILES['fichier']['name']))


?>