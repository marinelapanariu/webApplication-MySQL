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
          <li><a href="despre.php">Despre</a></li>
           <li><a href="cauta.php">Cauta</a></li>
           <li><a href="produse.php">Produse</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="administrator.php">Administrator</a></li>
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->	
    <div id="site_content">	
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
            <?php
session_start();
if(!isset($_SESSION["passname"])){
    header("location:login_success.php");
}
?>
<html>
    <body>
        <table width="100%" cellpadding="10"  cellspacing="50" border="0" rules="rows" height="200%">
                <tr height="50" bgcolor="*3F3">
                   
                    
                    </tr>
 <?php
require_once 'connection.php';
echo "<br>";
echo "<h2>Tabel  Trigger </h2>"; 
echo "<table border='1'>
    <tr>
    <th>Produs</th>
    <th>Firma</th>
    <th>Status</th>
    <th>Edtime</th>
    </tr>";
echo "<br><br>";
$sql4="SELECT *FROM oriflame_update";
foreach ($con->query($sql4) as $row)
        {
    echo "<tr>";
    echo "<td>".$row['produs']."</td>";
    echo "<td>".$row['firma']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<td>".$row['edtime']."</td>";
        }

?>			
            
</table>
            <br><b> Iesire din contul de administrator</b> <a href="logout.php"><font color="#227412">Log out</font></a> 
                <br><b> Revenire in contul de administrator</b> <a href="login_success.php"><font color="#227412">Inapoi</font></a> 
    </body>
       
</html>
          			
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->
	
  <div id="footer_container">
    <div id="footer">
  
          <br>Copyright © 2019 Oriflame Cosmetics Global SA. Toate drepturile sunt rezervate. </br>
         

    </div><!--close footer-->  
  </div><!--close footer_container--> 
  
  </body>
</html>
