<?php
$user = "root" ;
$password = " " ;
$server = 'localhost' ;
$database = 'form'; 

$con = mysqli_connect($server,$user,$password);

$db = mysqli_select_db($con,$database);

if ($db) {
	echo "Connection Successful";
}
else{
	die("no connection" . mysql_connect_error()); 
}



?>