<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<?php $rootUrl = Yii::app()->request->baseUrl; ?>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushJScript.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushAppleScript.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushBash.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushCpp.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushCSharp.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushCss.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushJava.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushPerl.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushPhp.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushPython.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushSql.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushVb.js"></script>
	<script type="text/javascript" src="<?php echo $rootUrl ?>/assets/syntaxhighlighter_3.0.83/scripts/shBrushXml.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/syntaxhighlighter_3.0.83/styles/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>
	<title><?php echo CHtml::encode($this->pageTitle);  ?> </title>
</head>

<body>

<div class="container" id="page">
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name);?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->

	
		<?php echo $content; ?>
	
	
	<?php if(isset($this->breadcrumbs)):?>
	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink'=>''
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
