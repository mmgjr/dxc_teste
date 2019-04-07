<?php 

class cadastrarController extends controller{

	public function index(){
		$dados = array();

		$user = new Usuarios();
		if(isset($_POST['email']) && isset($_POST['senha'])){
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);
			
			if(!empty($nome) && !empty($email) && !empty($senha)){

				if($user->cadastrar($nome,$email,$senha)){
					$dados['msg']='<div class="alert alert-success"><strong>Cadastrado com sucesso!</strong><a href="'.BASE_URL.'login" class="alert-link"> Faça o Login aqui!</a></div>';
				}else{
					$dados['msg']='<div class="alert alert-warning">Este usuário já existe! <a href="'.BASE_URL.'login" class="alert-link"> Faça o login aqui!</a></div>';
				}


			}else{
				$dados['msg']='<div class="alert alert-warning">Preencha todos os campos!</div>';
			}
		}	
		$this->loadTemplate('cadastrar',$dados);
	}


}

