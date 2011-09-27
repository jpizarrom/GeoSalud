<?php
$this->breadcrumbs=array(
	'Profesionals'=>array('index'),
	'Map',

);

$this->menu=array(
//	array('label'=>'Create Profesional', 'url'=>array('create')),
//	array('label'=>'Manage Profesional', 'url'=>array('admin')),
//	array('label'=>'Search Profesional', 'url'=>array('search')),
);
?>


<?php
// import the library
Yii::import('ext.gmaps.*');

$gMap = new EGMap();
$gMap->setZoom(13);
$gMap->setCenter(39.721089311812094, 2.91165944519042);

// Create GMapInfoWindow
$info_window = new EGMapInfoWindow('<div>I was living here as a kid!</div>');

// Create marker
$marker = new EGMapMarker(39.721089311812094, 2.91165944519042, array('title' => '"My Town"'));
$marker->addHtmlInfoWindow($info_window);
$gMap->addMarker($marker);
$gMap->renderMap();
?>
