<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
	<title>AJOUT ETUDIANT</title>
	<link rel="stylesheet" type="text/css" href="newstyle.css">
</head>
<body>
 <div class="wrap" >
 	<div id="formulaire" >
 		<form method="post" action="action_add_stu.php" enctype="multipart/form-data">
 		  <table width="600px" align="center" >
       <tr><td width="300px" align="center" ><span>Nom</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Entrez votre nom" name="nom" required autofocus></td><td>*</td></tr>
       <tr><td width="300px" align="center" ><span>prenom</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Entrez votre prenom" name="prenom" required></td><td>*</td></tr>
       <tr><td width="300px" align="center" ><span>Date de naissance</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date" required ></td><td>*</td></tr>
       <tr>
       <td align="center" width="300px" height="70px"><span>Sexe</span></td>
       <td>
       	<select name="sexe" required>
       		<option name="feminin">F</option>
       		<option name="masculin" >M</option>
       	</select>
       </td>
       <td>*</td></tr>
       <tr>
       <td align="center" width="300px" height="70px"><span>Niveau etude</span></td>
            <td>
       	<select name="niveau"  required  >
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
       <tr><td width="300px" align="center" ><span>Photo etudiant</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="fichier" ></td><td></td></tr>
           <tr>
           <td align="center"><input class="sendButton" type="reset" name="annuler" value="ANNULER" ></td>
           <td align="center" ><input class="sendButton" type="submit" name="envoyer" value="ENVOYER" ></td>
            </tr>		
         </table>
 		</form>
 	</div>
 </div>
</body>
</html>