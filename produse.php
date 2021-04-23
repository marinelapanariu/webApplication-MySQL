<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
  <title>Oriflame</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>
<body>
  <div id="main">
       <div id="header">
	  <div id="banner">
	    <div id="welcome">
	        <h1><b> 
 
                     
                             <p style="text-align:center; color:white">ORIFLAME</p>
                         
                  </b></h1>
	    </div><!--close welcome-->
	   
	  </div><!--close banner-->
    </div><!--close header-->
	<div id="menu_container">
	  <div id="menubar">
        <ul id="menu">
           <li><a href="index.php">Acasa</a></li>
           <li><a href="machiaje.php">Machiaj</a></li>       
          <li><a href="pr_parfumuri.php">Parfumuri</a></li>
             <li><a href="pr_hair.php">Hair</a></li>
         
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->	
    <div id="site_content">
                 <?php
require_once 'connection.php';

 $sql1="DROP PROCEDURE IF EXISTS afiseazaCategorie";
$sql2="CREATE PROCEDURE afiseazaCategorie(
     IN strCategorie varchar(30))
BEGIN
SELECT * FROM oriflame WHERE categorie=strCategorie;
END;";
$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();

?>
<div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
              
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
          
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
       </div><!--close sidebar_container-->	
	
      <ul class="slideshow">
        <li class="show"><img width="680" height="300" src="images/img1.jpg"/></li>
        <li><img width="680" height="300" src="images/img2.jpg"/></li>
      </ul>   
        <div id="content">
        <div class="content_item">
            <br>

                <h3><b> <p style="text-align:center">Produse Oriflame pentru femei</p></b></h3>
                             <br>
                                 
                             <br>
Cu o experiență de peste 50 de ani, oferim produse de înaltă calitate, ușor de folosit, de înaltă performanță, create cu știință de ultimă oră și prin cercetări aprofundate și adeseori revoluționare. Căutăm în mod constant soluții și tehnologii mai bune pentru a crea produse inovatoare care să funcționeze, respectându-te în același timp pe tine și respectând natura. Tehnologiile noastre brevetate și inovațiile mondiale sunt adesea completate de teste de performanță dovedite clinic.

Oamenii de știință și experții noștri acoperă o varietate de discipline și domenii de expertiză, incluzând, dar fără a se limita la: Știința formulelor, Chimie, Știința pielii (fiziologie și biologie), Îmbătrânirea și analiza pielii, Știința alimentară, Știința nutrițională, Testarea clinică și Instrumentație. Acești experți, împreună cu facilitățile de cercetare și dezvoltare de ultimă generație, ne permit să creăm produse mai sigure și mai bune pentru consumatorii noștri.
		</div><!--close content_item-->
          	
      </div><!--close content-->
      <br>
          
      <br>
          <br>
              
          <br>
                    <br>
          
      <br>
          <br>
              
          <br>
	</div><!--close site_content-->
	
  <div id="footer_container">
    <div id="footer">
  
       <br>Copyright © 2019 Oriflame Cosmetics Global SA. Toate drepturile sunt rezervate. </br>
         

    </div><!--close footer-->  
  </div><!--close footer_container--> 
  
  </body>
</html>
