<?php
if((($_POST["passname"]=="manuela")&&($_POST["password"]=="matematica")))
{
    session_start();
    $_SESSION["passname"]=$_POST["passname"];
header("Location:login_success.php");}
else{
   header("Location:administrator.php");
    exit;
    }
?>

