<?php
 if (  (!empty($_POST["numero"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["date"]))&&(!empty($_POST["sexe"]))&&(!empty($_POST["niveau"]))  )  
   {
    $lien_retou_liste_etudiant ="";
    $lien_retou_liste_etudiant = "<a href=\"http://localhost/OUMARMAREGA002/projetc/action_search_stu.php\"> Liste des etudiants </a>";
    if (file_exists("fichier/etudiant.txt"))  
    {

               $fp = fopen("fichier/etudiant.txt","r");
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
               $chaine_a_inserer ="";
               $nouvelle_ligne ="";
               $nouvelle_ligne = $_POST["numero"]."|".$_POST["nom"]."|".$_POST["prenom"]."|".$_POST["date"]."|".$_POST["sexe"]."|".$fichier."|".$_POST["niveau"];  
              $cpt = 0;
               while(!feof($fp))
                {
                     $ligne = fgets($fp,1024);
                     if (!empty($ligne)) {
                       
                                                  $cpt++;

                           $t = array();
                           $t = explode("|",$ligne);

                           if ($t[0]==$_POST["numero"])  {

                               if ($cpt==1) $chaine_a_inserer = $nouvelle_ligne."\r\n";
                               else $chaine_a_inserer = $chaine_a_inserer.$nouvelle_ligne."\r\n";;

                           } // fin de if ($t[0]==$_POST["nom"])
                           else {

                              if ($cpt==1) $chaine_a_inserer = $ligne;
                              else $chaine_a_inserer = $chaine_a_inserer.$ligne;

                           } // fin de else de if ($t[0]==$_POST["numero"])                       
                   

                     } // fin de if (!empty($ligne)) 

               } // fin de while(!feof($fp))
               fclose($fp);


               $fp = fopen("fichier/etudiant.txt","w+");

               if ($fp) {
                   
                   fwrite($fp,$chaine_a_inserer);
                   
                   echo "<br> Les informations de l'etudiant $nouvelle_ligne ont été bien modifiées <br><br>";

                   echo  $lien_retou_liste_etudiant;

               } // fin de if ($fp)

              fclose($fp);


    } // fin de if (file_exists("fichier/etudiant.txt"))
    else echo " Le fichier n'existe pas dans le répertoire <br>";
 } // fin de if (!empty($_POST["numero"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["age"]))

?>