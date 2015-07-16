<?php
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase{
	// semua fungsi yang terkait pengaturan
	// template ada disini.

	var $templateName='default';
	var $widgetPosition=array();

	function show(){
		require_once($this->getCurrentTemplatePath() . 'template.php');
	}

	function getCurrentTemplatePath(){
		return 'templates/' . $this->templateName.'/';
	}

	function setTemplate($templateName){
		$this->templateName = $templateName;
	}

	function appOutput(){
		$appname = (isset($_REQUEST['app']))?$_REQUEST['app']:'default';
		require_once('apps/'.$appname.'/'.$appname.'.php');
		$application = ucfirst($appname).'Application';
		$app = new $application();
		$app->run();
	}

	function widgetOutput($position='default'){
			if (!empty($this->widgetPosition[$position])){
				$widgets=$this->widgetPosition[$position];
				foreach ($widgets as $widgetObject) {
					$widgetName = $widgetObject->name;
					$widgetParameters = $widgetObject->parameters;
					require_once('widgets/'.$widgetName.'/'.$widgetName.'.php');
					$widgetclass=ucfirst($widgetName).'Widget';
					$widget=new $widgetclass();
					$widget->run($widgetName,$widgetParameters);
				}
			}
	}

	function setWidget($position,$widgetName, $params=array()){
		$widget = new StdClass;
		$widget->name=$widgetName;
		$widget->parameters=$params;

		if (empty($this->widgetPosition[$position])){
			$this->widgetPosition[$position]=array($widget);
		} else {
			array_push($this->widgetPosition[$position], $widget);
		}
	}

}
?>