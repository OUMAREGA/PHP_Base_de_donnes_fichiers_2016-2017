	<!DOCTYPE html>
	<html>
	<head>
	    <meta charset="utf-8"/>
		<title>PROJET PHP</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="tyle.css">
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
	           <h3><u>Gestion étudiant</u></h3>
	           <nav><div class='wifeo_conteneur_menu'><div class='wifeo_pagemenu'>
	          <a href="add_stu.php">-Ajout</a><br>
	          </div><div class='wifeo_pagemenu'>
	         <a href="search_stu.php">-Recherche</a><br>
	          </div>
	          
				</td>
				<td align="center"><h2><marquee>Bienvenue à la page d'accueil de ce logiciel</marquee></h2>
				<div class="slider" > <!-- debut slide -->
					<!-- #region Jssor Slider Begin -->

							<!-- Generated by Jssor Slider Maker. -->
							<!-- This demo works with jquery library -->

							<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
							<script type="text/javascript" src="jssor.slider.mini.js"></script>
							<script type="text/javascript" src="jssor.slider.min.js"></script>
							<script type="text/javascript" src="jssor.slider.debug.js"></script>
							<!-- use jssor.slider.debug.js instead for debug -->
							<script>
								jQuery(document).ready(function ($) {

									var jssor_1_SlideshowTransitions = [
									{$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
									{$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
									];

									var jssor_1_options = {
										$AutoPlay: true,
										$SlideshowOptions: {
											$Class: $JssorSlideshowRunner$,
											$Transitions: jssor_1_SlideshowTransitions,
											$TransitionsOrder: 1
										},
										$ArrowNavigatorOptions: {
											$Class: $JssorArrowNavigator$
										},
										$ThumbnailNavigatorOptions: {
											$Class: $JssorThumbnailNavigator$,
											$Cols: 10,
											$SpacingX: 8,
											$SpacingY: 8,
											$Align: 360
										}
									};

									var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

		            //responsive code begin
		            //you can remove responsive code if you don't want the slider scales while window resizing
		            function ScaleSlider() {
		            	var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
		            	if (refSize) {
		            		refSize = Math.min(refSize, 800);
		            		jssor_1_slider.$ScaleWidth(refSize);
		            	}
		            	else {
		            		window.setTimeout(ScaleSlider, 30);
		            	}
		            }
		            ScaleSlider();
		            $(window).bind("load", ScaleSlider);
		            $(window).bind("resize", ScaleSlider);
		            $(window).bind("orientationchange", ScaleSlider);
		            //responsive code end
		        });
		</script>

		<style>

			/* jssor slider arrow navigator skin 05 css */
		        /*
		        .jssora05l                  (normal)
		        .jssora05r                  (normal)
		        .jssora05l:hover            (normal mouseover)
		        .jssora05r:hover            (normal mouseover)
		        .jssora05l.jssora05ldn      (mousedown)
		        .jssora05r.jssora05rdn      (mousedown)
		        */
		        .jssora05l, .jssora05r {
		        	display:;
		        	position:absolute;
		        	/* size of arrow element */
		        	width: 70px;
		        	height: 70px;
		        	cursor: pointer;
		        	background: url('a13.png') no-repeat;
		        	overflow:hidden;
		        }
		        .jssora05l { background-position: -10px -40px; }
		        .jssora05r { background-position: -70px -40px; }
		        .jssora05l:hover { background-position: -130px -40px; }
		        .jssora05r:hover { background-position: -190px -40px; }
		        .jssora05l.jssora05ldn { background-position: -250px -40px; }
		        .jssora05r.jssora05rdn { background-position: -310px -40px; }

		        /* jssor slider thumbnail navigator skin 01 css */
		        /*
		        .jssort01 .p            (normal)
		        .jssort01 .p:hover      (normal mouseover)
		        .jssort01 .p.pav        (active)
		        .jssort01 .p.pdn        (mousedown)
		        */
		        .jssort01 .p {
		        	position: absolute;
		        	top: 0;
		        	left: 0;
		        	width: 72px;
		        	height: 72px;
		        }
		        
		        .jssort01 .t {
		        	position: absolute;
		        	top: 0;
		        	left: 0;
		        	width: 100%;
		        	height: 100%;
		        	border: none;
		        }
		        
		        .jssort01 .w {
		        	position: absolute;
		        	top: 0px;
		        	left: 0px;
		        	width: 100%;
		        	height: 100%;
		        }
		        
		        .jssort01 .c {
		        	position: absolute;
		        	top: 0px;
		        	left: 0px;
		        	width: 68px;
		        	height: 68px;
		        	border: #000 2px solid;
		        	box-sizing: content-box;
		        	background: url('t01.png') -800px -800px no-repeat;
		        	_background: none;
		        }
		        
		        .jssort01 .pav .c {
		        	top: 2px;
		        	_top: 0px;
		        	left: 2px;
		        	_left: 0px;
		        	width: 68px;
		        	height: 68px;
		        	border: #000 0px solid;
		        	_border: #fff 2px solid;
		        	background-position: 50% 50%;
		        }
		        
		        .jssort01 .p:hover .c {
		        	top: 0px;
		        	left: 0px;
		        	width: 70px;
		        	height: 70px;
		        	border: #fff 1px solid;
		        	background-position: 50% 50%;
		        }
		        
		        .jssort01 .p.pdn .c {
		        	background-position: 50% 50%;
		        	width: 68px;
		        	height: 68px;
		        	border: #000 2px solid;
		        }
		        
		        * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
		        	/* ie quirks mode adjust */
		        	width /**/: 72px;
		        	height /**/: 72px;
		        }
		        
		    </style>


		    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow:hidden; visibility:initial; background-color: #24262e;">
		    	<!-- Loading Screen -->
		    	<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
		    		<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		    		<div style="position:absolute;display:block;background:url('/theme/img/loading.') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
		    	</div>
		    	<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
		    		<div data-p="144.50" style="display: none;">
		    			<img data-u="image" src="images/1.png" />
		    			<img data-u="thumb" src="images/1.png" />
		    		</div>
		    		<div data-p="144.50" style="display: none;">
		    			<img data-u="image" src="images/2.jpg" />
		    			<img data-u="thumb" src="images/2.jpg" />
		    		</div>
		    		<div data-p="144.50" style="display: none;">
		    			<img data-u="image" src="images/3.jpg" />
		    			<img data-u="thumb" src="images/3.jpg" />
		    		</div>
		    		

		    	</div>
		    	<!-- Thumbnail Navigator -->
		    	<div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
		    		<!-- Thumbnail Item Skin Begin -->
		    		<div data-u="slides" style="cursor: default;">
		    			<div data-u="prototype" class="p">
		    				<div class="w">
		    					<div data-u="thumbnailtemplate" class="t"></div>
		    				</div>
		    				<div class="c"></div>
		    			</div>
		    		</div>
		    		<!-- Thumbnail Item Skin End -->
		    	</div>
		    	<!-- Arrow Navigator -->
		    	<span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
		    	<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
				</div> <!-- fin slide -->
				</td>
			</tr>
			<tr>
			   <td colspan="2" height="75px"><p align="center">&copy; 2017 MAREGA<p></td>
				
			</tr>
		</table>
	</div>
	</body>
	</html>