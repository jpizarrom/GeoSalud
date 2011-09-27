<?php
$this->breadcrumbs=array(
	'Horarioatencions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Horarioatencion', 'url'=>array('index')),
	array('label'=>'Create Horarioatencion', 'url'=>array('create')),
	array('label'=>'Update Horarioatencion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Horarioatencion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Horarioatencion', 'url'=>array('admin')),
);
?>

<h1>View Horarioatencion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'atencionid',
		'dia',
		'horainicio',
		'horafin',
	),
)); ?>
