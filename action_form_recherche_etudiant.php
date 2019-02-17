	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<?php

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


		 $fp = fopen("fichier/etudiant.txt","a+");

		 while(!feof($fp)) {

		    $ligne = fgets($fp,1024);

		    if (!empty($ligne)) 
		    {

				$t = array();
				$t = explode("|",$ligne);
                     if (!empty($_POST["nom"]) && empty($_POST["prenom"]) && empty($_POST["date"])) 
				     {



					 if (strtolower($t[1])==strtolower($_POST["nom"])) 
					 {

					       echo "<tr>";
					       for ($i=0; $i < count($t); $i++)
					       echo "<td>".$t[$i]."</td>";
					      
					       echo "<td><a href=\"modifier_etudiant.php?numero=".$t[0]."\"> Modifier </a></td>";
					       echo "<td><a href=\"supprimer_etudiant.php?numero=".$t[0]."\"> Supprimer </a></td>";
					       echo "</tr>";
					 
					 } // fin de if ($t[0]==$_POST["nom"])

				      } // fin de if (($_POST["nom"])&&(!$_POST["prenom"])) 1

				       elseif ( !empty($_POST["nom"]) && !empty($_POST["prenom"]) && empty($_POST["date"])  ) 
				     {



					 if(strtolower($t[1])==strtolower($_POST["nom"])&&strtolower($t[2])==strtolower($_POST["prenom"]))  
					 {

					       echo "<tr>";
					       for ($i=0; $i < count($t); $i++)
					       echo "<td>".$t[$i]."</td>";
					      
					       echo "<td><a href=\"modifier_etudiant.php?numero=".$t[0]."\"> Modifier </a></td>";
					       echo "<td><a href=\"supprimer_etudiant.php?numero=".$t[0]."\"> Supprimer </a></td>";
					       echo "</tr>";
					 
					 } // fin de if ($t[0]==$_POST["nom"])

				      } // fin de if (($_POST["nom"])&&(!$_POST["prenom"])) 2
				      elseif ( !empty($_POST["nom"]) && empty($_POST["prenom"]) && !empty($_POST["date"])  ) 
				     {



					 if (strtolower($t[1])==strtolower($_POST["nom"])&&strtolower($t[3])==strtolower($_POST["date"]))  
					 {

					       echo "<tr>";
					       for ($i=0; $i < count($t); $i++)
					       echo "<td>".$t[$i]."</td>";
					      
					       echo "<td><a href=\"modifier_etudiant.php?numero=".$t[0]."\"> Modifier </a></td>";
					       echo "<td><a href=\"supprimer_etudiant.php?numero=".$t[0]."\"> Supprimer </a></td>";
					       echo "</tr>";
					 
					 } // fin de if ($t[0]==$_POST["nom"])

				      } // fin de if (($_POST["nom"])&&(!$_POST["prenom"])) 3
                      
                      elseif ( empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["date"])  ) 
				     {



					 if (strtolower($t[2])==strtolower($_POST["prenom"])&& strtolower($t[3])==strtolower($_POST["date"]))  
					 {

					       echo "<tr>";
					       for ($i=0; $i < count($t); $i++)
					       echo "<td>".$t[$i]."</td>";
					      
					       echo "<td><a href=\"modifier_etudiant.php?numero=".$t[0]."\"> Modifier </a></td>";
					       echo "<td><a href=\"supprimer_etudiant.php?numero=".$t[0]."\"> Supprimer </a></td>";
					       echo "</tr>";
					 
					 } // fin de if ($t[0]==$_POST["nom"])

				      } // fin de if (($_POST["nom"])&&(!$_POST["prenom"])) 4
                     
                      elseif ( empty($_POST["nom"]) && empty($_POST["prenom"]) && !empty($_POST["date"])  ) 
				     {



					 if (strtolower($t[1])==strtolower($_POST["date"]))  
					 {

					       echo "<tr>";
					       for ($i=0; $i < count($t); $i++)
					       echo "<td>".$t[$i]."</td>";
					      
					       echo "<td><a href=\"modifier_etudiant.php?numero=".$t[0]."\"> Modifier </a></td>";
					       echo "<td><a href=\"supprimer_etudiant.php?numero=".$t[0]."\"> Supprimer </a></td>";
					       echo "</tr>";
					 
					 } // fin de if ($t[0]==$_POST["nom"])

				      } // fin de if (($_POST["nom"])&&(!$_POST["prenom"])) 5

                      elseif ( empty($_POST["nom"]) && !empty($_POST["prenom"]) && empty($_POST["date"])  ) 
				     {



					 if (strtolower($t[2])==strtolower($_POST["prenom"]))  
					 {

					       echo "<tr>";
					       for ($i=0; $i < count($t); $i++)
					       echo "<td>".$t[$i]."</td>";
					      
					       echo "<td><a href=\"modifier_etudiant.php?numero=".$t[0]."\"> Modifier </a></td>";
					       echo "<td><a href=\"supprimer_etudiant.php?numero=".$t[0]."\"> Supprimer </a></td>";
					       echo "</tr>";
					 
					 } // fin de if ($t[0]==$_POST["nom"])

				      } // fin de if (($_POST["nom"])&&(!$_POST["prenom"])) 6


                      else 
				      {

					       echo "<tr>";
					       for ($i=0; $i < count($t); $i++)
					       echo "<td>".$t[$i]."</td>";

					       echo "<td><a href=\"modifier_etudiant.php?numero=".$t[0]."\"> Modifier </a></td>";
					       echo "<td><a href=\"supprimer_etudiant.php?numero=".$t[0]."\"> Supprimer </a></td>";
					       echo "</tr>";


				      } // fin de else
				//

					      

		    } // fin de if (!empty($ligne))

		 } // fin de while(!feof($fp)) {

		 
		 echo "</table>";
		 fclose($fp);

	   } // fin de if (file_exists("fichier/employe.txt"))
	   else echo " Le fichier n'existe pas dans le répertoire <br>";

	   
	?>
