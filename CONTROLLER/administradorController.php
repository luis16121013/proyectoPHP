<?php  
require_once 'MODEL/admin.php';
class administradorController{
	private $admin;
	public function __construct(){
		$this->admin= new admin();
	}

	public function inicio(){
		
		require_once 'VIEW/administrador/viewAdmin.php';
	}
	

	public static function urlController($url){
		if($url=='inicio'){
			return $url;
		}else{
			return 'inicio';
		}
	}
}
?>