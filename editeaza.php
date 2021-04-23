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
            <h2><b>Editati inregistrarea:</b></h2>
            <?php
require_once 'connection.php';
$id =$_GET['id'];
$sql="SELECT * FROM oriflame WHERE id = '$id'";
$result=$con->query($sql);;
$record = $result->fetch();
if (!$result) 
		{
		die("Nu s-au gasit datele");
		}        
                
                ?>
                <img src="Imagini/<?php echo $record['imagine']; ?>" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
				
                  <?php        
                                $denumire=$record['imagine'] ;
                                $categorie=$record['categorie'] ;
				$produs= $record['produs'] ;					
				$firma=$record['firma'] ;
				$pret=$record['pret'] ;

if(isset($_POST['save']))
{	
	  $sql1="DROP PROCEDURE IF EXISTS updateDupaIDSelectat";
$sql2="CREATE PROCEDURE updateDupaIDSelectat( 
 IN strCategorie varchar(30), 
 IN strProdus varchar(30),
 IN strFirma varchar(30),
 IN strImagine varchar(30),
 IN intPret int,
 IN intID int
) 
BEGIN 
UPDATE oriflame SET categorie=strCategorie, produs=strProdus, firma=strFirma ,imagine=strImagine, pret=intPret WHERE id=intID;
END;";

$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();                      $denumire=$record['imagine'] ;
			 		$categorie=$_POST['categorie'] ;
					$produs= $_POST['produs'] ;					
					$firma=$_POST['firma'] ;
					$pret=$_POST['pret'] ;
  
         if($_FILES["image"]["name"] != "")
         {move_uploaded_file($_FILES["image"]["tmp_name"],"Imagini/" . $_FILES["image"]["name"]);			
         $denumire=$_FILES["image"]["name"];}







                                        
$sql5="CREATE TRIGGER TriggerUpperBefore BEFORE UPDATE ON oriflame FOR EACH ROW
BEGIN SET NEW.produs=UPPER(NEW.produs);
END";
       $stmt=$con->prepare($sql5);
       $stmt->execute();
       
    $sql3="CREATE TRIGGER TriggerEditeazaBefore BEFORE UPDATE ON oriflame FOR EACH ROW
    BEGIN
INSERT INTO oriflame_update(produs,firma,status,edtime)VALUES(NEW.produs,NEW.firma,'UPDATED',NOW());
    END;";
    
$stmt=$con->prepare($sql3);
$stmt->execute();
		 $sql4="CALL updateDupaIDSelectat('{$categorie}','{$produs}','{$firma}','{$denumire}','{$pret}','{$id}')"; 
                 $q=$con->query($sql4);	
                 
          
if($q){
   header("Location: login_success.php");
}  else {
echo "Vai vai vai!!!";    
}
}
?>
<form method="post" enctype="multipart/form-data">



    	<tr>
            <td><b>Editeaza imaginea:</b></td>
		<td height="40"><input type="file" name="image" style="margin-top:-115px;"> </td>
	</tr>

<table> 
	<tr>
            <td><b>Categorie:</b></td>
		<td height="40"><input type="text" name="categorie" size="30" height="30" style='height:20px' value="<?php echo $categorie ?>"/></td>
	</tr>
	<tr>
            <td><b>Produs:</b></td>
		<td height="30"><input type="text" name="produs" size="30"  style='height:20px'value="<?php echo $produs ?>"/></td>
	</tr>
	<tr>
            <td height="30"><b>Firma:</b></td>
		<td><input type="text" name="firma" size="30" height="30" style='height:20px' value="<?php echo $firma ?>"/></td>
	</tr>
	<tr>
            <td height="30"><b>Pret:</b></td>
		<td><input type="text" name="pret" size="30" height="30" style='height:20px' value="<?php echo $pret ?>"/></td>
	</tr>
    	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" size="30" style='width:60px'value="Editeaza" /></td>
	</tr>
</table>
    <a href="login_success.php"> Renunta </a>
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
