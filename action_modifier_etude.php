<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
  
 
 if ( (!empty($_POST["numero"]))&&(!empty($_POST["niveau"])) )  {
 

    $lien_retou_liste_niveau ="";
    $lien_retou_liste_niveau = "<a href=\"http://localhost/OUMARMAREGA002/projetc/action_search_level.php\"> Liste des niveaux d'etudes </a>";

    if (file_exists("fichier/niveau_etude.txt"))  {

               $fp = fopen("fichier/niveau_etude.txt","r");

               $chaine_a_inserer ="";
               $nouvelle_ligne ="";
               $nouvelle_ligne = $_POST["numero"]."|".$_POST["niveau"];
               
               $cpt = 0;
               while(!feof($fp)) {

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


               $fp = fopen("fichier/niveau_etude.txt","w+");

               if ($fp) {
                   
                   fwrite($fp,$chaine_a_inserer);
                   
                   echo "<br> Les informations de l'employé $nouvelle_ligne ont été bien modifiées <br><br>";

                   echo  $lien_retou_liste_niveau;

               } // fin de if ($fp)

              fclose($fp);


    } // fin de if (file_exists("fichier/niveau_etude.txt"))
    else echo " Le fichier n'existe pas dans le répertoire <br>";


 } // fin de if (!empty($_POST["numero"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["age"]))
 else {

      if (empty($_POST["niveau"]))  echo " Vous n'avez pas saisi le nom <br>";

      echo "<a href=\"javascript:history.go(-1)\"> Recommencer </a>";
      
 } // fin de else de if (!empty($_POST["numero"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["age"]))  


?>
