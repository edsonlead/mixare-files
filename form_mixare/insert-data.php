<?php
require_once 'config.php';

$latidude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$elevation = $_POST['elevation'];
$title = $_POST['title'];
$distance = $_POST['distance'];
$detail_page = $_POST['detail_page'];
$webpage = $_POST['webpage'];

try {
	$conn->exec("INSERT INTO POI (lat, lng, elevation, title, distance, has_detail_page, webpage) VALUES ('$latidude', '$longitude', '$elevation', '$title', '$distance', '$detail_page', '$webpage')");
}
catch (PDOException $e) {
	print "Error! ".$e->getMessage()."<br><strong>File:</strong> ".$e->getFile()."<br><strong>Line:</strong> ".$e->getLine();
	die();
}

header("Location: index.php");