<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "project";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if(!$conn)
{
	echo "Unable Due To :" .mysql_error();
}
?>