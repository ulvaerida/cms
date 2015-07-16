<?php
require_once('includes/templateFunctions.php');
$tmpl=new TemplateFunctions();
$tmpl->setWidget('logoPosition','hello');
$tmpl->setWidget('sidebarPosition','hello');
$tmpl->show();
?>
