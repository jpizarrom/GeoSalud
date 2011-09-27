<?php
$this->breadcrumbs=array(
	'Facilidadpagos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Facilidadpago', 'url'=>array('index')),
	array('label'=>'Create Facilidadpago', 'url'=>array('create')),
	array('label'=>'Update Facilidadpago', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Facilidadpago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facilidadpago', 'url'=>array('admin')),
);
?>

<h1>View Facilidadpago #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Nombre',
	),
)); ?>
