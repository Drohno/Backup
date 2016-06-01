<?php
// INCLUDES
include 'util/serveiwebincludes.php';
error_log('inicio appPromos');

try{
	setlocale(LC_ALL, 'ca_ES', 'ca_ES.UTF-8');  // Veure resultat locale -a
	error_log('post');

	/* require codasoc */
	$codasoc = isset($_POST['codasoc']) ? $_POST['codasoc'] : "";
	if ($codasoc == '') error_log('codasoc vacio');

	//Se comprueba si existe el usuario en la asociacion indicada
	$result = queryDB("SELECT Concepto, Descripcion, Imagen, inicioPromo, FinPromo FROM `ofertas` WHERE `id_asoc` = $codasoc and inicioPromo <= curdate() and FinPromo >= curdate() ORDER BY inicioPromo DESC");
	error_log('Antes de iniciar array y enviar a serveiwebincludes');
	$ofertas = array();
	if(mysqli_num_rows($result)>0) {
	  	while($oferta=mysqli_fetch_row($result)){
	  		$ofertas[] = $oferta;
	  	}
	  	resultatJSONpromos('ok','',$ofertas);
	  	error_log('Hay ofertas');
	}else{
		resultatJSONpromos('ko','No se han encontrado ofertas');
		error_log('No hay ofertas');
	}

	@mysql_close($link);
	
}	catch(Exception $e){
		error_log($e->getMessage());
		resultatJSONapp('ko',$e->getMessage());
	}
?>
	