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
             <h3><b> <p style="text-align:center">Alege din portofoliul nostru vast de parfumuri inspirate de visuri.</p></b></h3>

               <br>
             <table align="center" width="100%" cellpadding="1" cellspace="4">
                <tr bgcolor="*3F3">
            
                    <th align="center"><strong>Produs</strong</th>
                    <th align="center"><strong>Firma</strong></th>
                    <th align="center"><strong>Pret/RON</strong></th>
                    <th align="center"><strong>Imagine</strong></th>
                    </tr>  
          <?php
require_once 'connection.php';


$categorie="parfum";
$sql3="CALL afiseazaCategorie('{$categorie}')";
$q=$con->query($sql3);
if($q){
while($row = $q->fetch())
        {
 ?>
                 <tr height="120" bgcolor="*3F3">
                    
                        <?php
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
else {
echo "Nu e bine!!!";    
}
?>
             </table> 
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
