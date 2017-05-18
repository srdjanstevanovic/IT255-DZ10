<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization, Token, token, TOKEN');
if($_SERVER['REQUEST_METHOD'] == "OPTIONS"){
	exit();	
}
$servername = "http://localhost/";
$username = "root";
$password = "";
$db = "barutana";
// Kreiraj konekciju
$conn = new mysqli($servername, $username, $password, $db);
?>