<!doctype html>
<html>
<head>
<title>Template default dalam CSS
</title>
<link type='text/css' rel='stylesheet' href='<?php echo $this->getCurrentTemplate();?>css/style.css' />

</head>

<body>
	<div class="wrapper">
		<div class="header"><?php this->widgetOutput('logoPosition'); ?> </div>
		<div class="clear"></div>
		<div class ="sidebar"><?php this->widgetOutput('sibarPosition'); ?></div>
		<div class="content"> <?php echo $this->appOutput();?> </div>
		<div class="clear"></div>
		<div class ="footer">bagian footer</div>
	</div>
<?php echo $this->appOutput();?>
</body>
</html>
