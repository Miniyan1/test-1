<?php
$host = " "; //host name usually if you are using local machine then it will be "localhost".
$user = " "; //username usually if you are using local machine then it will be "root".
$pass = ""; //username usually if you are using local machine then it will be blank.
$dbname = "project"; //it is the database name where your related table are located. In my case it is stored in project database and user table.

$conn = mysqli_connect($host,$user,$pass,$dbname);

if(!$conn)
{
	echo "Unable Due To :" .mysql_error();
}
?>
