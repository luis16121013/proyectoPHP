<?php 
class database{
	
	public static function getConexion(){
		$host="localhost:3308;";
		$db="users;";
		$user="root";
		try{	
			$con=new PDO('mysql:host=localhost:3308; dbname=users;','root','');
			$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$con->exec("SET CHARACTER SET UTF8");	
		}catch(Exception $e){
			die('error: '.$e->getMessage());
			echo 'linea: '.$e->getLine();
		}
		return $con;
	}
}
?>