<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'r01rmmpc7.device.mst.edu');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'DB@p3!');
define('DB_NAME', 'test');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("Select CID, count(`Date of Visit`) as `No_of_Visits` 
				  from(Select CID, `Date of Visit`, EXTRACT(MONTH FROM `Date of Visit`) as `Month of Purchase` 
					   from `Add to Shopping Cart`) 
				  as cust_purchase 
				  where `Month of Purchase`=05 group by CID;");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);