<?php
$this->breadcrumbs=array(
	'Profesional'=>array('/profesional'),
	'List',

);

$this->menu=array(
//	array('label'=>'Create Profesional', 'url'=>array('create')),
//	array('label'=>'Manage Profesional', 'url'=>array('admin')),
//	array('label'=>'Search Profesional', 'url'=>array('search')),
);
?>

<div class="widget_middle style1Frame">
<div id="content_top">
	<div class="title_content_top">
		<h1 class="h1Search">Buscar!!</h1>
	</div>

<div class="content-l floatleft">
<?php $this->widget('zii.widgets.CListView', array(
	'cssFile' => Yii::app()->baseUrl . '/css/listview/styles.css',
	//'itemsCssClass'=> '',
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
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

foreach($dataProvider->getData() as $prof){
foreach($prof->atencions as $atencion){
	//echo $atencion->lugar->Nombre;
	$lugar = $atencion->lugar;
	// Create GMapInfoWindow
	$info_html = CHtml::link(CHtml::encode($prof->Nombre), array('view', 'id'=>$prof->id));
	$info_html .= '<br/>';
	$info_html .= CHtml::link(CHtml::encode($lugar->Nombre), array('lugar/view', 'id'=>$lugar->lugarid));
	$info_html .= '<br/>';
	$info_html .= $lugar->Direccion;
	$info_html .= '<br/>';
	$info_html .= $lugar->Fono;
	$info_html .= '<br/>';
	$info_html .= $lugar->email;
	$info_html .= '<br/>';
	foreach($atencion->convenios as $convenio)
		$info_html .= $convenio->Nombre.', ';

	$info_window = new EGMapInfoWindow( $info_html );
	// Create marker	
	$marker = new EGMapMarker($lugar->lat, $lugar->lon, array('title' => CHtml::encode($lugar->Nombre)));
	$marker->addHtmlInfoWindow($info_window);
	$gMap->addMarker($marker);
}
}

$gMap->renderMap();
?>
</div>

</div>

</div>
