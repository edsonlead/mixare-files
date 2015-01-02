<?php
$host="_your_host";
$username="_your_username";
$password="_your_password";
$database="_your_database";

try {
	$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
}
catch (PDOException $e) {
	print "Error! ".$e->getMessage()."<br><strong>File:</strong> ".$e->getFile()."<br><strong>Line:</strong> ".$e->getLine();
	die();
}
