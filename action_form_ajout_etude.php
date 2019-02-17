<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="newstyle.css">
<style type="text/css">.wifeo_pagemenu > a{color:#FFFFFF;text-decoration:none} .wifeo_rubrique > a{color:#FFFFFF;text-decoration:none} .wifeo_pagesousmenu > a{color:#FFFFFF;text-decoration:none} .wifeo_conteneur_menu{border-spacing:0px} .wifeo_conteneur_menu{height:auto;width:160px} .wifeo_pagemenu>a{border-top:1px solid #BD84C6;border-bottom:2px solid #6D3476;background-color:#955C9E;-webkit-transition-property:background-color;-moz-transition-property:background-color;-ms-transition-property:background-color;-o-transition-property:background-color;transition-property:background-color;-webkit-transition-duration:1s;-moz-transition-duration:1s;-ms-transition-duration:1s;-o-transition-duration:1s;width:160px;padding:5px;height:30px;text-align:center;display:table-cell;vertical-align:middle} .wifeo_pagemenu>a:hover{border-top:1px solid #3B0244;border-bottom:2px solid #3B0244;background-color:#3B0244;width:160px;padding:5px;height:30px;text-align:center;display:table-cell;vertical-align:middle} .wifeo_rubrique>a{background-color:#955C9E;-webkit-transition-property:background-color;-moz-transition-property:background-color;-ms-transition-property:background-color;-o-transition-property:background-color;transition-property:background-color;-webkit-transition-duration:1s;-moz-transition-duration:1s;-ms-transition-duration:1s;-o-transition-duration:1s;transition-duration:1s;border-top:1px solid #BD84C6;border-bottom:2px solid #6D3476;padding:5px;height:30px;width:160px;text-align:center;text-decoration:none;display:table-cell;vertical-align:middle} .wifeo_rubrique>a:hover{background-color:#3B0244;border-top:1px solid #3B0244;border-bottom:1px solid #3B0244} .wifeo_pagesousmenu{background-color:#4F1658;background-image:url();background-position:right;background-repeat:no-repeat;-webkit-transition:all 0.25s ease;-moz-transition:all 0.25s ease;-ms-transition:all 0.25s ease;-o-transition:all 0.25s ease;transition:all 0.25s ease;border-top:1px solid #592062;border-bottom:1px solid #450C4E;padding:5px;width:150px;display:table;text-align:left;padding-top:10px;padding-bottom:10px} .wifeo_pagesousmenu:hover{background-image:url();background-position:left;background-repeat:no-repeat;background-color:#090012;border-top:1px solid #31283A;border-bottom:1px solid #000000;padding:5px;width:150px;display:table;text-align:left;padding-top:10px;padding-bottom:10px} .wifeo_sousmenu{width:160px;display:none}</style>
<?php
  
 if ((!empty($_POST["niveau"]))) {

   $lien_retour ="";
   $lien_retour = "<a href=\"http://localhost/OUMARMAREGA002/projetc/form_ajout_etude.php\">Saisir un autre niveau</a>";

   if (file_exists("fichier/niveau_etude.txt"))  
   {
             
              // Je compte le nombre de ligne non vide dans le fichier
              $fp1 = fopen("fichier/niveau_etude.txt","r");
              $cpt = 0;
              while(!feof($fp1)) {
                
                $lignesse = fgets($fp1, 1024);

                if (!empty($lignesse)) { $cpt++; }
                else {;}

              } // fin de while(!feof($fp1))
              fclose($fp1);
              
               $cpt = $cpt + 1; // Pour saisir un nouvel etudiant, on incrémente le compteur

               $fp = fopen("fichier/niveau_etude.txt","a");
            
               $ligne ="";
               $ligne = $cpt."|".$_POST["niveau"];
               
               fwrite($fp,$ligne);
               fwrite($fp,"\r\n");
               echo "<div class=c1>";
               echo "<p><br><b> Ce niveau d'étude $ligne a été bien saisi dans le fichier</b> <br><br></p>";
                echo"<nav>";
                echo"<div class='wifeo_conteneur_menu'>";
                echo"<div class='wifeo_pagemenu'>";
            echo"<a href=\"http://localhost/OUMARMAREGA002/projetc/add_level.php\">Saisir un autre niveau d'etude </a><br>";
            echo"</div>";
            echo"<div class='wifeo_pagemenu'>";
            echo"</div>";
            echo"</div>";
            echo"</nav>";             
            
               echo "</div>";

               fclose($fp);


    } // fin de if (file_exists("fichier/etudiant.txt"))
    else {

                $fp = fopen("fichier/niveau_etude.txt","w+");
           
                $cpt = 1; // C'est le premier enregistrement, donc $cpt peut être fixé à 1
                $ligne ="";
                $ligne = $cpt."|".$_POST["niveau"];

                fwrite($fp,$ligne);
                fwrite($fp,"\r\n");

                echo "<br> Les informations de l'etudiant $ligne ont été bien saisies dans le fichier <br><br><br>";

                echo  $lien_retour;

                fclose($fp);

    } // fin de else de if (file_exists("fichier/etudiant.txt"))


 } // fin de if (!empty($_POST["numero"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["age"]))
?>
