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
          
        </div><!--close sidebar-->     		
	<div class="sidebar">
          
        </div><!--close sidebar-->	
        
       </div><!--close sidebar_container-->	
	 
       <ul class="slideshow">
          <li class="show"><img width="680" height="300" src="images/img1.jpg"/></li>
        <li><img width="680" height="300" src="images/img2.jpg"/></li>
      </ul>  	
	
        	 
	 
	  <div id="content">
        <div class="content_item">
		 
          
            <form name="search_form" method="post" action="cauta.php">
                <h3><b>Introduce categoria sau denumirea produsului pentru a vizualiza ofertele noastre</b></h3><input type="text" name="search_box" value="" size="30" height="30"/>
                 <input type="submit" name="search" value="Cauta" maxlength="30"/>
                <input type="reset" size="20" value="Reset"/>   
       </form>
            <br>
     
		  
		  </div><!--close content_container-->
          <div class="content_item">
               <br>
             <table width="100%" cellpadding="4" cellspace="4">
                <tr bgcolor="*3F3">
                    <th align="center"><strong>Categorie</strong></th>
                    <th align="center"><strong>Produs</strong</th>
                    <th align="center"><strong>Firma</strong</th>
                    <th align="center"><strong>Pret/RON</strong</th>
                    <th align="center"><strong>Imagine</strong</th>
                   
                    </tr>  
          <?php
            require_once 'connection.php';
            if(isset($_POST["search"])){
               
   
                $sql1="DROP PROCEDURE IF EXISTS cautaCategorieSauProdus";
$sql2="CREATE PROCEDURE cautaCategorieSauProdus(
     IN strCategorie varchar(30),
     IN strProdus varchar(30))
BEGIN
SELECT * FROM oriflame WHERE categorie=strCategorie OR produs=strProdus;
END;";
$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();
$categorie=$_POST["search_box"];
$produs=$_POST["search_box"];
$sql3="CALL cautaCategorieSauProdus('{$categorie}','{$produs}')";
$q=$con->query($sql3);
 

             while($row = $q->fetch()){
			
                  ?>
                 <tr height="120" bgcolor="*3F3">
                    
                        <?php
		    echo '<td  bgcolor="white" align="center">'.$row["categorie"].'</td>';
                    echo '<td  bgcolor="white" align="center">'.$row["produs"].'</td>';
                    echo '<td  bgcolor="white" align="center">'.$row["firma"].'</td>';
                    echo '<td  bgcolor="white"  align="center">'.$row["pret"].'</td>';
		    
                    	
                    
                        
                        ?> 
                  
   
                   <td align="center" style="width:100px">
    
                       <img src="Imagini/<?php echo $row['imagine']; ?>" width="200px" height="230px" style="border:1px solid #333333;">
                          
                  </td>
                    </tr>
                 <?php
            }
            }
               ?>
             </table> 
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
 
  </div><!--close main-->
  
  <div id="footer_container">
    <div id="footer">
    <br>Copyright © 2019 Oriflame Cosmetics Global SA. Toate drepturile sunt rezervate. </br>
    </div><!--close footer-->  
  </div><!--close footer_container-->  
  
</body>
</html>
