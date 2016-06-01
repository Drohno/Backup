<?php
include('login.php');
include('util/serveiwebincludes.php');
include 'util/pushcode.php';

$apiKey = "AIzaSyApza95ofnaNLQCVjzmPU28Q-WiYDZA7Pc"; //api key
$devices = array(); //array of tokens
$message = ""; //message to send
$title = ""; //push title
$posted = false;
$cod = false;

if( $_POST ) {
    $posted = true;

    $codasoc = isset($_POST['codasoc']) ? $_POST['codasoc'] : "";
    if($codasoc != ""){
        $cod = true;
        $title = isset($_POST['titulo']) ? $_POST['titulo'] : "";
        $message = isset($_POST['texto']) ? $_POST['texto'] : "";

        // Database stuff here...
        $result = queryDB("SELECT Nombre FROM asociaciones WHERE id LIKE $codasoc");
        $result = mysqli_fetch_array($result);
        $result = $result['Nombre'];
        //$result = "Asociacion de comercio de prueba"; // Dummy result
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel de control de Notificaciones</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header id="profile">
		<b id="welcome">Welcome: <i><?php echo $_SESSION['login_user']; ?></i></b>
		<b id="logout"><a href="logout.php">Log Out</a></b>
	</header>
  <aside>
    <ul style="list-style-type: none;">
      <li><a href="ofertas.php">Panel de promociones</a></li>
    </ul>
  </aside>
	<div id="panel">
		<h2>Panel de notificacion</h2>
		<form action="" method="post">
			<label>Codigo asociacion:</label><br><br>
			<input id="codasoc" name="codasoc" placeholder="Codigo" type="number" min="0"><br><br>
      <label>Titulo:</label>
      <input id="titulo" name="titulo" placeholder="Titulo de notificacion push" type="text"><br><br>
			<label>Texto:</label>
			<textarea name="texto" id="texto" placeholder="Cuerpo notificacion push"></textarea>
			<?php
		    if( $posted ) {
		    	if($cod == false){
                    echo "<script type='text/javascript'>alert('Campo codigo asociacion vacio')</script>";
                }
		    	else if($result != ""){
		        	//echo "<script type='text/javascript'>confirm('Quieres enviar la notificacion a los usuarios de $result?')</script>";
		        	$result = queryDB("SELECT id_google FROM registros WHERE id_asoc LIKE $codasoc AND id_google NOT LIKE ''");
    				//$devices = mysqli_fetch_row($result);
                                while($row=mysqli_fetch_row($result)){
		        		$devices[]= $row[0];
		        	}
    				//echo "<script type='text/javascript'>alert('$devices[0]')</script>";
    				$gcpm = new GCMPushMessage($apiKey);
    				$gcpm->setDevices($devices);
    				$response = $gcpm->send($message, array('title' => $title)); //title of the message
            echo "<script type='text/javascript'>alert('Enviados: '+ $response.success +'  No enviados: '+ $response.failure);</script>";
            error_log($res);
		    	}
		    	else{
		    		echo "<script type='text/javascript'>alert('El codigo de asociacion $codasoc no existe')</script>";
		    	}
		    }
		  	?>
			<input id="enviar" name="enviar" type="submit" value=" Enviar ">
		</form>
	</div>
</body>
</html>
