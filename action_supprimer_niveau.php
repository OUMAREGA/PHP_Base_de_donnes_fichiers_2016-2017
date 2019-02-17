<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
  
 
 if ($_POST["valeur"]=='Oui')  {

   if (!empty($_POST["tabnumero"])) $tabnumero = $_POST["tabnumero"];
   else $tabnumero = array();


   if (file_exists("fichier/niveau_etude.txt"))  {

    $lien_retou_liste_niveau ="";
    $lien_retou_liste_niveau = "<a href=\"http://localhost/OUMARMAREGA002/projetc/action_search_level.php\"> Liste des niveaux d'etudes </a>";

               $fp = fopen("fichier/niveau_etude.txt","r");

               $chaine_a_inserer ="";

               $cpt = 0;
               $nouveau_numero = 0;
               $ligne_a_supprimer ="";
               $compt = 0;
               while(!feof($fp)) {

                     $ligne = fgets($fp,1024);

                     if (!empty($ligne)) {
                       $cpt++;

                           $t = array();
                           $t = explode("|",$ligne);

                           if (in_array($t[0], $tabnumero))  {
                           $compt++;
                            
                              $niveau ="";
                              $niveau = $t[1];
                               
                              if ($compt==1) $ligne_a_supprimer = $t[0]."|".$t[1];
                              else $ligne_a_supprimer = $ligne_a_supprimer."<br>".$t[0]."|".$t[1];


                           } // fin de if ($t[0]==$_POST["nom"])
                           else {
                              
                              $nouveau_numero++; 
                              if ($cpt==1) $chaine_a_inserer = $nouveau_numero."|".$t[1];
                              else $chaine_a_inserer = $chaine_a_inserer.$nouveau_numero."|".$t[1];

                           }                        

                     } // fin de if (!empty($ligne)) 

               } // fin de while(!feof($fp))
               fclose($fp);


               $fp = fopen("fichier/niveau_etude.txt","w+");

               if ($fp) {
                   fwrite($fp,$chaine_a_inserer);

                   if ($compt==1) echo "<br> Les informations des niveaux d'etudes $ligne_a_supprimer ont été bien supprimées dans le fichier <br><br>"; 
                   else echo "<br> Les informations des niveaux d'etudes : <br> $ligne_a_supprimer <br> ont été bien supprimées dans le fichier <br><br>";

                   echo $lien_retou_liste_niveau;

               } // fin de if ($fp)

              fclose($fp);


    } // fin de if (file_exists("fichier/niveau_etude.txt"))
    else echo " Le fichier n'existe pas dans le répertoire <br>";


 } // fin de if (!empty($_POST["numero"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["age"]))
 else {
     
      echo "<a href=\"http://localhost/OUMARMAREGA002/projetc/action_search_level.php\"> Liste des niveaux d'etudes </a>";

 } // fin de else de if (!empty($_POST["numero"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["age"]))  


?>
