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
              <h2>Ora actuala</h2>
              <script align="center" type="text/javascript" src="js/ceas.js"></script>
              
              
          
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <script type="text/javascript" src="js/calendar.js"></script>
                
                <?php
             $visits=1;
        if(isset( $_COOKIE ["visits"])){
            $visits =(int)$_COOKIE ["visits"];
        }
        setcookie("visits",$visits + 1,time()+(60*60*24*30));
               
        echo "<p>Numarul de vizite:$visits.</p>";
    ?>
              
           <?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'oriflame';
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    /*** echo a message saying we have connected ***/
   
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*** begin the transaction ***/
    $dbh->beginTransaction();
    
    /*** CREATE table statements ***/
    $table = "CREATE TABLE IF NOT EXISTS oriflame_update(
    produs VARCHAR(25) NOT NULL,
     firma VARCHAR(25) NOT NULL,
     status VARCHAR(25) NOT NULL,
     edtime DATETIME NOT NULL
    )";
    $dbh->exec($table);

}
catch(PDOException $e)
    {
   
    $dbh->rollback();
  
    }
   
  
?>
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
       </div><!--close sidebar_container-->	
	
      <ul class="slideshow">
        <li class="show"><img width="680" height="300" src="images/img1.jpg"/></li>
        <li><img width="680" height="300" src="images/img2.jpg"/></li>
      
      </ul>   
        <div id="content">
              <div class="col-lg-12 text-center">
                  
        <div class="content_item ">
            <h1><b><script type="text/javascript" src="js/color.js"></script></h1></b>
           
                <br>
                   <h2><b> <p style="text-align:center">Ofertele saptamanii</p></b></h2>
                   
                    <table cellspacing="30"><tr>
                            <td><img width="190" height="220" src="images/1_1.jpg" <br></td>
                            <td><img width="190" height="220" src="images/3.jpg"></td>
                            <td><img width="190" height="220" src="images/2_1.jpg"></td>
                            
                        </tr>
                        <tr>
                            <td><b>Denumire produs:</b>Ruj lichid cu finisare mată Giordani Gold Iconic Elixir FPS 15<r><br><b><b>Pret:</b>20lei</td>
                            <td><b>Denumire produs:</b>Fond de ten FPS 18 Giordani Gold MasterCreation<r><br><b><b>Pret:</b>60lei</td>
                            <td><b>Denumire produs:</b>Apă de parfum pentru ea So Fever Together<r><br><b><b>Pret:</b>120lei</td>
                                            </tr>
                            
                            
                        
                    </table>
          			
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->
    </div>
  <div id="footer_container">
    <div id="footer">
  
          <br>Copyright © 2019 Oriflame Cosmetics Global SA. Toate drepturile sunt rezervate. </br>
             </div><!--close footer-->  
  </div><!--close footer_container--> 
  
  </body>
</html>
