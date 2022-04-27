<?php   



$localhost = 'localhost:3306';
$username = 'root';
$password  = '';
$database_name  = 'sdckbank';





$conn = mysqli_connect($localhost,$username,$password,$database_name);
if (!$conn) {
	die("not exit ").mysqli_error();
}
