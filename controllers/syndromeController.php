<?php 

class syndromeController extends controller{

	public function sobre(){
		$dados = array();

		$this->loadTemplate('page/sobre',$dados);
	}


	public function type($p){
	
		$dados = array();
		$page = 'page/';
		$page .= addslashes($p);
		
		$this->loadTemplate($page,$dados);
	}


}