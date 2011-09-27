<?php
$this->breadcrumbs=array(
	'Horarioatencions',
);

$this->menu=array(
	array('label'=>'Create Horarioatencion', 'url'=>array('create')),
	array('label'=>'Manage Horarioatencion', 'url'=>array('admin')),
);
?>

<h1>Horarioatencions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
