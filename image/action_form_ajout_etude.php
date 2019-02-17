<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
  
 if ((!empty($_POST["niveau"]))) {

   $lien_retour ="";
   $lien_retour = "<a href=\"http://localhost/projet1/form_ajout_etude.php\"> Saisir un autre etudiant </a>";

   if (file_exists("fichier/niveau_etude.txt"))  
   {
             
              // Je compte le nombre de ligne non vide dans le fichier
              $fp1 = fopen("fichier/niveau_etude.txt","r");
              $cpt = 0;
              while(!feof($fp1)) {
                
                $lignesse = fgets($fp1, 1024);

                if (!empty($lignesse)) { $cpt++; }
                else {;}

              } // fin de while(!feof($fp1))
              fclose($fp1);
              
               $cpt = $cpt + 1; // Pour saisir un nouvel etudiant, on incrémente le compteur.

               $fp = fopen("fichier/niveau_etude.txt","a");
            
               $ligne ="";
               $ligne = $cpt."|".$_POST["niveau"];
               
               fwrite($fp,$ligne);
               fwrite($fp,"\r\n");

               echo "<br> Les informations de l'etudiant $ligne ont été bien saisies dans le fichier <br><br>";

               echo  $lien_retour;

               fclose($fp);


    } // fin de if (file_exists("fichier/etudiant.txt"))
    else {

                $fp = fopen("fichier/niveau_etude.txt","w+");
           
                $cpt = 1; // C'est le premier enregistrement, donc $cpt peut être fixé à 1.
                $ligne ="";
                $ligne = $cpt."|".$_POST["niveau"];

                fwrite($fp,$ligne);
                fwrite($fp,"\r\n");

                echo "<br> Les informations de l'etudiant $ligne ont été bien saisies dans le fichier <br><br><br>";

                echo  $lien_retour;

                fclose($fp);

    } // fin de else de if (file_exists("fichier/etudiant.txt"))


 } // fin de if (!empty($_POST["numero"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["age"]))
?>
