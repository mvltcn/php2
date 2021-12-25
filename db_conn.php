<?php

$sname= "localhost";
$usname= "root";
$password = "";

$db_name = "db";

$conn = mysqli_connect($sname, $usname, $password, $db_name);

if (!$conn) {
	echo "Bağlantı hatası!";
}