<?php
// import the library
Yii::import('ext.gmaps.*');
$gMap = new EGMap();
$gMap->setJsName('test_map');
//Yii::app()->getClientScript()->registerScript('map_add_markers', 'map_add_markers();', CClientScript::POS_READY);
//Yii::app()->getClientScript()->registerScript('map_getMarkersJs', 'map_getMarkersJs();', CClientScript::POS_READY);

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
    'beforeAjaxUpdate' => "map_beforeAjaxUpdate",
    'ajaxUpdate'=>true,
)); ?>

<script type="text/javascript" class="dataScript">
/*<![CDATA[*/
function map_add_markers(){
<?php
foreach($dataProvider->getData() as $prof){
foreach($prof->atencions as $atencion){
    $info_html = '';
	//echo $atencion->lugar->Nombre;
	$lugar = $atencion->lugar;
	// Create GMapInfoWindow
    foreach($lugar->atencions as $at){
//	$info_html .= CHtml::link(CHtml::encode($prof->Nombre), array('view', 'id'=>$prof->id));
	$info_html .= CHtml::link(CHtml::encode($at->profesional->Nombre), array('view', 'id'=>$at->profesional->id));
//	$info_html .= CHtml::link(CHtml::encode(implode(',',$at->profesional->especialidads)), array('view', 'id'=>$at->profesional->id));
    $info_html .= ' ';
	foreach($at->profesional->especialidads as $especialidad)
		$info_html .= CHtml::encode($especialidad->Nombre).', ';

	$info_html .= '<br/>';
    }

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
//alert('map_getMarkersJs');
<?php
echo $gMap->getMarkersJs();
?>
}

function map_beforeAjaxUpdate(id){
for(i=0;i<test_map_markers.length;i++){
test_map_markers[i].setMap(null);
//test_map_markers.remove(test_map_markers[i]);
//alert("m");
}
<?php
foreach ($gMap->getMarkers() as $marker)
{
//        echo $marker->getJsName().".setMap(null);";
//    echo "alert(\" ".$marker->getJsName().".setMap(null);\");";
}
?>
}

jQuery(window).ready(function() {
//map_add_markers();
//map_getMarkersJs();
});
/*]]>*/
</script>
