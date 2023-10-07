<?php
$host="localhost";
$user="root";
$pass="";
$db="rosario";

$conn=new mysqli($host,$user,$pass,$db);
if(!$conn){
	echo"error";
}
?>


