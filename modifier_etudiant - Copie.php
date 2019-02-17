<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

<?php

   if($_GET["numero"]) $numero = $_GET["numero"];
   else $numero = 0;


   if (file_exists("fichier/etudiant.txt"))  {

         $fp = fopen("fichier/etudiant.txt","r");

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
                         $date = $t[3];
        				  				 
        				} // fin de if ($t[0]==$_POST["nom"])                        

            } // fin de if (!empty($ligne)) 

         } // fin de while(!feof($fp)) {

         
         echo "</table>";
         fclose($fp);

   } // fin de if (file_exists("fichier/employe.txt"))
   else echo " Le fichier n'existe pas dans le répertoire <br>";

?>

<div class="wrap" >
    <div id="formulaire" >
        <form method="post" action="action_modifier_etudiant.php" enctype="multipart/form-data">
          <table width="800px" align="center" >
       <tr><td width="350x" align="center" ><span>Nom</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text"  name="nom" value="<?php if (!empty($nom)) echo $nom; ?>"  autofocus></td><td>*</td></tr>
       <tr><td width="350x" align="center" value="<?php if (!empty($prenom)) echo $prenom; ?>" ><span>prenom</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" name="prenom" ></td><td>*</td></tr>
       <tr><td width="350x" align="center"  ><span>Date de naissance</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="date" name="date" value="<?php if (!empty($date)) echo $date; ?>"  ></td><td>*</td></tr>
       <td align="center" width="350px" height="70px"><span>Sexe</span></td>
       <td>
        <select name="sexe">
            <option value="<?php if (!empty($sexe)) echo $sexe
            ; ?>" >F</option>
            <option >M</option>
        </select>
       </td>
       <td>*</td></tr>
       <td align="center" width="350px" height="70px"><span>Niveau etude</span></td>
            <td>
        <select name="niveau" >
            <?php
            $fop=fopen('fichier/niveau_etude.txt','r');
               while ($line=fgets($fop,250)) 
               {
                 $line=explode("|",$line);
                 echo "<option value='".$line[1]."'>".$line[1]."</option>";

               }
               fclose($fop);
            ?>
        </select>
       </td>
       <td>*</td></tr>
       <tr><td width="350x" align="center" ><span>Photo etudiant</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="fichier" ></td><td></td></tr>
           <tr>
           <td align="center"><input class="sendButton" type="reset" name="annuler" value="ANNULER" ></td>
           <td align="center" ><input class="sendButton" type="submit" name="envoyer" value="ENVOYER" ></td>
            </tr>       
         </table>
        </form>
    </div>
 </div>