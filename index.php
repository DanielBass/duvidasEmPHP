<?php
spl_autoload_register(function($classe){
	
	if(strpos($classe, 'Controller')> -1){
		if(file_exists('controller/'.$classe.'.php')){
			require_once 'controller/'.$classe.'.php';
 		}
	}else if (file_exists('models/'.$classe.'.php')){
		require_once 'models/'.$classe.'.php';
	}else{
		require_once  'core/'.$classe.'.php';	
	}
	


		
});

$core   = new core();
$core->run();

?>