<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
  
 if ($_POST["valeur"]=='Oui')  {

   if (!empty($_POST["tabnumero"])) $tabnumero = $_POST["tabnumero"];
   else $tabnumero = array();


   if (file_exists("fichier/etudiant.txt"))  {

    $lien_retou_liste_employe ="";
    $lien_retou_liste_employe = "<a href=\"http://localhost/OUMARMAREGA002/projetc/action_search_stu.php\"> Liste des etudiants </a>";

               $fp = fopen("fichier/etudiant.txt","r");

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
                            
                                             $nom ="";
                                             $nom = $t[1];
                                             $prenom = "";
                                             $prenom = $t[2];
                                             $date=0;
                                             $date = $t[3];
                                             $sexe ="";
                                             $sexe = $t[4];
                                             $fichier ="";
                                             $fichier = $t[5];
                                             $niveau ="";
                                             $niveau = $t[6];
                               
                              if ($compt==1) $ligne_a_supprimer = $t[0]."|".$t[1]."|".$t[2]."|".$t[3]."|".$t[4]."|".$t[5]."|".$t[6];
                              else $ligne_a_supprimer = $ligne_a_supprimer."<br>".$t[0]."|".$t[1]."|".$t[2]."|".$t[3]."|".$t[4]."|".$t[5]."|".$t[6];


                           } // fin de if ($t[0]==$_POST["nom"])
                           else {
                              
                              $nouveau_numero++; 
                              if ($cpt==1) $chaine_a_inserer = $nouveau_numero."|".$t[1]."|".$t[2]."|".$t[3]."|".$t[4]."|".$t[5]."|".$t[6];
                              else $chaine_a_inserer = $chaine_a_inserer.$nouveau_numero."|".$t[1]."|".$t[2]."|".$t[3]."|".$t[4]."|".$t[5]."|".$t[6];

                           }                        

                     } // fin de if (!empty($ligne)) 

               } // fin de while(!feof($fp))
               fclose($fp);


               $fp = fopen("fichier/etudiant.txt","w+");

               if ($fp) {
                   fwrite($fp,$chaine_a_inserer);

                   if ($compt==1) echo "<br> Les informations de l'etudiant $ligne_a_supprimer ont été bien supprimées dans le fichier <br><br>"; 
                   else echo "<br> Les informations des etudiants : <br> $ligne_a_supprimer <br> ont été bien supprimées dans le fichier <br><br>";

                   echo $lien_retou_liste_employe;

               } // fin de if ($fp)

              fclose($fp);


    } // fin de if (file_exists("fichier/employe.txt"))
    else echo " Le fichier n'existe pas dans le répertoire <br>";


 } // fin de if (!empty($_POST["numero"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["age"]))
 else {
     
      echo"<a href=\"http://localhost/OUMARMAREGA002/projetc/action_search_stu.php\"> Liste des etudiants </a>";

 } // fin de else de if (!empty($_POST["numero"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["age"]))  


?>
