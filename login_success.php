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
                    <th align="center"><strong>Informatii</strong></th>
                    <th align="center"><strong>Imagine</strong></th>
                    <th align="center"><strong>Editeaza</strong></th>
                    <th align="center"><strong>Sterge</strong></th>
                   
                    
                    </tr>
   <?php
require_once 'connection.php';

 $sql1="DROP PROCEDURE IF EXISTS afiseazaDateleDinBaza";
$sql2="CREATE PROCEDURE afiseazaDateleDinBaza()
BEGIN
SELECT * FROM oriflame;
END";
$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();
$sql3="CALL afiseazaDateleDinBaza()";
$q=$con->query($sql3);
if($q){
while($row = $q->fetch())
        {$id = $row['id'];
?>
               <tr height="50" bgcolor="*3F3">
                    <td bgcolor="white" align="left" style="width:800px"> 
                        <?php
                        echo "<b>ID:</b> ".$row["id"]."<br/>";
                        echo "<b>Categorie:</b> ".$row["categorie"]."<br/>";
                        echo "<b>Produs:</b> ".$row["produs"]."<br/>";
                        echo "<b>Firma:</b> ".$row["firma"]."<br/>";
                        echo "<b>Pret:</b> ".$row["pret"]."<br/>";
                        
                        
                        ?> 
                    </td>
   
                   <td align="center" style="width:300px">
    
                       <img src="Imagini/<?php echo $row['imagine']; ?>" width="290px" height="290px" style="border:1px solid #333333;">
                          
                  </td>
                    
                    
                    <td bgcolor="white" align="center" style="width:300px">
                     <?php 
                     echo "<a href ='editeaza.php?id=$id'>Editeaza </a>";
                      ?>                  

                   </td>  
                   <td bgcolor="white" align="center" style="width:300px">
                     <?php 
                     echo "<a href ='sterge.php?id=$id'>Sterge </a>";
                      ?>                  

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
        <br><b>Inserati date</b> <a href="inserare.php"><font color="#227412">aici</font></a>
         <br><b>Trigger</b> <a href="trigger.php"><font color="#227412">aici</font></a>    
            <br><b> Iesire din contul de administrator</b> <a href="logout.php"><font color="#227412">Log out</font></a> 
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
