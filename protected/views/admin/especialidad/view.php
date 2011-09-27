<?php
$this->breadcrumbs=array(
	'Especialidads'=>array('index'),
	$model->especialidadid,
);

$this->menu=array(
	array('label'=>'List Especialidad', 'url'=>array('index')),
	array('label'=>'Create Especialidad', 'url'=>array('create')),
	array('label'=>'Update Especialidad', 'url'=>array('update', 'id'=>$model->especialidadid)),
	array('label'=>'Delete Especialidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->especialidadid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Especialidad', 'url'=>array('admin')),
);
?>

<h1>View Especialidad #<?php echo $model->especialidadid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'especialidadid',
		'Nombre',
	),
)); ?>
