<?php
// INCLUDES
include 'util/serveiwebincludes.php';
error_log('inicio appservice');

// FORMULARI

if (empty($_POST)): 
error_log('form');

?>

<form action="appservice.php" method="post">
	<p>Email: <input type="email" name="email" /></p>
        <p>Password: <input type="password" name="regpass" /></p>
	<p>Nombre: <input type="text" name="nom" /></p>
	<p>Apellidos: <input type="text" name="ape" /></p>
	<p>Edad: <input type="number" name="edad" /></p>
	<input type="hidden" name="pushtoken" />
	<p>Cod Asociacion: <input type="number" name="codasoc" /></p>
	<p><input type="submit" /></p>
</form>

<?php
// RESPOSTA

else :
	try{
		setlocale(LC_ALL, 'ca_ES', 'ca_ES.UTF-8');  // Veure resultat locale -a
		error_log('post');

		/* require email */
		$email = isset($_POST['email']) ? $_POST['email'] : "";
		if ($email == '') throw new Exception("Campo Email vacio", 1);

                /* require pass */
		$pass = isset($_POST['regpass']) ? $_POST['regpass'] : "";
		if ($pass == '') throw new Exception("Campo Contraseña vacio", 1);

		/* require nom */
		$nom = isset($_POST['nom']) ? $_POST['nom'] : "";
		if ($nom == '') throw new Exception("Campo Nombre vacio", 1);

		/* require ape */
		$ape = isset($_POST['ape']) ? $_POST['ape'] : "";
		if ($ape == '') throw new Exception("Camp Apellido vacio", 1);

		/* edad no obligatoria */
		$edad = isset($_POST['edad']) ? $_POST['edad'] : "";

		/* Si el usuario no quiere notificaciones puede venir vacio */
		$token = isset($_POST['pushtoken']) ? $_POST['pushtoken'] : "";

		/* require codasoc */
		$codasoc = isset($_POST['codasoc']) ? $_POST['codasoc'] : "";
		if ($codasoc == '') throw new Exception("Camp codasoc buit", 1);

		// CONSULTA 
		//Se comprueba si existe el usuario en la asociacion indicada
		//$result = queryDB("SELECT id FROM registros WHERE id LIKE (
			//SELECT id from clientes where Email LIKE '$email') AND ID LIKE $codasoc");

                $result = queryDB("SELECT id FROM registros WHERE id_cliente LIKE (
			SELECT id from clientes where Email LIKE '$email') AND id_asoc LIKE $codasoc");

		//Si cliente ya esta registrado en esa asociacion
		if(mysqli_num_rows($result)>0) {
			resultatJSONapp('ko', 'Email ya utilizado');
                        error_log('Usuario ya registrado en esta asociacion');
		}
		//Si el cliente no esta registrado en esta asociacion
		else{
                        error_log("Cliente no registrado en esta asociacion");
			$result = queryDB("SELECT Email FROM clientes WHERE Email LIKE '$email'");
			//si el cliente existe en la tabla clientes(puede estar registrado en otra asociacion) se introduce en la tabla registros
			if(mysqli_num_rows($result)>0) {
                                error_log("cliente existe en la tabla clientes, se registra en otra asociacion");
				$result = queryDB( "INSERT INTO registros (id_cliente, id_asoc, id_google, pass) VALUES ((select id from clientes where Email = '$email'), $codasoc, '$token', '$pass')");
				if($result){
                                        error_log("Registro completado");
					resultatJSONapp('ok', 'Registro completado');
				}
			}
			//si el cliente no esta en la tabla clientes se da de alta primero, y luego se introduce en registros
			else{
                                error_log("cliente no esxiste en tabla clientes");
				$result = queryDB( "INSERT INTO clientes(Nombre, Apellidos, Edad, Email) VALUES ('$nom', '$ape', $edad, '$email')");
				if($result) {
					$result = queryDB( "INSERT INTO registros (id_cliente, id_asoc, id_google, pass) VALUES ((select id from clientes where Email = '$email'), $codasoc, '$token', '$pass')");
					if($result) {
                                                error_log("Registro completado");
						resultatJSONapp('ok', 'Registro completado');
					}
				}
				
			}
		}

	@mysql_close($link);

	} catch(Exception $e){
		error_log($e->getMessage());
		resultatJSONapp('ko',$e->getMessage());
	}

endif;
?>						