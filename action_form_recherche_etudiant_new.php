<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
echo "<form action=\"del_stu.php\" method=\"post\">";
   
   if (file_exists("fichier/etudiant.txt"))  {

      echo "<table border=1>";
      echo "<tr>";
      echo "<td> Numéro </td>";
      echo "<td> Nom    </td>";
      echo "<td> Prénom </td>";
      echo "<td> Date de naissance </td>";
      echo "<td> Sexe </td>";
      echo "<td> Photo </td>";
      echo "<td> Niveau étude </td>";
      echo "<td> Action </td>";
      echo "<td><input type=\"submit\" name=\"supprimer\" value=\"Supprimer\"></td>"; 
      echo "</tr>";


         $fp = fopen("fichier/etudiant.txt","a+");

         while(!feof($fp)) {

            $ligne = fgets($fp,1024);

            if (!empty($ligne)) {

                        $t = array();
                        $t = explode("|",$ligne);




                             if ( (!empty($_POST["nom"])) && (empty($_POST["prenom"])) && (empty($_POST["date"])) )
                             {


                                 if ($t[1]==$_POST["nom"])  
                                 {

                                       echo "<tr>";
                                       for ($i=0; $i < count($t); $i++)
                                       echo "<td>".$t[$i]."</td>";
                                      
                                       echo "<td><a href=\"modify_stu.php?numero=".$t[0]."\"> Modifier </a></td>";
                                       echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
                                       echo "</tr>";
                                 
                                } // fin de if ($t[0]==$_POST["nom"])

                              } // fin de if (($_POST["nom"])&&(!$_POST["prenom"]))  
                              elseif ( (!empty($_POST["nom"])) && (!empty($_POST["prenom"])) && (empty($_POST["date"]))  )  {

                                 if( ($t[1]==$_POST["nom"]) && ($t[2]==$_POST["prenom"]) )   {

                                       echo "<tr>";
                                       for ($i=0; $i < count($t); $i++)
                                       echo "<td>".$t[$i]."</td>";
                                       
                                       echo "<td><a href=\"modify_stu.php?numero=".$t[0]."\"> Modifier </a></td>";
                                       echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
                                       echo "</tr>";
                                 
                                 } // fin de if ($t[0]==$_POST["nom"])

                              } // fin de elseif (($_POST["nom"])&&(!$_POST["prenom"]))     
                              elseif ( (!empty($_POST["nom"])) && (empty($_POST["prenom"])) && (!empty($_POST["date"]))  ) {


                                  if ( ($t[1]==$_POST["nom"]) && ($t[3]==$_POST["date"]) ) {

                                       echo "<tr>";
                                       for ($i=0; $i < count($t); $i++)
                                       echo "<td>".$t[$i]."</td>";

                                       echo "<td><a href=\"modify_stu.php?numero=".$t[0]."\"> Modifier </a></td>";
                                       echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
                                       echo "</tr>";

                                 
                                 } // fin de (($t[0]==$_POST["nom"])&&($t[1]==$_POST["prenom"]))

                              
                              } // fin de elseif (($_POST["nom"])&&($_POST["prenom"]))
                              elseif ( (empty($_POST["nom"])) && (!empty($_POST["prenom"])) && (!empty($_POST["date"]))  ) 
                 {



                if ( ($t[2]==$_POST["prenom"]) && ($t[3]=$_POST["date"]) ) 
                {

                      echo "<tr>";
                      for ($i=0; $i < count($t); $i++)
                      echo "<td>".$t[$i]."</td>";
                     
                      echo "<td><a href=\"modify_stu.php?numero=".$t[0]."\"> Modifier </a></td>";
                      echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
                      echo "</tr>";
                
                } // fin de if ($t[0]==$_POST["nom"])

                  } // fin de if (($_POST["nom"])&&(!$_POST["prenom"])) 4
                     
                      elseif ( (empty($_POST["nom"])) && (empty($_POST["prenom"])) && (!empty($_POST["date"]))  ) 
                 {



                if ($t[3]==$_POST["date"])  
                {

                      echo "<tr>";
                      for ($i=0; $i < count($t); $i++)
                      echo "<td>".$t[$i]."</td>";
                     
                      echo "<td><a href=\"modify_stu.php?numero=".$t[0]."\"> Modifier </a></td>";
                      echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
                      echo "</tr>";
                
                } // fin de if ($t[0]==$_POST["nom"])

                  } // fin de if (($_POST["nom"])&&(!$_POST["prenom"])) 5

                      elseif ( (empty($_POST["nom"]))&&(!empty($_POST["prenom"])) && (empty($_POST["date"]))  ) 
                 {



                if ($t[2]==$_POST["prenom"])  
                {

                      echo "<tr>";
                      for ($i=0; $i < count($t); $i++)
                      echo "<td>".$t[$i]."</td>";
                     
                      echo "<td><a href=\"modify_stu.php?numero=".$t[0]."\"> Modifier </a></td>";
                      echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
                      echo "</tr>";
                
                } // fin de if ($t[0]==$_POST["nom"])

                  } // fin de if (($_POST["nom"])&&(!$_POST["prenom"])) 6
                  elseif ( (!empty($_POST["nom"])) && (!empty($_POST["prenom"])) && (!empty($_POST["date"]))  ) {


                                  if ( ($t[1]==$_POST["nom"]) && ($t[2]==$_POST["prenom"]) && ($t[3]==$_POST["date"]) ) {

                                       echo "<tr>";
                                       for ($i=0; $i < count($t); $i++)
                                       echo "<td>".$t[$i]."</td>";

                                       echo "<td><a href=\"modify_stu.php?numero=".$t[0]."\"> Modifier </a></td>";
                                       echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
                                       echo "</tr>";

                                 
                                 } // fin de (($t[0]==$_POST["nom"])&&($t[1]==$_POST["prenom"]))

                              
                              } // fin de elseif (($_POST["nom"])&&($_POST["prenom"]))


                      else 
                  {

                      echo "<tr>";
                      for ($i=0; $i < count($t); $i++)
                      echo "<td>".$t[$i]."</td>";

                      echo "<td><a href=\"modify_stu.php?numero=".$t[0]."\"> Modifier </a></td>";
                      echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
                      echo "</tr>";


                  } // fin de else
            //

                     

          } // fin de if (!empty($ligne))

       } // fin de while(!feof($fp)) {

       
       echo "</table>";
       fclose($fp);

      } // fin de if (file_exists("fichier/etudiant.txt"))
      else echo " Le fichier n'existe pas dans le répertoire <br>";
      echo "</form>";
      
   ?>
