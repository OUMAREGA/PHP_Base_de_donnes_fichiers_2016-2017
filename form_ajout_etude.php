<!DOCTYPE html>	
<html>
<head>
  <meta charset="utf-8"/>
	<title>AJOUT NIVEAU ETUDE</title>
	<link rel="stylesheet" type="text/css" href="newstyle.css">
</head>
<body>
 <div class="wrap" >
 	<div id="formulaire" >
 		<form method="post" action="action_add_level.php" enctype="multipart/form-data">
 		  <label>
 		  <table width="600px" align="center" >
 		  <tr><td width="300x" align="center" ><span>Libellé niveau étude</span></td>
       <td>&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" name="niveau" placeholder="Entrez votre niveau d'etude" required autofocus></td><td>*</td></tr>
           <tr>
           <td align="center"><input class="sendButton" type="reset" name="annuler" value="ANNULER" ></td>

           <td align="center" ><input class="sendButton" type="submit" name="envoyer" value="ENVOYER" ></td>
            </tr>		
         </table>
        </label>
 		</form>
 	</div>
 </div>
</body>
</html>