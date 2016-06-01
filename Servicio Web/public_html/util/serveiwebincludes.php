<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'u279508382_root');
define('DB_PASS', 'sk8bcn');
define('DB_NAME', 'u279508382_asoc');

// FUNCIONS VÀRIES

function resultatJSONpromos($result, $error, $ofertas){
	$resultText = 'resultat';
	$errorText = 'error';
	$root = 'ofertas';
	echo json_encode(array($resultText => $result, $errorText => $error, $root => $ofertas));
}

function resultatJSONapplogin($resul, $error, $nom, $ape) {
	//error_log($nom, $ape);
	$resultText = 'resultat';
	$errorText = 'error';
	$nomText = 'nom';
	$apeText = 'ape';
	echo json_encode(array($resultText => $resul , $errorText => $error, $nomText => $nom ,$apeText => $ape));
}

function resultatJSONapp($resul, $error){
	$resultText = 'resultat';
	$errorText = 'error';
	echo json_encode(array($resultText => $resul, $errorText => $error));
}

function queryDB($query) {
	/* connect to the db */
	$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS);
	if (!$link) throw new Exception('Error connect ('.mysqli_error($link).')');

	$bd = mysqli_select_db($link, DB_NAME);
	if (!$bd) throw new Exception('Error db ('.mysqli_error($link).')');

	mysqli_query($link, "SET CHARACTER SET utf8"); // Per evitar problemes de codificació JSON
	
	/* grab the posts from the db */
	$result = mysqli_query($link, $query);
	if (!$result) throw new Exception('Error query ('.mysqli_error($link).'): '.$query);

	// Debug: error_log( $query.' => '.mysql_num_rows($result) );

	return $result;
}

?>
