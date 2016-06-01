<?php
include('util/serveiwebincludes.php');
include 'util/pushcode.php';
error_log("autoNotis iniciado");

$apiKey = "AIzaSyApza95ofnaNLQCVjzmPU28Q-WiYDZA7Pc"; //api key
$devices = array(); //array of tokens
$message = "Mira nuestras ofertas!"; //message to send
$title = "Nos has olvidado?"; //push title
$codasoc = 3; //codi asociacio
try{
	$result = queryDB("SELECT id_google FROM registros WHERE id_asoc LIKE $codasoc AND id_google NOT LIKE ''");
	//$devices = mysqli_fetch_row($result);
	while($row=mysqli_fetch_row($result)){
		$devices[]= $row[0];
	}
	$gcpm = new GCMPushMessage($apiKey);
	$gcpm->setDevices($devices);
	$response = $gcpm->send($message, array('title' => $title)); //title of the message
 	$res = json_encode($response);
	error_log($res);
}catch(Exception $e){
	error_log($e->getMessage());
}
?>