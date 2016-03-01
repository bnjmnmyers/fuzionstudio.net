<?php
// process client request (VIA URL)
header("Content-Type: application/json");
include("webServices.php");

// $json_url = "http://www.fuzionstudio.net/test/includes/studioData.php?method=".$_REQUEST['method'];
// 
// $json = file_get_contents($json_url);
// $obj = json_decode($json);
// echo $obj->{'AssetId'};

$handle = fopen('php://input','r');
$array = fgets($handle);
echo $array;

if(!empty($_GET['method']))
{
	$functionName = $_GET['method'];
	$return = $functionName();
	//echo $return;
	//deliverResponse(200, "Valid Request", $return);
}
else
{
	// throw invalid request
	deliverResponse(400, "Invalid Request", NULL);
}

function deliverResponse($status, $statusMessage, $data)
{
	//header("HTTP/1.1 $status, $statusMessage");
	$response['status'] = $status;
	$response['statusMessage'] = $statusMessage;
	$response['data'] = $data;
	
	$json_encode = json_encode($response);
	echo $json_encode;
}

?>