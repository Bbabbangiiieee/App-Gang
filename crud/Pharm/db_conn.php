<?php  

$db1 = mysqli_connect("localhost", "root", "", "login");
$db2 = mysqli_connect("localhost", "root", "", "Pharmacy");

if (!$db1 && !$db2) {
	echo "Connection failed!";
}