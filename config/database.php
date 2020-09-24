<?php
session_start();

$hostname = "octank-db1.chrxcdp91k9r.us-east-2.rds.amazonaws.com";
$username = "fireadmin";
$password = "fightfire";
$database = "firefighters_db";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
	$conn = new mysqli($hostname, $username, $password, $database);
	$conn->set_charset("utf8mb4");
} catch (Exception $e) {
	error_log($e->getMessage());
	exit('Error connecting to database');
}
