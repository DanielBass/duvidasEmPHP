<?php
class core {
	
	public function run(){
		
		$url = explode("index.php",$_SERVER['PHP_SELF'] );
		 $url = end($url);
		
		if(!empty($url)){

			$url = explode('/',$url);
			array_shift($url);

			$currentController =$url[0].'Controller';
			if(isset($url[1])){
				$currentAction=$url[1];
			}else{
				$currentAction='index';
			}

		}else{
			$currentController ='homeController';
			$currentAction = 'index';
		}
		echo $currentController;
		echo "</br>";
		echo $currentAction;
		require_once 'core/controller.php';
		
		$c= new $currentController();
		$c->$currentAction();
		
	}
	
}