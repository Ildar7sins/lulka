<?php 

function __autoload($class){
	if (file_exists(__DIR__ . '/../Controllers/' . $class . '.php')) {
		require __DIR__ . '/../Controllers/' . $class . '.php';

	}elseif (file_exists(__DIR__ . '//Classes/' . $class . '.php')) {
		require __DIR__ . '//Classes/' . $class . '.php';

	}elseif (file_exists(__DIR__ . '/../Models/' . $class . '.php')) {
		require __DIR__ . '/../Models/' . $class . '.php';

	}else{
		$classParts = explode('\\', $class);
		//var_dump($classParts); die;
		$classParts[0] = __DIR__;
		$path = implode(DIRECTORY_SEPARATOR, $classParts) . '.php';
		if(file_exists($path)) {
			require $path;
		}
	}
}

















