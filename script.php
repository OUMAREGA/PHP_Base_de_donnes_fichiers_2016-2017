<?
   if (file_exists("fichier/etudiant.txt"))
   {
     echo "<table border=1>";
     echo "<tr>";
     echo "<td> Numéro </td>";
     echo "<td> Nom </td>";
     echo "<td> Prénom </td>";
     echo "<td> Date de naissance </td>";
     echo "<td> Sexe </td>";
     echo "<td> Photo </td>";
     echo "<td> Niveau etude </td>";
     echo "<td> Action </td>";
     echo "<td> Action </td>"; 
     echo "</tr>";        
              // Je compte le nombre de ligne non vide dans le fichie
              $fp1 = fopen("fichier/etudiant.txt","r");
              $cpt = 0;
              $cptf = 0;
              $cptm = 0;
              while(!feof($fp1)) {
                $lignesse = fgets($fp1, 1024);
                if (!empty($lignesse)) { $cpt++; }
                else {;}
              } // fin de while(!feof($fp1))
              fclose($fp1);
               $cpt = $cpt + 1;
               $fp = fopen("fichier/etudiant.txt","r"); 
               while(!feof($fp1)) 
               {
               if(!empty($_POST["sexe"]))
               {
                if ( strtolower('F')== strtolower($_POST["sexe"]) )
                {
                  $cptf++;
                }
                elseif ( strtolower('M')== strtolower($_POST["sexe"]) )
                {
                  $cptm++;
                }

               }
               fclose($fp);
               echo" Sexe feminin: $cptf ";
                echo" Sexe Masculin: $cptm ";
    } // fin de if (file_exists("fichier/etudiant.txt"))
?>