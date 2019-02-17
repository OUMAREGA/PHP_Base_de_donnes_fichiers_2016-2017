<?php
   
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
               while(!feof($fp))
                {
                   $lignesse = fgets($fp, 1024);
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
             }
               $cptf = 0;
              $cptm = 0;
               if ( strtolower("F")== strtolower($_POST["sexe"]) )
                {
                  $cptf++;
                }
                elseif ( strtolower("M")== strtolower($_POST["sexe"]) )
                {
                  $cptm++;
                }
                echo" Sexe feminin: $cptf ";
                echo" Sexe Masculin: $cptm ";
    } // fin de if (file_exists("fichier/etudiant.txt"))

?>