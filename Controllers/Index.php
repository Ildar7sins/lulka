<?php
namespace App\Controllers;

use App\Models\Index as IndexModel;
use App\Models\HeaderModel as HeaderModel;
use App\Classes\View as View;

/**
* Class for work with Index page
*/
class Index
{
	
	public function actionAll()
	{
		
		//Получение данных из БД
		$menu = IndexModel::getAll();
		$headerCategories = HeaderModel::getAll();
		$article = new HeaderModel;
		 
		//Вывод в браузер
		$view = new View;
		$view->headerCategories = $headerCategories;
		$view->articlesCategory = $articlesCategory;
		$view->menu = $menu;
		$view->display('Index.php');
		
	}

	public function actionOne()
	{
		$view = new View;
		$view->display('Index.php');
	}
}