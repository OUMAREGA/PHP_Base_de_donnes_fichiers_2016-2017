	<!DOCTYPE html>
	<html>
	<head>
	    <meta charset="utf-8"/>
		<title>PROJET PHP</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">.wifeo_pagemenu > a{color:#FFFFFF;text-decoration:none} .wifeo_rubrique > a{color:#FFFFFF;text-decoration:none} .wifeo_pagesousmenu > a{color:#FFFFFF;text-decoration:none} .wifeo_conteneur_menu{border-spacing:0px} .wifeo_conteneur_menu{height:auto;width:160px} .wifeo_pagemenu>a{border-top:1px solid #BD84C6;border-bottom:2px solid #6D3476;background-color:#955C9E;-webkit-transition-property:background-color;-moz-transition-property:background-color;-ms-transition-property:background-color;-o-transition-property:background-color;transition-property:background-color;-webkit-transition-duration:1s;-moz-transition-duration:1s;-ms-transition-duration:1s;-o-transition-duration:1s;width:160px;padding:5px;height:30px;text-align:center;display:table-cell;vertical-align:middle} .wifeo_pagemenu>a:hover{border-top:1px solid #3B0244;border-bottom:2px solid #3B0244;background-color:#3B0244;width:160px;padding:5px;height:30px;text-align:center;display:table-cell;vertical-align:middle} .wifeo_rubrique>a{background-color:#955C9E;-webkit-transition-property:background-color;-moz-transition-property:background-color;-ms-transition-property:background-color;-o-transition-property:background-color;transition-property:background-color;-webkit-transition-duration:1s;-moz-transition-duration:1s;-ms-transition-duration:1s;-o-transition-duration:1s;transition-duration:1s;border-top:1px solid #BD84C6;border-bottom:2px solid #6D3476;padding:5px;height:30px;width:160px;text-align:center;text-decoration:none;display:table-cell;vertical-align:middle} .wifeo_rubrique>a:hover{background-color:#3B0244;border-top:1px solid #3B0244;border-bottom:1px solid #3B0244} .wifeo_pagesousmenu{background-color:#4F1658;background-image:url();background-position:right;background-repeat:no-repeat;-webkit-transition:all 0.25s ease;-moz-transition:all 0.25s ease;-ms-transition:all 0.25s ease;-o-transition:all 0.25s ease;transition:all 0.25s ease;border-top:1px solid #592062;border-bottom:1px solid #450C4E;padding:5px;width:150px;display:table;text-align:left;padding-top:10px;padding-bottom:10px} .wifeo_pagesousmenu:hover{background-image:url();background-position:left;background-repeat:no-repeat;background-color:#090012;border-top:1px solid #31283A;border-bottom:1px solid #000000;padding:5px;width:150px;display:table;text-align:left;padding-top:10px;padding-bottom:10px} .wifeo_sousmenu{width:160px;display:none}</style>
		<script type="text/javascript">$(function() { $('.wifeo_rubrique > a').click(function() { if ($(this).next().is(':visible')) { $( '.wifeo_sousmenu').slideUp(300); } else { $( '.wifeo_sousmenu').slideUp(300); $(this).next().slideToggle(300); } }); });</script>
	</head>
	<body>
	<div class="cadre" align="center" >
		<table border="1" width="980px" >
			<tr>
				<td colspan="2" height="75px" align="center">
					<span id="elementClignotant">
					<p>
						<h2>MINI LOGICIEL DE GESTION DES ÉTUDIANTS</h2>
					</p>
				</span>
				<script type="text/javascript">

	function textClignotant()
{
    var element = document.getElementById('elementClignotant');
    var random = Math.round(Math.random()*5);
     
    switch (random)
    {
        case 0:
        element.style.color = "indigo";
        break;
         
        case 1:
        element.style.color = "green";
        break;
         
        case 2:
        element.style.color = "blue";
        break;
         
        case 3:
        element.style.color = "brown";
        break;
         
        case 4:
        element.style.color = "purple";
        break;
        case 5:
        element.style.color = "black";
        break;
    }
}
 
window.onload = function(){ setInterval(textClignotant, 1000); };
	</script>
				</td>
				
			</tr>
			<tr>
				<td width="325px" align="center" >
				<h3><u>MENU</u></h3> 
				<h3><u>Gestion niveau étude</u></h3>
	          <nav><div class='wifeo_conteneur_menu'><div class='wifeo_pagemenu'>
	          <a href="add_level.php">-Ajout</a><br>
	          </div><div class='wifeo_pagemenu'>
	         <a href="search_level.php">-Recherche</a><br>
	          </div></div></nav>
	           <h3><u>Gestion etudiant</u></h3>
	           <nav><div class='wifeo_conteneur_menu'><div class='wifeo_pagemenu'>
	          <a href="add_stu.php">-Ajout</a><br>
	          </div><div class='wifeo_pagemenu'>
	         <a href="search_stu.php">-Recherche</a><br>
	          </div>
	          </div>
	          </nav>
				</td>
				<td align="center" ><h2><marquee>Vous pouvez ajouter un etudiant dans ce rubrique <img src="image/1.jpeg" width="30px" height="30px" > </marquee></h2>
				<div style="overflow:scroll; height:300px; border:#000000 0 solid;" >
					 <?php include "form_ajout_etudiant.php"; ?>
			   </div>
				</td>
			</tr>
			<tr>
			   <td colspan="2" height="75px"><p align="center">&copy; 2017 MAREGA<p></td>
				
			</tr>
		</table>
	</div>
	</body>
	</html>