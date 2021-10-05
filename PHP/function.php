<?php
include ("conn.php");


function get_city_dropdown(){
	global $db;

	$query="SELECT * FROM `bw_city` WHERE deleted=0 ORDER BY `bw_city`.`name` ASC";
	$result= $db->query($query);
	$cityArray=array();
	$i=0;
	while($row= $result->fetch_assoc()){
		$cityArray[$i]['id']= $row['id'];
		$cityArray[$i]['city']= $row['name'];
		$cityArray[$i]['state']= $row['state'];
		$i++;
    }
    
    return $cityArray;
}

?>