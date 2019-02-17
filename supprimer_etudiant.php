<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
   if (!empty($_POST["tabnumero"])) $tabnumero = $_POST["tabnumero"];
   else $tabnumero = array();

   if (count($tabnumero) == 0) 
   {
     
      echo "<font color='red'><b> Vous devez cocher au moins une case avant de cliquer sur le bouton supprimer </b></font><br>";
      echo "<a href=\"javascript:history.go(-1)\"> Recommencer </a>";
      exit;
   }
   
                   if (file_exists("fichier/etudiant.txt"))  {

                         $fp = fopen("fichier/etudiant.txt","r");

                         $compt = 0;
                         $lignetrouvee ="";
                         
                         while(!feof($fp)) {

                            $ligne = fgets($fp,1024);
                            $fichier="";
               if ( (!empty($_FILES["fichier"]["name"])))
                {
                 if (move_uploaded_file($_FILES["fichier"]["tmp_name"],"image/".$_FILES["fichier"]["name"])) 
                 {
                   $fichier=$_FILES["fichier"]["name"];
                   $fichier="<img src=image/$fichier width=50 height=50 />";
                 }
               }
               else
                $fichier="Pas de photo";

                            if (!empty($ligne)) {

                                        $t = array();
                                        $t = explode("|",$ligne);

                                        if (in_array($t[0], $tabnumero)) {

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
                                             if ($compt==1) $lignetrouvee = $t[0]."|".$t[1]."|".$t[2]."|".$t[3]."|".$t[4]."|".$t[5]."|".$t[6];
                                             else $lignetrouvee = $lignetrouvee."<br>".$t[0]."|".$t[1]."|".$t[2]."|".$t[3]."|".$t[4]."|".$t[5]."|".$t[6];
                                                                                   
                                        } // fin de if (in_array($t[0], $tabnumero))                  

                            } // fin de if (!empty($ligne)) 

                         } // fin de while(!feof($fp)) {

                         fclose($fp);

                   } // fin de if (file_exists("fichier/employe.txt"))
                   else echo " Le fichier n'existe pas dans le répertoire <br>";

                   

?>

<form method="post" action="action_del_stu.php">
  
     <?php

        for ($k=0; $k < count($tabnumero); $k++)
        echo "<input type=\"hidden\" name=\"tabnumero[]\" value=".$tabnumero[$k].">";    
        
        if ($compt==1) echo " Voulez-vous réellement supprimer l'employé : $lignetrouvee <br><br>"; 
        else echo " Voulez-vous réellement supprimer les employés : <br> $lignetrouvee <br><br>";
     ?>

     <input type="submit" name="valeur" value="Non"> &nbsp;&nbsp;&nbsp;&nbsp;
     <input type="submit" name="valeur" value="Oui">

</form>





