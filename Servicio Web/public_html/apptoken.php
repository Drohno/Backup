<?php
// INCLUDES
include 'util/serveiwebincludes.php';
error_log('inicio apptoken');

try{
	setlocale(LC_ALL, 'ca_ES', 'ca_ES.UTF-8');  // Veure resultat locale -a
	error_log('post');

	$token= isset($_POST['token']) ? $_POST['token'] : "";
	if ($token == '') error_log('Token vacio');

	$email= isset($_POST['email']) ? $_POST['email'] : "";
	if ($email == '') error_log('Email vacio');

	/* require codasoc */
	$codasoc = isset($_POST['codasoc']) ? $_POST['codasoc'] : "";
	if ($codasoc == '') eror_log('codasoc vacio');

	//Se comprueba si existe el usuario en la asociacion indicada
	$result = queryDB("SELECT id FROM registros WHERE id_cliente LIKE (
		SELECT id from clientes where Email LIKE '$email') AND id_asoc LIKE $codasoc");

	if(mysqli_num_rows($result)>0) {
                //Si existe el usuario actualizamos el token
               $result = queryDB("update registros set id_google = '$token' WHERE id_cliente LIKE (
                  SELECT id from clientes where Email LIKE '$email') AND id_asoc LIKE $codasoc;");    
               if($result){
                  error_log("Token actualizado");
               }else{
                  error_log("Token NO actualizado");
               }
	}

	@mysql_close($link);
	
}	catch(Exception $e){
		error_log($e->getMessage());
		resultatJSONapp('ko',$e->getMessage());
	}
?>
	