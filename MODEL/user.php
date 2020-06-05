<?php  
require_once 'database.php';
class user{
	public $idUser;
	public $nameUser;
	public $pass;
	public $nameCategory;

	private $conect;
	public function __construct(){
		$this->conect=database::getConexion();
	}

	public function getUser($name,$pass){
		try{ 
		$sql="SELECT idUser,nameUser,pass,nameCategory from usuario u,category c where u.category=c.idCategory and u.nameUser=? and u.pass=?";
		$rs=$this->conect->prepare($sql);
		$rs->execute(array($name,$pass));
		return $rs->fetch(PDO::FETCH_OBJ);
	}catch(Exception $e){
		die('error:'.$e->getMessage());
	}

	}
}
?>