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

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'cssFile' => Yii::app()->baseUrl . '/css/detailview/styles.css',
	'attributes'=>array(
		'id',
		'Nombre',
	),
));?>

<?php

// import the library
Yii::import('ext.gmaps.*');

$gMap = new EGMap();
//$gMap->setZoom(13);
$gMap->zoom = 14;
$gMap->setCenter(-35.422753, -71.657266);


	
foreach($model->atencions as $atencion){
	//echo $atencion->lugar->Nombre;
	$lugar = $atencion->lugar;
	// Create GMapInfoWindow
	//$info_window = new EGMapInfoWindow(CHtml::link(CHtml::encode($model->id), array('view', 'id'=>$model->id)));
	// Create marker	
	$marker = new EGMapMarker($lugar->lat, $lugar->lon, array('title' => CHtml::encode($lugar->Nombre)));
	//$marker->addHtmlInfoWindow($info_window);
	$gMap->addMarker($marker);
}
//$gMap->zoomOnMarkers();
$gMap->renderMap();
?>
