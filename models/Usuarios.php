<?php 

class Usuarios extends model{


	public function login($email,$senha){
		$sql="SELECT id FROM usuarios WHERE email=:email AND senha=:senha";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':email',$email);
		$sql->bindValue(':senha',md5($senha));
		$sql->execute();
		
		if($sql->rowCount() > 0){
			$dado = $sql->fetch();
			$_SESSION['cLogin']=$dado['id'];
			return true;
		}else{
			return false;
		}
	}

	public function cadastrar($nome,$email,$senha){
		$sql = "SELECT id FROM usuarios WHERE email=:email";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':email',$email);
		$sql->execute();

		if($sql->rowCount() == 0){
			$sql = "INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha";
			$sql=$this->pdo->prepare($sql);
			$sql->bindValue(':nome',$nome);
			$sql->bindValue(':email',$email);
			$sql->bindValue(':senha',md5($senha));
			$sql->execute();

			return true;
		}else{
			return false;
		}

	}

	public function getUser($id){
		$dados = array();
		$sql = "SELECT * FROM usuarios WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":id",$id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
		
		}
		
		return $dados;

	}
}