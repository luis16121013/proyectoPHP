<?php
session_start();

if(isset($_POST['loguin']) and $_POST['randcheck']==$_SESSION['rand']){
	if((!isset($_REQUEST['name'])) and (!isset($_REQUEST['pass']))){
		require_once('VIEW/loguin.php');
	}else{
		require_once 'CONTROLLER/controller.php';
		$user=new controller();
		$data=$user->validUser($_REQUEST['name'],$_REQUEST['pass']);
		if($data=='err'){
			$err_msg='El usuario no existe';
			require_once('VIEW/loguin.php');
		}else{
			$_SESSION['user']=$data->nameCategory;
			$openS=$_SESSION['user'];
			require_once 'CONTROLLER/'.$openS.'Controller.php';
			$controller= $openS.'Controller';
			$controller= new $controller();
			call_user_func(array($controller,'inicio'));
		}	
	}

}else if(isset($_REQUEST['action'])){
	if(!isset($_SESSION['user'])){
		header("Location:http://localhost/php/REST/");
			
	}else{
		require_once 'CONTROLLER/administradorController.php';
		$controller=$_SESSION['user'].'Controller';
		$controller=new $controller();
		$action=$_REQUEST['action'];
		$action=$controller::urlController($action);
		call_user_func(array($controller,$action));
	}
}else if(isset($_REQUEST['close']) and $_REQUEST['close']=='yes' ){
	session_unset();
	session_destroy();
	if(!isset($_REQUEST['user'])){
		
		header("Location:http://localhost/php/REST/");
	}
}else{
	require_once('VIEW/loguin.php');
}
?>	
