<?php
	
$host = "localhost";
$user = "root";
$password = "";
$datbase = "Issues";
mysql_connect($host,$user,$password);
mysql_select_db($datbase);


// Create connection
$conn = new mysqli("localhost", "root", "", "Issues");
// Check connection
?>