<?php 

class homeController extends controller{


	public function index(){
	
		$dados = array();
		
		
		$this->loadTemplate('home',$dados);
	}


	public function sobre($s){
	
		$dados = array();
		$page = 'sobre/';
		$page .= addslashes($s);
		
		$this->loadTemplate($page,$dados);
	}

}