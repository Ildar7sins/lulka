<?php

namespace App\Classes;

use App\Models\HeaderModel as HeaderModel;

/**
* View class
*/
class View
{

	protected $data = [];

	public function __set($name, $value)
	{
		$this->data[$name] = $value;
	}

		public function __get($name)
	{
		return $this->data[$name];
	}


	public function render($template)
	{
		ob_start();
		foreach ($this->data as $key => $val){
			$$key = $val;
		}

		$headerCategories = HeaderModel::getAll();
		$view = new View;
		$view->headerCategories = $headerCategories;
		require_once __DIR__ . '/../View/Includes/Header.php';

		include __DIR__ . '/../View/' . $template;
		require_once __DIR__ . '/../View/Includes/Footer.php';
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}	

	public function display($template)
	{
		echo $this->render($template);
	}
}	