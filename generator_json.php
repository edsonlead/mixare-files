<?php

header('Content-type: application/json');

$database = "_your_database";
$username = "_your_username";
$password = "_your_password";
$database = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$query = "SELECT * FROM _table";

$query_run = $database->query($query)->fetchAll(PDO::FETCH_ASSOC);

$count = count($query_run);


echo "{ \n\t\"status\": \"OK\",\n\t\"num_results\": $count,\n\t\"results\": ";
foreach($query_run as $row) {
	
	$return[] = array('id'=>$row['id'],
			'lat'=>$row['lat'],
			'lng'=>$row['lng'],
			'elevation'=>$row['elevation'],
			'title'=>$row['title'],
			'distance'=>$row['distance'],
			'has_detail_page'=>$row['has_detail_page'],
			'webpage'=>$row['webpage']);
}

$database = null;

echo json_encode($return)."\n}";

?>
