<?php

/**
* Class for work with Index page
*/
class ContactsController
{
	
	public function actionAll()
	{
		
		$view = new View;
		$view->display('Contacts.php');
		
	}

	public function actionOne()
	{
		$view = new View;
		$view->display('Index.php');
	}
}