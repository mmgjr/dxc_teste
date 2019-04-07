<?php 

class criacaoController extends controller{


	public function modo($c){
	
		$dados = array();
		$page = 'criacao/';
		$page .= addslashes($c);
		
		$this->loadTemplate($page,$dados);
	}


}