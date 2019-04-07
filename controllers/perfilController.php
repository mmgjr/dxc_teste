<?php 

class perfilController extends controller{

	public function index(){
		$info = array();
		$array = array();
		if(empty($_SESSION['cLogin'])){
			header("Location:".BASE_URL."login");
			exit;
		}
		$id=$_SESSION['cLogin'];
		$user = new Usuarios();
		$info = $user->getUser($id);
		$array['nome']=$info['nome'];
		$array['email']=$info['email'];
		$array['xp']=$info['xp'];
		$this->loadTemplate('perfil',$array);
	}



}