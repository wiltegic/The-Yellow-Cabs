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

function get_city_name($city_id){
	global $db;

	$query="SELECT * FROM `bw_city` WHERE deleted=0 and id='".$city_id."'";
	$result= $db->query($query);
	$row= $result->fetch_assoc();

	$city= $row['name'];
    
    return $city;
}

function get_city_id($city_name){
	global $db;

	$query="SELECT * FROM `bw_city` WHERE deleted=0 and name LIKE '".$city_name."'";
	$result= $db->query($query);
	$row= $result->fetch_assoc();

	$city= $row['id'];
    
    return $city;
}

function get_car_list(){
	global $db;

	$query="SELECT ap.id,ap.name,apc.name as cat_name,eight_hrs_c,twelve_hrs_c, ap.price,ap.product_image FROM `aos_products` as ap LEFT JOIN aos_products_cstm on ap.id=aos_products_cstm.id_c LEFT JOIN aos_product_categories as apc on ap.aos_product_category_id=apc.id WHERE ap.deleted=0 and apc.deleted=0 ORDER BY ap.name ASC ";
	$result= $db->query($query);
	$carArray=array();
	$i=0;
	while($row= $result->fetch_assoc()){
		$carArray[$i]['id']= $row['id'];
		$carArray[$i]['car']= $row['name'];
		$carArray[$i]['car_type']= $row['cat_name'];
		$carArray[$i]['eight_hrs']= (int)$row['eight_hrs_c'];
		$carArray[$i]['twelve_hrs']= (int)$row['twelve_hrs_c'];
		$carArray[$i]['rate']= (float)$row['price'];
		$carArray[$i]['product_image']= $row['product_image'];
		$i++;
	}
	return $carArray;
}

function get_city_distance($from_city,$to_city,$car_id){
	global $db;

	$response= array();

	if(!empty($car_id)){
		$query1="SELECT * FROM `aos_products` LEFT JOIN aos_products_cstm on aos_products.id=aos_products_cstm.id_c WHERE aos_products.id='".$car_id."' and deleted=0 ";;
		$result1= $db->query($query1);
		$row1= $result1->fetch_assoc();
		$response['rate']= (int)$row1['price'];
		$response['minimum_range']= (int)$row1['minimum_range_c'];
		$response['eight_hrs_rate']= (int)$row1['eight_hrs_c'];
		$response['twelve_hrs_rate']= (int)$row1['twelve_hrs_c'];
		$response['product_image']= $row1['product_image'];
	}
	$query="SELECT * FROM `bw_trips` WHERE (bw_city_id_c='".$from_city."' and bw_city_id1_c='".$to_city."') OR (bw_city_id1_c='".$from_city."' and bw_city_id_c='".$to_city."')  and deleted=0";
	$result= $db->query($query);
	if($result->num_rows > 0){
		$row= $result->fetch_assoc();
		$response['status']= "success";
		$response['distance']= $row['distance'];
		
	}else{
		$response['status']= "fail";
		$response['message']= "No Trip Found";
	}

	return $response;
	
}

function addBookingToCRM($data, $entryPoint){
	global $db,$CRM_URL;

	$curl = curl_init();
    // echo"<pre>";print_r($data);exit;
    curl_setopt_array($curl, array(
        CURLOPT_URL =>$CRM_URL.$entryPoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(),
	));
	
	$response = curl_exec($curl);

	curl_close($curl);

	
	return json_decode($response,true);
}

?>