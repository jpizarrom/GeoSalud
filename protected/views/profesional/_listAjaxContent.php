<?php
// import the library
Yii::import('ext.gmaps.*');
$gMap = new EGMap();
$gMap->setJsName('test_map');

?>
<?php $this->widget('zii.widgets.CListView', array(
    'id'=>'ajaxListView',
	'cssFile' => Yii::app()->baseUrl . '/css/listview/styles.css',
	'pager' => array(
                    'class'=>'CLinkPager',
                   	'cssFile' => Yii::app()->baseUrl . '/css/listview/pager.css',
                    /*'htmlOptions' => array(
                                        'onclick' => "alert('test');",
                                        ),*/
                    ),
	//'itemsCssClass'=> '',
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'afterAjaxUpdate' => "map_afterAjaxUpdate",
    'ajaxUpdate'=>true,
)); ?>

<script type="text/javascript" class="dataScript">
/*<![CDATA[*/
function map_add_markers(){
<?php
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
?>
}
function map_getMarkersJs(){
<?php
echo $gMap->getMarkersJs();
?>
}

jQuery(window).ready(function() {
//alert('sss');
map_add_markers();
map_getMarkersJs();
});
/*]]>*/
</script>
