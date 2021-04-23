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
            <h2><b>Inserati inregistrari in baza de date</b></h2>
            <form method="post" action="inserare.php" enctype="multipart/form-data" >
    
                <tr>
                <td height="30"><b>Insereaza o imagine:</b></td>
		<td><input type="file" size="30" style='height:20px' name="image" class="form-control"/></td>
   
        </tr>
                
<table>
   
        <tr>
            <td height="30"><b>Categorie:<b></td>
		<td><input type="text" size="30" style='height:20px' name="categorie" class="form-control"/></td>
	</tr>
	<tr>
            <td height="30"><b>Produs:</b></td>
		<td><input type="text" size="30" style='height:20px' name="produs" class="form-control"/></td>
	</tr>
	<tr>
            <td height="30"><b>Firma:</b></td>
		<td><input type="text" name="firma" size="30" style='height:20px' class="form-control"/></td>
	</tr>
	<tr>
            <td height="30"><b>Pret:</b></td>
		<td><input type="text" name="pret" size="30" style='height:20px' class="form-control"/></td>
	</tr>
    
  
    
	<tr>
		<td>&nbsp;</td>
		<td height="30"><input type="submit" name="submit" value="Adauga" size="10" style='height:30px' class="btn btn-success btn-lg"/></td>
	</tr>
</table>
                 <?php
require_once 'connection.php';
if (isset($_POST['submit']))
	{	  
        
	$denumire=$_FILES["image"]["name"];
       
move_uploaded_file($_FILES["image"]["tmp_name"],"Imagini/" . $_FILES["image"]["name"]);	
        			 	
      
        $categorie=$_POST['categorie'] ;
	$produs= $_POST['produs'] ;					
	$firma=$_POST['firma'] ;
	$pret=$_POST['pret'] ;
                                        
        $sql1="DROP PROCEDURE IF EXISTS insereazaDateNoi";
$sql2="CREATE PROCEDURE insereazaDateNoi( 
 IN strCategorie varchar(30), 
 IN strProdus varchar(30),
 IN strFirma varchar(30),
 IN strImagine varchar(100),
 IN intPret int
) 
BEGIN 
      INSERT INTO oriflame
       ( categorie,produs,firma,imagine, pret)
VALUES (strCategorie, strProdus, strFirma,strImagine, intPret);
END;";

$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();

			 		

      
                                        
                                        $sql3="CREATE TRIGGER TriggerInsertBefore BEFORE INSERT ON oriflame FOR EACH ROW
    BEGIN
    INSERT INTO oriflame_update(produs,firma,status,edtime)VALUES(NEW.produs,NEW.firma,'INSERTED',NOW());
    END;";
$stmt=$con->prepare($sql3);
$stmt->execute();

		 $sql4="CALL insereazaDateNoi('{$categorie}','{$produs}','{$firma}','{$denumire}','{$pret}')"; 
                 $q=$con->query($sql4);

      if($q){
   header("Location: login_success.php");
}  else {
echo "Datele noi nu s-au inserat!!!";    
}
				
	        }
?>
               
           </form>
	    </div><!--close content_item-->
	  </div><!--content-->   
	</div><!--close site_content-->
  <div id="footer_container">
    <div id="footer">
	   <br>Copyright © 2019 Oriflame Cosmetics Global SA. Toate drepturile sunt rezervate. </br>
    </div><!--close footer-->  
  </div><!--close footer_container--> 		
  
</body>
</html>
