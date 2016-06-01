<?php
// INCLUDES
include 'util/serveiwebincludes.php';
error_log('inicio applogin');

try{
	setlocale(LC_ALL, 'ca_ES', 'ca_ES.UTF-8');  // Veure resultat locale -a
	error_log('post');

	$email = isset($_POST['logmail']) ? $_POST['logmail'] : "";
	if ($email == '') throw new Exception("Camp Email buit", 1);

	$pass = isset($_POST['logpass']) ? $_POST['logpass'] : "";
	if ($email == '') throw new Exception("Camp Email buit", 1);

	/* require codasoc */
	$codasoc = isset($_POST['codasoc']) ? $_POST['codasoc'] : "";
	if ($codasoc == '') throw new Exception("Camp codasoc buit", 1);

	//Se comprueba si existe el usuario en la asociacion indicada
	$result = queryDB("SELECT id FROM registros WHERE id_cliente LIKE (
		SELECT id from clientes where Email LIKE '$email') AND id_asoc LIKE $codasoc AND pass LIKE '$pass'");

	if(mysqli_num_rows($result)>0) {
		$result = queryDB("SELECT Nombre, Apellidos FROM clientes WHERE Email LIKE '$email'");
                $row=mysqli_fetch_row($result);
		$nom = $row[0];
		$ape = $row[1];
		resultatJSONapplogin('ok', 'Bienvenido de nuevo!', $nom, $ape);
	}
	else{
		resultatJSONapp('ko', 'Login incorrecto');
	}

	@mysql_close($link);
	
}	catch(Exception $e){
		error_log($e->getMessage());
		resultatJSONapp('ko',$e->getMessage());
	}
?>
	