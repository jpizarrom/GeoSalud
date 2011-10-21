<?php
$this->breadcrumbs=array(
	'Profesional Especialidad'=>array('index'),
	'View',
);?>

<h1>View Atencion Convenio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'especialidadid',
	),
)); ?>
