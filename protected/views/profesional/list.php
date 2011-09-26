<?php
$this->breadcrumbs=array(
	'Profesionals'=>array('index'),
	'List',

);

$this->menu=array(
//	array('label'=>'Create Profesional', 'url'=>array('create')),
//	array('label'=>'Manage Profesional', 'url'=>array('admin')),
//	array('label'=>'Search Profesional', 'url'=>array('search')),
);
?>

<h1>Profesionals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
