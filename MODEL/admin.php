<?php  
require_once 'database.php';
class admin{
	public $idAdmin;
	private $conect;
	public function __construct(){
		$this->conect= database::getConexion();
	}

	public function getUsers(){
		try{
			$sql="SELECT idUser,nameUser,pass,nameCategory from usuario u,category c where u.category=c.idCategory";
			$rs=$this->conect->prepare($sql);
			$rs->execute();
			return $rs->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die('error: '.$e->getMessage());
		}
	}
}
?>