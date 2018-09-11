<?php 
require_once('models/hangMan.php');
require_once('view/letterInput.php');		
		$test = new hangMan();

		echo $test->getWord();
 
		$view = new letterInput();
		echo $view->show();
