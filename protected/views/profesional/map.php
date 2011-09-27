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
	'attributes'=>array(
		'id',
		'Nombre',
	),
)); ?>

<?php
// import the library
Yii::import('ext.gmaps.*');

$gMap = new EGMap();
$gMap->setZoom(13);
$gMap->setCenter(39.721089311812094, 2.91165944519042);

// Create GMapInfoWindow
$info_window = new EGMapInfoWindow(CHtml::link(CHtml::encode($model->id), array('view', 'id'=>$model->id)));

// Create marker
$marker = new EGMapMarker(39.721089311812094, 2.91165944519042, array('title' => CHtml::encode($model->Nombre)));
$marker->addHtmlInfoWindow($info_window);
$gMap->addMarker($marker);
$gMap->renderMap();
?>
