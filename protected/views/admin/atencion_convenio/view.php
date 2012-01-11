<?php
$this->breadcrumbs=array(
	'Atencion Convenio'=>array('/admin/atencion_convenio'),
	'View',
);?>

<h1>View Atencion Convenio #<?php echo $model->atencion->lugar->Nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'atencionid',
	),
)); ?>
