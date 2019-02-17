<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
   $lien_retour ="";
   $lien_retour = "<a href=\"http://localhost/projet1/form_ajout_etudiant.php\"> Saisir un autre etudiant </a>";
   if (file_exists("fichier/etudiant.txt"))  
   {        
              // Je compte le nombre de ligne non vide dans le fichier
              $fp1 = fopen("fichier/etudiant.txt","r");
              $cpt = 0;
              while(!feof($fp1)) {
                $lignesse = fgets($fp1, 1024);
                if (!empty($lignesse)) { $cpt++; }
                else {;}
              } // fin de while(!feof($fp1))
              fclose($fp1);
               $cpt = $cpt + 1; // Pour saisir un nouvel etudiant, on incrémente le compteur.
               $fp = fopen("fichier/etudiant.txt","a");
               $fichier="";
               if ( (!empty($_FILES["fichier"]["name"])))
                {
                 if (move_uploaded_file($_FILES["fichier"]["tmp_name"],"image/".$_FILES["fichier"]["name"])) 
                 {
                   $fichier=$_FILES["fichier"]["name"];
                   $fichier="<img src=image/$fichier width=100 height=50 />";
                 }
               }
               else
                $fichier="Pas de photo";
               $ligne ="";
               $ligne=$cpt."|".$_POST["nom"]."|".$_POST["prenom"]."|".$_POST["date"]."|".$_POST["sexe"]."|".$fichier."|".$_POST["niveau"];
               fwrite($fp,$ligne);
               
               echo "<br> Les informations de l'etudiant $ligne ont été bien saisies dans le fichier <br><br>";
               echo  $lien_retour;
               fclose($fp);
    } // fin de if (file_exists("fichier/etudiant.txt"))
    else {
                $fp=fopen("fichier/etudiant.txt","w+");
                $cpt=1; // C'est le premier enregistrement, donc $cpt peut être fixé à 1.
                $ligne="";
                $ligne=$cpt."|".$_POST["nom"]."|".$_POST["prenom"]."|".$_POST["date"]."|".$_POST["sexe"]."|".$fichier."|".$_POST["niveau"];
                fwrite($fp,$ligne);
                echo "<br> Les informations de l'etudiant $ligne ont été bien saisies dans le fichier <br><br><br>";
                echo  $lien_retour;
                fclose($fp);
    } // fin de else de if (file_exists("fichier/etudiant.txt"))

?>