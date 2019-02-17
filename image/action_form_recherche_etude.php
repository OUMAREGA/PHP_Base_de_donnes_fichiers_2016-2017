		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<?php
		echo "<form action=\"supprimer_niveau_new.php\" method=\"post\">";
		   if (file_exists("fichier/niveau_etude.txt"))  
		   {
			   echo "<table border=1>";
			   echo "<tr>";
			   echo "<td> Numéro </td>";
			   echo "<td> niveau etude </td>";
			   echo "<td> Action </td>";
			   echo "<td><input type=\"submit\" name=\"supprimer\" value=\"Supprimer\"></td>"; 
			   echo "</tr>";
			   $fp=fopen("fichier/niveau_etude.txt","a+");
			while(!feof($fp))
			{
			         $ligne=fgets($fp,1024);
			         if(!empty($ligne)) 
			           {
					       $t=array();
					       $t=explode("|",$ligne);
			               if(!empty($_POST["niveau"]))
					          {
						         if($t[1]==$_POST["niveau"])
						           {
						              echo "<tr>";
						               for ($i=0; $i < count($t); $i++)
						                   echo "<td>".$t[$i]."</td>";    
						                   echo "<td><a href=\"modifier_etude.php?numero=".$t[0]."\"> Modifier </a></td>";
						                   echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
						              echo "</tr>";
						            } // fin de if ($t[0]==$_POST["niveau"])

					         } // fin de if (($_POST["niveau"]  
						   else
					      {
						       echo "<tr>";
						       for ($i=0; $i < count($t); $i++)
						       echo "<td>".$t[$i]."</td>";
						       echo "<td><a href=\"modifier_etude.php?numero=".$t[0]."\"> Modifier </a></td>";
						       echo "<td><input type=\"checkbox\" name=\"tabnumero[]\" value=".$t[0]."></td>";
						       echo "</tr>";
					      } // fin de else
		           }
			} 
			 echo "</table>";
			 fclose($fp);
		   } // fin de if (file_exists("fichier/niveau_etude.txt"))
		   else echo " Le fichier n'existe pas dans le répertoire <br>";
		?>