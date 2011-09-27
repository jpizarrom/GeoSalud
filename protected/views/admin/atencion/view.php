<?php
$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	$model->atencionid,
);

$this->menu=array(
	array('label'=>'List Atencion', 'url'=>array('index')),
	array('label'=>'Create Atencion', 'url'=>array('create')),
	array('label'=>'Update Atencion', 'url'=>array('update', 'id'=>$model->atencionid)),
	array('label'=>'Delete Atencion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->atencionid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Atencion', 'url'=>array('admin')),
);
?>

<h1>View Atencion #<?php echo $model->atencionid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'atencionid',
		'lugarid',
		'profesionalid',
		'evaluacioncosteada',
	),
)); ?>
