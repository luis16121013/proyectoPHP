<?php 
	//session_start(); 
	//if(!isset($_SESSION['user'])){
	//	header("Location:http://localhost/php/REST/view/loguin.php")
	//}else if(){
		
		$var=$_SESSION['user'];
		//$host= $_SERVER["HTTP_HOST"];
		$host=$_SERVER["REQUEST_URI"];
		$uriData=explode("/",$_SERVER["REQUEST_URI"]);
		var_dump($uriData);
	//}else{
		?>

			<!DOCTYPE html>
			<html>
			<head>
				<title>administrador ></title>
			</head>
			<body>
				<h2><?php 
				 echo $var.$host;
				?></h2>
				<h1>HOLA DESDE LA VISTA DEL ADMINISTRADOR</h1>
				<a href="index.php?close=yes">cerrar</a>
			</body>
			</html>

		<?php
	//}
?>
