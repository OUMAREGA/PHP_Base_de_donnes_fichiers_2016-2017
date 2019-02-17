<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>PROJET PHP</title>
	<link rel="stylesheet" type="text/css" href="newstyle.css">
</head>
<body>
 <div class="wrap" >
 	<div id="formulaire" >
 		<form method="post" action="action_search_level.php" enctype="multipart/form-data">
 		  <label>
 		  <table width="600px" align="center" >
 		  <tr><td width="300x" align="center" ><span>Niveau d'étude</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="texte" placeholder="Entrez le niveau d'étude" name="niveau"  autofocus></td></tr>
    
           <tr>
           <td align="center"><input class="sendButton" type="reset" name="annuler" value="ANNULER" ></td>

           <td align="center" ><input class="sendButton" type="submit" name="envoyer" value="RECHERCHER" ></td>
            </tr>		
         </table>
        </label>
 		</form>
 	</div>
 </div>
</body>
</html>