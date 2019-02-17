<?php
$fp= fopen("fichier/etudiant.txt","r");
while (!feof($fp)) // file end of => si le fichier n'est pas fermé .
     {
          
          $cptm=0;
          $cptf=0;
          $ligne="";
          $ligne=fgets($fp,1024); // Utilisé pour lire les fichiers line by line
          if (!empty($ligne)) 
          {
               if(!empty($_POST["sexe"]))
               {
                   if ( strtolower('F')== strtolower($_POST["sexe"]) )
                {
                  $cptf++;
                }
                   elseif ( strtolower('M')== strtolower($_POST["sexe"]) )
                    $cptm++;
               }
               
          }
     }
     fclose($fp);
     echo "Sexe femini:$cptf";
     echo"<br>";
     echo "Sexe masculin:$cptm";
?>