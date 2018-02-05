<?php
//データベースの接続と選択
$server = "127.0.0.1";  
$userName = "root"; 
$password = ""; 
$dbName = "employ_db";
$mysqli = new mysqli($server, $userName, $password, $dbName);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;
}else{
	$mysqli->set_charset("utf8");
}