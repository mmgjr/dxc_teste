<?php 

class fichasController extends controller{

	public function index(){
		$dados = array();	

		$this->loadTemplate('fichas',$dados);
	}


}