<?php
$this->breadcrumbs=array(
	'Profesional'=>array('/profesional'),
    'Lugar'=>array('/lugar'),
	$model->Nombre,
);

$this->menu=array(
//	array('label'=>'List Profesional', 'url'=>array('index')),
//	array('label'=>'Create Profesional', 'url'=>array('create')),
//	array('label'=>'Update Profesional', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Profesional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Profesional', 'url'=>array('admin')),
);
?>
<div class="widget_middle style1Frame">
<div id="content_top">
	<div class="title_content_top">
		<h1 class="h1Search"><?php echo $model->Nombre; ?></h1>
	</div>

<div class="content-l floatleft">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'cssFile' => Yii::app()->baseUrl . '/css/detailview/styles.css',
	//'tagName' => 'div',
	'itemTemplate'=>"<tr class=\"{class}\"><th>{label}</th><td>{value}</td></tr>\n",
	'attributes'=>array(
		'id',
		'Nombre',
	),
)); ?>
<?php $this->widget('zii.widgets.CListView', array(
	'cssFile' => Yii::app()->baseUrl . '/css/listview/styles.css',
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view_atencion',
)); ?>
</div>

<div class="content-r floatright">
<?php

// import the library
Yii::import('ext.gmaps.*');

$gMap = new EGMap();
//$gMap->setZoom(13);
$gMap->setWidth(400);
$gMap->setHeight(400);
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
</div>

</div>

</div>
