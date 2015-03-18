<?php
require_once('includes/cmsApplication.php');

$app = new CmsApplication();

if (isset($_REQUEST['task'])){ // isset = memeriksa apakah ada isinya atau tidak/ 
	$task = $_REQUEST['task'];
	switch ($task){
		case 'addcontent':
			$app->addcontent();
			break;
		case 'anyothertask':
			$app->anyothertask();
			break;
		default :
		$app->viewcontent();
		echo 'tidak ada request';
	}
}
else{
	$app->viewcontent();
}
