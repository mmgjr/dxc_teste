<?php 

class Core {


	public function run(){
		
		$url ='/';
		if(isset($_GET['url'])){
			$url .= $_GET['url'];
		}
		$params = array();
		if(!empty($url) && $url != '/'){
			$url = explode('/', $url);
			array_shift($url); //remove o primeiro registro do array
			$currentController = $url[0].'Controller';
			array_shift($url);
			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
				array_shift($url);	
			}else{
				$currentAction = 'index';
			}
			if(count($url) > 0){
				$params = $url;
			}
		}else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		if(!file_exists("controllers/".$currentController.".php") || !method_exists($currentController,$currentAction)){
		    $currentController = 'notfoundController';
		    $currentAction = 'index';
		}

		$c = new $currentController();
		//passando chamando a função de uma classe e passando os parâmetros.
		call_user_func_array(array($c, $currentAction), $params);
		/*
		echo "CONTROLLER: ".$currentController."<br>";	
		echo "ACTION: ".$currentAction."<br>";
		echo "PARAMS: ".print_r($params,true)."<br>";
		*/
	//	1 = controller
	//	2 = action
	//	3 = parâmetros
	}


}