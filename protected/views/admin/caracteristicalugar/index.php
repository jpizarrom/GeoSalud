<?php
$this->breadcrumbs=array(
	'Caracteristicalugars',
);

$this->menu=array(
	array('label'=>'Create Caracteristicalugar', 'url'=>array('create')),
	array('label'=>'Manage Caracteristicalugar', 'url'=>array('admin')),
);
?>

<h1>Caracteristicalugars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
