<?php 

class loginController extends controller{

	public function index(){
		$dados = array();

		$user = new Usuarios();

		if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
			$email = addslashes($_POST['email']);
			$senha =addslashes($_POST['senha']);

			if($user->login($email,$senha)){
				header("Location: ".BASE_URL);
			}else{
				$dados['msg']='<div class="alert alert-danger">Usuário não encontrado.Por favor, confira se a senha e o e-mail estão corretos.</div>';
			}
		}	
		$this->loadTemplate('login',$dados);
	}
	public function sair(){
		unset($_SESSION['cLogin']);
		header("Location: ".BASE_URL);
	}
}
