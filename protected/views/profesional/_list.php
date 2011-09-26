<?php
$this->breadcrumbs=array(
	'Profesionals',
);

$this->menu=array(
	array('label'=>'Create Profesional', 'url'=>array('create')),
	array('label'=>'Manage Profesional', 'url'=>array('admin')),
);
?>

<h1>Profesionals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
