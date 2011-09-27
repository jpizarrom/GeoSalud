<?php
$this->breadcrumbs=array(
	'Convenios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Convenio', 'url'=>array('index')),
	array('label'=>'Create Convenio', 'url'=>array('create')),
	array('label'=>'Update Convenio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Convenio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Convenio', 'url'=>array('admin')),
);
?>

<h1>View Convenio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Nombre',
		'Beneficio',
		'Contacto',
	),
)); ?>
