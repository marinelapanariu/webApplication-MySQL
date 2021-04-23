<?php
$dms='mysql';
$host='localhost';
$db='oriflame';
$user='root';
$pass='';
$dsn="$dms:host=$host;dbname=$db";
$con=new PDO($dsn,$user,$pass);
?>