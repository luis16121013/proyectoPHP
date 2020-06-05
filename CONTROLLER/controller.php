<?php  
require_once 'MODEL/user.php';
class controller{
	private $user;
	public function __construct(){
		$this->user=new user();
	}
	public function validUser($n,$p){
		$response=$this->user->getUser($n,$p);
		if($response && $response->nameCategory=='administrador'){
			return $response;
		}else if($response && $response->nameCategory=='empleado'){
			return $response;
		}else if(!$response){
			return 'err';
		}
	}
}
?>