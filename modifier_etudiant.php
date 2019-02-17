<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
   if($_GET["numero"]) $numero = $_GET["numero"];
   else $numero = 0;


   if (file_exists("fichier/etudiant.txt"))  
   {

         $fp = fopen("fichier/etudiant.txt","r");
        if ( (!empty($_FILES["fichier"]["name"])))
                {
                 if (move_uploaded_file($_FILES["fichier"]["tmp_name"],"image/".$_FILES["fichier"]["name"])) 
                 {
                   $fichier=$_FILES["fichier"]["name"];
                   $fichier="<img src=image/$fichier width=100 height=50 />";
                 }
               }
               else
                $fichier="Pas de photo"; 
         while(!feof($fp)) {

            $ligne = fgets($fp,1024);

            if (!empty($ligne)) {

                        $t = array();
                        $t = explode("|",$ligne);

                        if ($t[0]==$numero)  {

                         $nom ="";
                         $nom = $t[1];
                         $prenom = "";
                         $prenom = $t[2];
                         $date =0;
                         $date=$t[3];
                         $sexe = "";
                         $sexe = $t[4];
                         $fichier = "";
                         $fichier = $t[5];
                         $niveau="";
                         $niveau=$t[6];      
                        } // fin de if ($t[0]==$_POST["nom"])                        

            } // fin de if (!empty($ligne)) 

         } // fin de while(!feof($fp)) {

         
         echo "</table>";
         fclose($fp);
   } // fin de if (file_exists("fichier/employe.txt"))
   else echo " Le fichier n'existe pas dans le répertoire <br>";
?>
<link rel="stylesheet" type="text/css" href="newstyle.css">
<div class="wrap" >
    <div id="formulaire" >
        <form method="post" action="action_modify_stu.php" enctype="multipart/form-data">
        <input type="hidden" name="numero" value="<?php if (!empty($numero)) echo $numero; ?>"><br><br>
          <table width="500px" align="center"  >
       <tr><td width="250px" align="center" ><span>Nom</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text"  name="nom" value="<?php if (!empty($nom)) echo $nom; ?>"  autofocus  required  ></td></tr>
       <tr><td width="250px" align="center"  ><span>prenom</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" name="prenom" value="<?php if (!empty($prenom)) echo $prenom; ?>"  required ></td></tr>
       <tr><td width="250px" align="center"  ><span>Date de naissance</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="date" name="date" value="<?php if (!empty($date)) echo $date; ?>"   required ></td></tr>
       <tr>
       <td align="center" width="250px" height="70px"><span>Sexe</span></td>
       <td>
        <select name="sexe" required  value="<?php if (!empty($sexe)) echo $sexe; ?>" >
            <option >F</option>
            <option  >M</option>
        </select>
       </td>
       </tr>
       <tr>
       <td align="center" width="250px" height="70px"><span>Niveau etude</span></td>
            <td>
        <select name="niveau" required value="<?php if (!empty($niveau)) echo $niveau; ?>" >
            <?php
            $fop=fopen('fichier/niveau_etude.txt','r');
               while ($line=fgets($fop,250)) 
               {
                 $line=explode("|",$line);
                 echo "<option >".$line[1]."</option>";

               }
               fclose($fop);
            ?>
        </select>
       </td>
       </tr>
       <tr><td width="250px" align="center"  ><span>photo</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="file" name="fichier" value="<?php if (!empty($fichier)) echo $fichier; ?>" ></td></tr>
           <tr>
           <td align="center"><input class="sendButton" type="reset" name="annuler" value="ANNULER" ></td>
           <td align"center" ><input class="sendButton" type="submit" name="envoyer" value="MODIFIER" ></td>
            </tr>       
         </table>
        </form>
    </div>
 </div>