<?php
$this->breadcrumbs=array(
	'Lugaratencions',
);

$this->menu=array(
	array('label'=>'Create Lugaratencion', 'url'=>array('create')),
	array('label'=>'Manage Lugaratencion', 'url'=>array('admin')),
);
?>

<h1>Lugaratencions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
