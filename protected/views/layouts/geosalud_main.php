<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/geosalud.css" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="masterBody">

	<div id="bodyWrap">
		<div class="contentHeader">

			<div id="header_logo">
				<a id="topDiv" href="<?php echo Yii::app()->request->baseUrl; ?>"> 				  
					<img id="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="Geosalud!!" style="border-width:0px;" />
				</a>
			</div>
			<div class="header_bottom">
				<div class="floatleft">
					<div class="_BreadCrumb menuBreadCrumb">
						<div>
							<a title="Home!!" class="BreadCrumbSelected">Inicio</a>
						</div>
					</div>
				</div>
				<div class="floatright"></div>
			</div>
			<div class="clearfloat"></div>

		</div>
		<div id="divMain" class="main_content">
			<?php echo $content; ?>
		</div>

		<div class="Footer">

			<div class="content_footer">
				<div class="navigationMenu">
					<ul>
						<li class="first action"><a href="/" title="Buscar">Buscar</a>
						</li>
						<li><a href="/contact" title="Informaciones">Nosotros</a></li>
						<li><a href="/member/signup" title="Identifï¿½cate">Regístrate</a>
						</li>
						<li><a href="/faq" title="Ayuda">Ayuda</a></li>
						<li><a href="/feedback" title="Danos tu opiniï¿½n">Tu
								opinión<br />
						</a></li>
					</ul>
				</div>
				<div id="" class="footer_about">
					<br /> <span id="" class="whiteText"> Hartas cosas sobre
						nosotros </span>
				</div>
			</div>

			<div style="clear: both;"></div>
			<div class="geosalud_about">
				<div class="geosalud_content">
					Geosalud.cl es una empresa...</br> ubicada en ...
				</div>
				<div class="geosalud_logo"></div>
			</div>
			<div style="clear: both"></div>
		</div>
</body>

</html>
