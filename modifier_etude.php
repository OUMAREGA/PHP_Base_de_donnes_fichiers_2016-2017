<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
   if($_GET["numero"]) $numero = $_GET["numero"];
   else $numero = 0;

   if (file_exists("fichier/niveau_etude.txt"))  {

         $fp = fopen("fichier/niveau_etude.txt","r");

         while(!feof($fp)) {

            $ligne = fgets($fp,1024);

            if (!empty($ligne)) {

        				$t = array();
        				$t = explode("|",$ligne);

        				if ($t[0]==$numero)  {

                         $niveau ="";
                         $niveau = $t[1];
        				   
        				} // fin de if ($t[0]==$_POST["nom"])                        

            } // fin de if (!empty($ligne)) 

         } // fin de while(!feof($fp)) {

         
        
         fclose($fp);

   } // fin de if (file_exists("fichier/niveau_etude.txt"))
   else echo " Le fichier n'existe pas dans le répertoire <br>";
?>
<link rel="stylesheet" type="text/css" href="newstyle.css">
     <div class="wrap" >
  <div id="formulaire" >
    <form method="post" action="action_modify_level.php" enctype="multipart/form-data">
      <label>
      <table width="600px" align="center" >
      <input type="hidden" name="numero" value="<?php if (!empty($numero)) echo $numero; ?>"><br><br>
      <tr><td width="300x" align="center" ><span>Libelle niveau etude</span></td>
       <td>
       <br><input type="text" name="niveau" value="<?php if (!empty($niveau)) echo $niveau; ?>"></td></tr>
           <tr>
           <td align="center"><input class="sendButton" type="reset" name="annuler" value="ANNULER" ></td>

           <td align="center" ><input class="sendButton" type="submit" name="envoyer" value="MODIFIER" ></td>
            </tr>   
         </table>
        </label>
    </form>
  </div>
 </div>
</form>
</div>
</div>
