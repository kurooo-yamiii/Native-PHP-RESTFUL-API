<?php

$sname= "fdb1033.awardspace.net";
$unmae= "4464458_promo";
$password = "rhinakenneth2012";

$db_name = "4464458_promo";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}