<?php
$this->breadcrumbs=array(
	'Caracteristicalugars'=>array('index'),
	$model->caracteristicaid,
);

$this->menu=array(
	array('label'=>'List Caracteristicalugar', 'url'=>array('index')),
	array('label'=>'Create Caracteristicalugar', 'url'=>array('create')),
	array('label'=>'Update Caracteristicalugar', 'url'=>array('update', 'id'=>$model->caracteristicaid)),
	array('label'=>'Delete Caracteristicalugar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->caracteristicaid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Caracteristicalugar', 'url'=>array('admin')),
);
?>

<h1>View Caracteristicalugar #<?php echo $model->caracteristicaid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'caracteristicaid',
		'Nombre',
	),
)); ?>
