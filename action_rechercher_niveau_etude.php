<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <title>recherche de niveau</title>
   </head>
<body>
<center>
 
<?php
echo "<form action=\"del_level.php\" method=\"post\">";
   
   if (file_exists("fichier/niveau_etude.txt"))  {

          

         echo "<table border=1>";
         echo "<tr>";
         echo "<td> Numéro </td>";
         echo "<td> libelle </td>";
         echo "<td> Action </td>";
         echo "<td><input type=\"submit\" name=\"supprimer\" value=\"Supprimer\"></td>"; 
         echo "</tr>";


         $fp = fopen("fichier/niveau_etude.txt","a+");
         while(!feof($fp)) {

            $ligne = fgets($fp,1024);

            if (!empty($ligne)) {

                        $t = array();
                        $t = explode("|",$ligne);



                             if ((!empty($_POST["niveau"]))) {
                              $compare=trim($t[1]);
                              $entrez=trim($_POST["niveau"]);

                                 if ( strtolower($compare)== strtolower( $entrez)) {

                                       echo "<tr>";
                                       for ($i=0; $i < count($t); $i++)
                                       echo "<td>".$t[$i]."</td>";
                                      
                                       echo "<td><a href=\"modify_level.php?numero=".$t[0]."\"> Modifier </a></td>";
                                       echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
                                       echo "</tr>";
                                 
                                 }

                              }   
                              else {

                                       echo "<tr>";
                                       for ($i=0; $i < count($t); $i++)
                                       echo "<td>".$t[$i]."</td>";

                                       echo "<td><a href=\"modify_level.php?numero=".$t[0]."\"> Modifier </a></td>";
                                       echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
                                       echo "</tr>";


                              } // fin de else


            } // fin de if (!empty($ligne)) 

         } // fin de while(!feof($fp)) {

         
         echo "</table>";
         fclose($fp);

   } // fin de if (file_exists("fichier/employe.txt"))
   else echo " Le fichier n'existe pas dans le répertoire <br>";

   
?>
 
 </center> 
</body>
</html>