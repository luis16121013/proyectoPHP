<?php 

if(isset($_SESSION['user'])){
	header("Location:http://localhost/php/REST/index.php?action=inicio");
}else{
?>
	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>INICIAR SECION</title>
</head>
<body>
	<h1><?php echo 'hola desde el loguin'; ?></h1>
	<h2>
		<?php
		if(isset($err_msg)){
			echo $err_msg;
		}
		$Rand=rand();
		$_SESSION['rand']=$Rand;
		?>
	</h2>
	<div class="content">
		<form action="index.php" method="post"  enctype="multipart/form-data" autocomplete="off">
			<input type="hidden" value="<?php echo $Rand; ?>" name="randcheck"/>
			<input type="text" name="name"/>
			<label>User name</label>
			<input type="password" name="pass"/>
			<label>password</label>
			<input type="submit" name="loguin"/>

		</form>
	</div>

</body>
</html>





<?php 	
}
?>
