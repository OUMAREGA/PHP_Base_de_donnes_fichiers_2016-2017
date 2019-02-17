<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
	<title>AJOUT NIVEAU ETUDE</title>
</head>
<body>
 <div class="wrap" >
 	<div id="formulaire" >
 		<form method="post" action="action_search_stu.php" enctype="multipart/form-data">
 		  <label>
 		  <table width="600px" align="center" >
 		  <tr><td width="300x" align="center" ><span>Nom</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Entrez votre nom" name="nom" required autofocus></td><td>*</td></tr>
       <tr><td width="300x" align="center" ><span>Prenom</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Entrez votre prenom" name="prenom" required></td><td>*</td></tr>
       <tr><td width="300x" align="center" ><span>Date de naissance</span></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date" required></td><td>*</td></tr>
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