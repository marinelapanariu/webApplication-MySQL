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
Cu o experien???? de peste 50 de ani, oferim produse de ??nalt?? calitate, u??or de folosit, de ??nalt?? performan????, create cu ??tiin???? de ultim?? or?? ??i prin cercet??ri aprofundate ??i adeseori revolu??ionare. C??ut??m ??n mod constant solu??ii ??i tehnologii mai bune pentru a crea produse inovatoare care s?? func??ioneze, respect??ndu-te ??n acela??i timp pe tine ??i respect??nd natura. Tehnologiile noastre brevetate ??i inova??iile mondiale sunt adesea completate de teste de performan???? dovedite clinic.

Oamenii de ??tiin???? ??i exper??ii no??tri acoper?? o varietate de discipline ??i domenii de expertiz??, incluz??nd, dar f??r?? a se limita la: ??tiin??a formulelor, Chimie, ??tiin??a pielii (fiziologie ??i biologie), ??mb??tr??nirea ??i analiza pielii, ??tiin??a alimentar??, ??tiin??a nutri??ional??, Testarea clinic?? ??i Instrumenta??ie. Ace??ti exper??i, ??mpreun?? cu facilit????ile de cercetare ??i dezvoltare de ultim?? genera??ie, ne permit s?? cre??m produse mai sigure ??i mai bune pentru consumatorii no??tri.
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
  
       <br>Copyright ?? 2019 Oriflame Cosmetics Global SA. Toate drepturile sunt rezervate. </br>
         

    </div><!--close footer-->  
  </div><!--close footer_container--> 
  
  </body>
</html>
