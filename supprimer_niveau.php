<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="newstyle.css">
<?php

   if (!empty($_POST["tabnumero"])) $tabnumero = $_POST["tabnumero"];
   else $tabnumero = array();

   if (count($tabnumero) == 0) 
   {
     
      echo "<font color='red'><b> Vous devez cocher au moins une case avant de cliquer sur le bouton supprimer </b></font><br>";
      echo "<a href=\"javascript:history.go(-1)\"> Recommencer </a>";
      exit;
   }
                   if (file_exists("fichier/niveau_etude.txt"))  
                   {
                         $fp = fopen("fichier/niveau_etude.txt","r");

                         $compt = 0;
                         $lignetrouvee ="";
                         while(!feof($fp)) {

                            $ligne = fgets($fp,1024);

                            if (!empty($ligne)) {

                                        $t = array();
                                        $t = explode("|",$ligne);

                                        if (in_array($t[0], $tabnumero)) 
                                        {

                                             $compt++;

                                             $niveau ="";
                                             $niveau = $t[1];
                                             $numero =0;
                                             $numero = $t[0];

                                             if ($compt==1) $lignetrouvee = $t[0]."|".$t[1];
                                             else $lignetrouvee = $lignetrouvee."<br>".$t[0]."|".$t[1];
                                                                                   
                                        } // fin de if (in_array($t[0], $tabnumero))                  

                            } // fin de if (!empty($ligne)) 

                         } // fin de while(!feof($fp)) {

                         fclose($fp);

                   } // fin de if (file_exists("fichier/employe.txt"))
                   else echo " Le fichier n'existe pas dans le répertoire <br>";

                   

?>
<form method="post" action="action_del_level.php">
  
     <?php

        for ($k=0; $k < count($tabnumero); $k++)
        echo "<input type=\"hidden\" name=\"tabnumero[]\" value=".$tabnumero[$k].">";    
        
        if ($compt==1) echo " Voulez-vous réellement supprimer le niveau d'etude ci-dessus : $lignetrouvee <br><br>"; 
        else echo " Voulez-vous réellement supprimer les niveaux d'etude ci-dessus : <br> $lignetrouvee <br><br>";
     ?>

     <input type="submit" class="sendButton" name="valeur" value="Non"> &nbsp;&nbsp;&nbsp;&nbsp;
     <input type="submit" class="sendButton" name="valeur" value="Oui">

</form>





