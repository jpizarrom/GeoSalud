<?php
$this->breadcrumbs=array(
	'Profesional'=>array('/profesional'),
    'Lugar'=>array('/lugar'),
	'List',

);

$this->menu=array(
	array('label'=>'Create Profesional', 'url'=>array('create')),
//	array('label'=>'Manage Profesional', 'url'=>array('admin')),
//	array('label'=>'Search Profesional', 'url'=>array('search')),
);


// import the library
Yii::import('ext.gmaps.*');
$gMap = new EGMap();
$gMap->setJsName('test_map');
$gMap->addGlobalVariable($gMap->getJsName().'_info_window','null');
?>

<div class="widget_middle style1Frame">
<div id="content_top">
	<div class="title_content_top">
		<h1 class="h1Search">Buscar!!</h1>
	</div>

<div class="content-l floatleft">
<?php $this->renderPartial('_list', array('dataProvider'=>$dataProvider)); ?>
</div>

<div class="content-r floatright">
<?php

//$gMap->setZoom(13);
$gMap->setWidth(400);
$gMap->setHeight(400);
$gMap->zoom = 14;
$gMap->setCenter(-35.422753, -71.657266);

//$gMap->addMarker($marker);
/*foreach($dataProvider->getData() as $prof){
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
}*/

$gMap->renderMap();
//$gMap->renderMap(array('map_reload();'));
Yii::app()->getClientScript()->registerScript('map_add_markers', 'map_add_markers();', CClientScript::POS_LOAD);
Yii::app()->getClientScript()->registerScript('map_getMarkersJs', 'map_getMarkersJs();', CClientScript::POS_LOAD);
/*Yii::app()->clientScript->registerScript('helloscript',"
        alert('hello');
    ",CClientScript::POS_READY);*/
?>
<script type="text/javascript">
/*<![CDATA[*/
function map_afterAjaxUpdate(id, data){
//alert(id);
//alert(data);
var id = '#'+id;
var text = "";
text = data;

$(id).replaceWith(text);

//alert("<?php echo $gMap->getMarkers(); ?>");
//test_map.clearOverlays();
map_add_markers();
map_getMarkersJs();
}
/*]]>*/
</script>
<div id="map_javascript">
<script type="text/javascript" class="dataScript">
/*<![CDATA[*/
/*]]>*/
</script>
</div>

</div>

</div>

</div>
