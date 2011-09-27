<?php
$this->breadcrumbs=array(
	'Facilidadpagos',
);

$this->menu=array(
	array('label'=>'Create Facilidadpago', 'url'=>array('create')),
	array('label'=>'Manage Facilidadpago', 'url'=>array('admin')),
);
?>

<h1>Facilidadpagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
