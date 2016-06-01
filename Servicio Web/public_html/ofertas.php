<?php
include('login.php');
include('util/serveiwebincludes.php');
include 'util/pushcode.php';

error_log('inicio ofertas.php');

$message = ""; //mensaje oferta
$title = ""; //titulo oferta
$imagen = "";//imagen
$posted = false;
$cod = false;
$push = false;

if( $_POST ) {
    $posted = true;

    $codasoc = isset($_POST['codasoc']) ? $_POST['codasoc'] : "";
    if($codasoc != ""){
        $cod = true;
        $title = isset($_POST['titulo']) ? $_POST['titulo'] : "";
        $message = isset($_POST['texto']) ? $_POST['texto'] : "";
        $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : "";
        $inicio = date('Y-m-d', strtotime($_POST['Inicio']));
        $fin = date('Y-m-d', strtotime($_POST['Fin']));
        $push = $_POST['push'];
        // Database stuff here...
        $result = queryDB("SELECT Nombre FROM asociaciones WHERE id LIKE $codasoc");
        $result = mysqli_fetch_array($result);
        $result = $result['Nombre'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel de Promociones</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header id="profile">
		<b id="welcome">Welcome : <i><?php echo $_SESSION['login_user']; ?></i></b>
		<b id="logout"><a href="logout.php">Log Out</a></b>
	</header>
  <aside>
    <ul style="list-style-type: none;">
      <li><a href="panel.php">Panel de notificaciones</a></li>
    </ul>
  </aside>
	<div id="panel">
		<h2>Panel de promocion</h2>
		<form action="" method="post">
			<label>Codigo asociacion:</label><br><br>
			<input id="codasoc" name="codasoc" placeholder="Codigo" type="number" min=0><br><br>
      <label>Titulo:</label>
      <input id="titulo" name="titulo" placeholder="Titulo de promocion" type="text"><br><br>
			<label>Texto:</label>
			<textarea name="texto" id="texto" placeholder="Cuerpo de la promocion"></textarea><br><br>
      <label>Imagen (url):</label>
      <input id="imagen" name="imagen" placeholder="Imagen de promocion" type="text"><br><br>
      <label>Inicio promocion:</label>
      <input id="inicio" name="Inicio" type="date"><br><br>
      <label>Fin promocion:</label>
      <input id="fin"name="Fin" type="date"><br><br>
      <input type="checkbox" name="push" value="Push">Notificacion Push?<br>
			<?php
		    if( $posted ) {
		    	if($cod == false){
              echo "<script type='text/javascript'>alert('Campo codigo asociacion vacio')</script>";
          }
          else if($title == ""){
            echo "<script type='text/javascript'>alert('Campo titulo promocion vacio')</script>";
          }
          else if ($message == "") {
            echo "<script type='text/javascript'>alert('Campo cuerpo promocion vacio')</script>";
          }
		    	else if($imagen == ""){
              echo "<script type='text/javascript'>alert('Campo imagen vacio')</script>";
		    	}
          elseif ($inicio == "") {
            echo "<script type='text/javascript'>alert('inicio de promocion vacio')</script>";
          }
          elseif ($fin == "") {
            echo "<script type='text/javascript'>alert('fin de promocion vacio')</script>";
          }
          else if($inicio > $fin){
            echo "<script type='text/javascript'>alert('El inicio no puede ser mas tarde que el fin de la promocion')</script>";
          }
          else if($inicio <= $fin){
            try{
              $result = queryDB("INSERT INTO `ofertas`(`Concepto`, `Descripcion`, `Imagen`, `inicioPromo`, `FinPromo`, `id_asoc`)
              VALUES ('$title','$message','$imagen','$inicio','$fin',$codasoc);");
              error_log($result);
              echo "<script type='text/javascript'>alert('Promocion creada correctamente')</script>";
              if($push){
                //CODIGO QUE ENVIA NOTIFICACION DE NUEVA OFERTA
                $apiKey = "AIzaSyApza95ofnaNLQCVjzmPU28Q-WiYDZA7Pc"; //api key
                $devices = array(); //array of tokens
                $message = "No te pierdas la nueva oferta"; //message to send
                $title = "NUEVA OFERTA!"; //push title
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
                        echo "<script type='text/javascript'>alert('Clientes alertados correctamente')</script>";
                	error_log($res);
                }catch(Exception $e){
              	error_log($e->getMessage());
               }
              }
            }catch(Exception $e){
            	error_log($e->getMessage());
            }
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
		