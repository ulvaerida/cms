<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase{
	function run(){
	if (isset($_REQUEST['task'])){ // isset = memeriksa apakah ada isinya atau tidak/ 
	$task = $_REQUEST['task'];
	switch ($task){
		case 'addcontent':
			$this->addcontent();
			break;
		case 'anyothertask':
			$this->anyothertask();
			break;
		default :
			$this->viewcontent();
		echo 'tidak ada request';
		}
		}
		else{
				$this->viewcontent();
			}	
	}

	function addcontent(){
		
	}

	function viewcontent(){
		echo 'disini akan dibuat fungsi untuk menampilkan konten';
	}
	function anyothertask(){
		echo 'fngsi lainnya';
	}
}