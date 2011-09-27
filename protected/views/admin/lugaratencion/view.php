<?php
$this->breadcrumbs=array(
	'Lugaratencions'=>array('index'),
	$model->lugarid,
);

$this->menu=array(
	array('label'=>'List Lugaratencion', 'url'=>array('index')),
	array('label'=>'Create Lugaratencion', 'url'=>array('create')),
	array('label'=>'Update Lugaratencion', 'url'=>array('update', 'id'=>$model->lugarid)),
	array('label'=>'Delete Lugaratencion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->lugarid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lugaratencion', 'url'=>array('admin')),
);
?>

<h1>View Lugaratencion #<?php echo $model->lugarid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'lugarid',
		'Nombre',
		'Direccion',
		'Fono',
		'email',
		'lat',
		'lon',
	),
)); ?>
